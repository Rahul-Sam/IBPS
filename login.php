<? include 'header.php'; ?>

<div class="container mb-5">

	<div class="row">
		<div class="col-4 offset-4">
			  <? include('config/globalError.php'); ?>
				<form action="do_login.php" method="POST" name="lgnform" id="lgnform" autocomplete="off" role="presentation">
            
					<div class="form-group mb-10">
	                    <label for="form_name">  <strong> Email as Username  </strong></label>					
						<input type="email" class="form-control" name="username" id="username" placeholder="Enter Username" maxlength="40" autocomplete="off">
					</div>
					<div class="form-group mb-10">
						 <label for="form_name">  <strong>Password </strong></label>
						<input type="password" class="form-control" name="password" id="password" pattern="password" minlength="8" maxlength="16" placeholder="Enter Password" autocomplete="off">					 
					</div>
           
		             <input type="hidden" name="lgnsubmithd" value="Loginhd"> 
		             <input type="submit" name="lgnsubmit" class="btn btn-primary btn-block login-button" value="Login">  
                    <br>
					<div class="checkbox login-options">
						<a href="fpass.php" class="login-forgot">Forgot Password?</a>
					</div>		
			    </form>	
		</div>
	</div>	
</div>

<? include 'footer.php'; ?>

<script type="text/javascript">

$(document).ready(function() {

jQuery.validator.addMethod("noSpace", function(value, element) { 
    return value.indexOf(" ") < 0 && value != ""; 
  }, "Space are not allowed");
	
  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  "use strict";
  $("form[name='lgnform']").validate({
	
    // Specify validation rules
    errorElement: 'label', 
    //rules starts here  
    rules: 
    {
	  //username
      username: {     
            required: true,
			email: true
            }, 
     //password
      password: {     
            required: true,
			noSpace:true,
			maxlength: 16,
			minlength: 8			
            }
	 
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //username
      username: {     
            required: "Please Enter Email as username",
			email: "Please Enter valid Email"
            }, 
     //password
      password: {     
            required: "Please Enter Password",
			maxlength : "Entered Password is too long",
			minlength : "Entered Password is too short"
            } 
     },// message end
	
    
  });  
 
});
</script>