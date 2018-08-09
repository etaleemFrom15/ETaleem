$(function () {
    $(".mstar").on("mouseover", function () { //SELECTING A STAR
        $(".rating").hide(); //HIDES THE CURRENT RATING WHEN MOUSE IS OVER A STAR
        var d = $(this).attr("id"); //GETS THE NUMBER OF THE STAR
         
        //HIGHLIGHTS EVERY STAR BEHIND IT
        for (i = (d - 1); i >= 0; i--) {
               $(".mstars .mstar:eq(" + i + ")").addClass("checked");
        }
    }).on("click", function () { //RATING PROCESS
        var course_id = $("#course_id").val(); //GETS THE ID OF THE CONTENT
        var user_email=$("#user_email").val();
        if(user_email==""){
            alert('Please Login to your Account to Rate Courses!')
        }
        else{
              alert('Thanks for Rating the Course!')
        }
        var rating = $(this).attr("id"); //GETS THE NUMBER OF THE STAR
          
        var data = 'rating=' + rating + '&course_id=' + course_id  + '&user_email=' + user_email;

        
        $.ajax({
            type: "POST",
            data: data,
            url: "http://127.0.0.1:8080/ETaleem/courses/rate_course", //CALLBACK FILE
            success: function (e) {
             
                
                   
                $("#ajax_vote").html(e); //DISPLAYS THE NEW RATING IN HTML
            },
            error: function (e) {
                alert(e);
            }
        });
    }).on("mouseout", function () { //WHEN MOUSE IS NOT OVER THE RATING
        $(".rating").show(); //SHOWS THE CURRENT RATING
        $(".mstar").removeClass("checked") //TRANSPARENTS THE BASE
    });

 $("#feedbackbtn").click(function(){

    var feedback=$("#feedback").val();
    var user_email=$("#user_email").val();
      if (feedback == "") {
       alert('Please Write Few Words!');
    } else if (user_email=="") {
        alert('Please Login to your Account to Give Feedback!');
    } else {
        alert('Thanks for giving Feedback!');
    }


       
         var data1 = 'feedback=' + feedback + '&user_email=' + user_email;

         $.ajax({
            type: "POST",
            data: data1,
            url: "http://127.0.0.1:8080/ETaleem/courses/course_feedback", //CALLBACK FILE
            success: function (e) {
             
                
                   
                $("#ajax_vote").html(e); //DISPLAYS THE NEW RATING IN HTML
            },
            error: function (e) {
                alert(e);
            }
        });

    });

        


});



