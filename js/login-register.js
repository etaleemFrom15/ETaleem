
function showRegisterForm(){
    $('.loginBox').fadeOut('fast',function(){
        $('.registerBox').fadeIn('fast');
        $('.login-footer').fadeOut('fast',function(){
            $('.register-footer').fadeIn('fast');
        });
        $('.modal-title').html('Register');
    }); 
    $('.error').removeClass('alert alert-danger').html('');
       
}
function showLoginForm(){
    $('#loginModal .registerBox').fadeOut('fast',function(){
        $('.loginBox').fadeIn('fast');
        $('.register-footer').fadeOut('fast',function(){
            $('.login-footer').fadeIn('fast');    
        });
        
        $('.modal-title').html('Login');
    });       
     $('.error').removeClass('alert alert-danger').html(''); 
}

function openLoginModal(){
    showLoginForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);
    
}
function openRegisterModal(){
    showRegisterForm();
    setTimeout(function(){
        $('#loginModal').modal('show');    
    }, 230);

//Getting Location
       if(navigator.geolocation)
    {               var options = {
                    enableHighAccuracy: true,
                            timeout: 5000,
                               maximumAge: 0
                                              };
        navigator.geolocation.getCurrentPosition(showPosition,showError,options); 
    }else{
        alert("Browser not Supporting");

    }
}
    
function showPosition(position){
  //  alert("Latitide = "+position.coords.latitude);
    // x.innerHTML += "Longitude = "+position.coords.longitude;
    var locAPI = "http://maps.googleapis.com/maps/api/geocode/json?latlng="+position.coords.latitude+","+position.coords.longitude+"&sensor=true";
   
   $.ajax({
        url: locAPI,
        success:function(data){
            console.log(data);
            
        // $("#location").val(data.results[0].formatted_address);
         document.getElementById("location").value=data.results[0].formatted_address;
         
         
        //var location=$("#location").val();
         
          var data1 = 'location=' + location;

 $.ajax({
            type: "GET",
            data: data1,
            url: "main", //CALLBACK FILE
            success: function (e) {
             
           document.write(e);
               
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

function loginAjax(){
    /*   Remove this comments when moving to server
    $.post( "/login", function( data ) {
            if(data == 1){
                window.location.replace("/home");            
            } else {
                 shakeModal(); 
            }
        });
    */

/*   Simulate error message from the server   */
     shakeModal();
}

function shakeModal(){
    $('#loginModal .modal-dialog').addClass('shake');
             $('.error').addClass('alert alert-danger').html("Invalid email/password combination");
             $('input[type="password"]').val('');
             setTimeout( function(){ 
                $('#loginModal .modal-dialog').removeClass('shake'); 
    }, 1000 ); 
}

   