
//Comment Related Ajax Functions

function insertComment(){

	var date=$("#date").val();
	var fname=$("#u_fname").val();
	var lname=$("#u_lname").val();
	var course_id=$("#course_id").val();
	var u_id=$("#u_id").val();
	var des=$("#des").val();
	var type=$("#type").val();
	var base_url=$("#base_url").val();

	$.ajax({

		url:base_url+"Comment_Controller/insertComment",
		data:{"course_id":course_id,"u_id":u_id,"des":des,"date":date,"type":type},
		success:function(data){

			$("#des").val("");
			if(data==1){
				$("#failure").css("display","none");
				$("#success").css("display","block");
				$("#no-comment").css("display","none");
			}
			else{
				$("#failure").css("display","block");
				$("#success").css("display","none");
			}

			showComment(fname,lname,u_id,des,date);
		}

	});
}

function showComment($fname,$lname,$u_id,$des,$date){

		var html='<div class="comment-list"> <div class="single-comment justify-content-between d-flex"> <div class="user justify-content-between d-flex"> <div class="thumb"> <img src="img/blog/c4.jpg" alt=""> </div> <div class="desc"> <h5><a href="#">'+$fname+' '+$lname+'</a></h5> <p class="date">'+$date+'</p> <p class="comment">'+ $des +' </p> </div> </div> <div class="reply-btn"> <a href="" class="btn-reply text-uppercase">reply</a> </div> </div> </div>';
		$(".comments-area").append(html);
}


//Request Course Related Functions
function insertRequestData(){

	var c_title=$("#subject-name").val();
	var des=$("#comment").val();
	var u_email=$("#u_email").val();
	var cat_id=$("#cat").val();
	var place=$("#place").val();
	var base_url=$("#base_url").val();


	$.ajax({
		method:"POST",
		data:{"c_name":c_title,"des":des,"u_email":u_email, "cat_id":cat_id,"place":place},
		url:base_url+"Request_Controller/send_request",
		success:function(data){
			if(data==0){
				$("#requestalert").css("display","block");
				$("#subject-name").val("");
				$("#comment").val("");
				$("#cat").val("");
			}
		}
	});
}

//Send Bid for Request Course
function sendBid(){

	var bid=$("#bid").val();
	var req_id=$("#req_id").val();
	var u_email=$("#u_email").val();
	var base_url=$("#base_url").val();


	$.ajax({
		method:"POST",
		data:{"bid":bid,"req_id":req_id,"u_email":u_email},
		url:base_url+"Bid_Controller/send_bid",
		success:function(data){
			if(data==0){
				$("#bidalert").css("display","block");
				$("#bid").val("");
			}
		}
	});
}

//Get location on radio button click
$('input:radio[name="searchby"]').change(function() {
//Getting Location
if (this.value == 'curr_loc') {


if(navigator.geolocation)
{               var options = {
				enableHighAccuracy: true,
						timeout: 5000,
						   maximumAge: 0
										  };
	navigator.geolocation.getCurrentPosition(showPosition,showError,options); 
}else{
	alert("Browser not Supporting");

}}
  });

  function showPosition(position){
	//  alert("Latitide = "+position.coords.latitude);
	  // x.innerHTML += "Longitude = "+position.coords.longitude;
	  var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
	 
	 $.ajax({
		  type:"GET",
		  url: locAPI,
		  success:function(data){
		   $("#current-location").val(data.results[0].formatted_address);
		  var location=$("#current-location").val();
		   alert('Your Current Location is: '+location);
			var data1 = 'location=' + location;
  
   $.ajax({
			  type: "GET",
			  data: data1,
			  url: "main", //CALLBACK FILE
			  success: function (e) {
			   
			 //document.write(e);
				 
			  },
			  error: function (e) {
				  alert(e);
			  }
		  });
  
	  } });
  }
  
  function showError(error){
	  switch(error.code){
		  case error.PERMISSION_DENIED :
		  alert("User dont want to share location");
		  break;
		  
		  case error.POSITION_UNAVAILABLE :
		  alert("User location is not available");
		  break;
		  
		  case error.TIMEOUT :
		  alert("TIMEOUT ..!!");
		  break;
		  
		  case error.UNKNOWN_ERROR :
		  alert("There is something unknown error");
		  break;
	  }
  }
  

//Variable for checking class status i.e schduled or not
var check_class;

