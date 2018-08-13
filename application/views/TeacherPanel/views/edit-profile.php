<?php

$user_id=$this->session->userdata('user_id');?>

<div class="app-content content container-fluid">
  <div class="content-wrapper">
    <div class="content-header row">
      <div class="content-header-left col-md-6 col-xs-12 mb-1">
        <h2 class="content-header-title">Edit Profile</h2>
      </div>
      <div class="content-header-right breadcrumbs-right breadcrumbs-top col-md-6 col-xs-12">
        <div class="breadcrumb-wrapper col-xs-12">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item"><a href="#">Form Layouts</a>
            </li>
            <li class="breadcrumb-item active"><a href="#">Basic Forms</a>
            </li>
          </ol>
        </div>
      </div>
    </div>
    <div class="content-body">
                <!-- Basic form layout section start -->
<section id="basic-form-layouts">




<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class="card">
            <div class="card-header">
            <label style="color:red;">*Note: Image Size should be 210x210 px</label>

                <a class="heading-elements-toggle"><i class="icon-ellipsis font-medium-3"></i></a>
            </div>
            <div class="card-body collapse in">
                <div class="card-block">
    <form id="form-submit" class="form" enctype="multipart/form-data">
                        
                        <div class="form-body">              
                                <label>Profile Picture</label>
                                <label id="projectinput7" class="file center-block">
                                    <input type="file" name="prof-pic" id="prof-img" >
                                    <span class="file-custom"> 
                 <img style="border-radius:50%;" id="prof-img-tag" src="<?php echo base_url().'img/blank-profile.png'; ?>" height="210" width="210" /></span>
                                </label>

                		<div class="form-group">
                    <label for="eventRegInput1">Experience 
                        </label><br>
                        <button class="btn btn-success add_exp_field">Add More Fields &nbsp; <span style="font-size:20px; font-weight:bold;">+ </span></button>
                <br>
                <div class="exp-container">
                <input type="hidden" value="<?php echo $user_id;?>" class="form-control" name="userid[]">
                <input type="hidden"  class="form-control" name="count[]">
                <input type="text"  class="form-control" placeholder="Company/Organization Name" name="company[]">
                 <input type="text"  class="form-control" placeholder="Position" name="postion[]">
                 <input type="text"  class="form-control" placeholder="From (year)" name="fromyr[]">
                 <input type="text"  class="form-control" placeholder="To (year)" name="toyr[]">
             </div>
                  </div>           
                            </div>
                      

                        <div class="form-actions center">
                            <button type="button" id="cancel_btn" class="btn btn-warning mr-1">
                                <i class="icon-cross2"></i> Cancel
                            </button>
                            <input type="submit" class="btn btn-primary" value="Save" name="save_prof">
                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!-- // Basic form layout section end -->
    </div>
  </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->


<?php include('footer.php');?>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/js/material.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
<script type="text/javascript">
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function (e) {
            $('#prof-img-tag').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
$("#prof-img").change(function(){
    readURL(this);

});

 var max_fields      = 10;
        var wrapper         = $(".exp-container");
        var add_button      = $(".add_exp_field");

        var x = 1;
        $(add_button).click(function(e){
            e.preventDefault();
            if(x < max_fields){
                x++;
 $(wrapper).append('<br><div><input type="hidden" value="<?php echo $user_id;?>" class="form-control" name="userid[]">'+
                     '<input type="hidden"  class="form-control" name="count[]">'+
                     '<input type="text"  class="form-control" placeholder="Company/Organization Name" name="company[]">'+
                     '<input type="text"  class="form-control" placeholder="Position" name="postion[]">'+
                     '<input type="text"  class="form-control" placeholder="From (year)" name="fromyr[]">'+
                     '<input type="text"  class="form-control" placeholder="To (year)" name="toyr[]">'+
                       '<a href="#" class="btn btn-danger delete">Delete</a></div>'); //add input box
            }
      else
      {
      alert('You Reached the limits')
      }
        });

        $(wrapper).on("click",".delete", function(e){

            e.preventDefault(); 
            $(this).parent('div').remove();
            $(this).parent('.exp-container br').remove();

             x--;
        });

$("#form-submit").on('submit', function (e) {
e.preventDefault();
$.ajax({
url: "<?php echo site_url('TeacherPanel/EditProfile/editprofile');?>",
type: "POST",
data: $("#form-submit").serialize()
}).always(function (response){
var r = (response.trim());
if(r == 1){
$(".alert-success").show();
}
else{
$(".alert-danger").show();
}
});
});      
</script>