
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
	var base_url=$("#base_url").val();


	$.ajax({
		method:"POST",
		data:{"c_name":c_title,"des":des,"u_email":u_email, "cat_id":cat_id},
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
		   $("#location").val(data.results[0].formatted_address);
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
  





