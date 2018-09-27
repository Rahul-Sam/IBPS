<? include '../header.php'; ?>

<? include('../config/globalError.php'); ?>

<div class="row">
    <div class="col-md-5 p-5 bg-rid">
    <form name="selRid1" id="selRid1" method="POST">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-4 col-form-label">Enter R-No. :</label>
        <div class="col-sm-8">
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><strong>R-</strong></div>
                </div>
               <input type="text" class="form-control" name="rid1" id="rid1" placeholder="41000086" maxlength="8">
            </div>          
        </div>
      </div>
      <div class="form-group row mb"> 
       <div class="col-md-6 offset-md-6">
        <input type="button" value="Reset" class="btn btn-dark" onClick="window.location.href=window.location.href">
       <input type="submit" name="fetchsub1" class="btn btn-primary float-right" value="Submit"> 
      </div>
     </div>
    </form>
    </div>

    <div class="col-md-7 p-5 bg-rid">
      <div id="answers"></div>      
    </div>

</div>

<? include '../footer.php'; ?>

<script type="text/javascript">
  $("form[name='selRid1']").validate({
  
    // Specify validation rules
    // errorElement: 'label', 
    //rules starts here  
    rules: 
    {
    //rid
      rid1: {     
            required: true,
            number: true,
            maxlength: 8,
            minlength: 8
            } 
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //username
      rid1: {     
            required: "Please Enter rid",
            number : "Please enter a only number(0-9)."
            }
     },
     highlight: function(element) {
            $(element).closest('.form-group').addClass('has-error');
        },
        unhighlight: function(element) {
            $(element).closest('.form-group').removeClass('has-error');
        },
        errorElement: 'label',
        errorClass: 'error',
        errorPlacement: function(error, element) {
            if(element.parent('.input-group').length) {
                error.insertAfter(element.parent());
            } else {
                error.insertAfter(element);
            }
        },
      
       submitHandler: function(form) {
        var entid = $('#rid1').val(); 
        $.ajax({
            url: '../handler/adddetails.php',
            type: 'POST',
            data: {"entidfw": entid },
            cache: false,
            //data: $(form).serialize(),
            success: function(response) {
                $('#answers').html(response);
            }            
        });
      }
  });  
  
</script>