//Check Class is Already Schduled or Not
function check_class(){
	var c_id=$("#c_id").val();
	var base_url=$("#base_url").val();

	if(c_id!=null){
		$.ajax({
		method:"GET",
		data:{"course_id":c_id},
		url:base_url+"TeacherPanel/Main/check_schedule_class",
		success:function(data){
			if(data==1){
				check_class=1;
				$(".alert-danger").css("display","block");
				$(".alert-danger").html("You have Already Schduled this Class - View Details");
			}
		}
		});
	}
}


//Schdule Live Class Function i.e API request of Live class to Braincert
function schedule_class(){

	var c_id=$("#c_id").val();
	var date=$("#date").val();
	var s_time=$("#s_time").val();
	var e_time=$("#e_time").val();
	var base_url=$("#base_url").val();
	var title=$("#c_name"+c_id).val();

	if(c_id==null){
		$(".alert-danger").css("display","block");
		$(".alert-danger").html("Please Select Class Title");
	}
	else{

	//Convert Start Time to 12 Houe format
	var hours = s_time[0] + s_time[1];
    var min = s_time[3] + s_time[4];
    if (hours < 12) {
        s_time=hours + ':' + min + ' AM';
    } else {
        hours=hours - 12;
        hours=(hours.length < 10) ? '0'+hours:hours;
        s_time=hours+ ':' + min + ' PM';
    }

    //Convert End Time to 12 Houe format
	var hours = e_time[0] + e_time[1];
    var min = e_time[3] + e_time[4];
    if (hours < 12) {
        e_time=hours + ':' + min + ' AM';
    } else {
        hours=hours - 12;
        hours=(hours.length < 10) ? '0'+hours:hours;
        e_time=hours+ ':' + min + ' PM';
    }

    //If Class is Already Schduled then Donot Scheduled it Again
    if(check_class!=1){
	    $.ajax({
			method:"POST",
			data:{"title":title,"timezone":"90","start_time":s_time,"end_time":e_time,"date":date},
			url:"https://api.braincert.com/v2/schedule?apikey=gADFNaNMYGJNLmiQEtfP",
			success:function(data){
				var class_id=JSON.parse(data).class_id;
				var status=JSON.parse(data).status;
				if(status=="ok"){
					$(".alert-danger").css("display","none");

					insert_into_db(class_id,c_id,s_time,e_time,date,c_id,base_url,status);
				}else{
					$(".alert-danger").css("display","block");
					$(".alert-danger").html(status=JSON.parse(data).error);
				}
			}
		});
	}else{
		alert(check_class);
		$(".alert-danger").css("display","block");
		$(".alert-danger").html("You have Already Schduled this Class - View Details");
	}
}
}

//Insert Class Id (Recived from API) and other related variables into DB
function insert_into_db(class_id,c_id,s_time,e_time,date,c_id,base_url,status){

	$.ajax({
		method:"GET",
		data:{"cid":class_id,"start_time":s_time,"end_time":e_time,"date":date,"course_id":c_id},
		url:base_url+"TeacherPanel/Main/schedule_class",
		success:function(data){
			if(data==1){

				$("#c_id").val("");
				$("#date").val("");
				$("#s_time").val("");
				$("#e_time").val("");
				$("#c_name"+c_id).val("");
				$(".alert-success").css("display","block");
				$(".alert-danger").css("display","none");

			}else{

				$(".alert-success").css("display","none");
				$(".alert-danger").css("display","block");
				$(".alert-danger").html("Something Went Wrong, Try Again");
			}
		}
	});
}

//Teacher Launch Live Class
function launch_class(id){

	var class_id=id;
	var userId=parseInt($("#t_id"+id).html());
	var userName=$("#userName"+id).html();
	var courseName=$("#c_name"+id).html();
		$.ajax({
			method:"POST",
			data:{"class_id":class_id,"userId":userId,"userName":userName,"isTeacher":"1",
			"courseName":courseName,"lessonName":courseName},
			url:"https://api.braincert.com/v2/getclasslaunch?apikey=gADFNaNMYGJNLmiQEtfP",
			success:function(data){
				data=JSON.parse(data);
					window.open(data.launchurl);
			}
		});

}

//Student Join Live Class
function join_class(id){

	var class_id=id;
	var userId=parseInt($("#s_id"+id).html());
	var userName=$("#userName"+id).html();
	var courseName=$("#c_name"+id).html();
		$.ajax({
			method:"POST",
			data:{"class_id":class_id,"userId":userId,"userName":userName,"isTeacher":"0",
			"courseName":courseName,"lessonName":courseName},
			url:"https://api.braincert.com/v2/getclasslaunch?apikey=gADFNaNMYGJNLmiQEtfP",
			success:function(data){
				data=JSON.parse(data);
					window.open(data.launchurl);
			}
		});

}

