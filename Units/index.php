<? include 'header.php'; ?>

<div class="row">
    <div class="col-md-5 p-5 bg-rid">
    <form name="selRid" id="selRid" method="POST">
      <div class="form-group row">
        <label for="staticEmail" class="col-sm-4 col-form-label">Enter R-No. :</label>
        <div class="col-sm-8">
            <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;R-</strong></div>
                </div>
               <input type="text" class="form-control" name="rid" id="rid" placeholder="41000086" maxlength="8">
            </div>          
        </div>
      </div>
      <div class="form-group row">
        <label for="" class="col-sm-4 col-form-label"></label>
        <div class="col-sm-8">
          <div class="input-group">
                <div class="input-group-prepend">
                  <div class="input-group-text"><strong id="sam"></strong></div>
                </div>
              <input type="text" class="form-control" name="auth" id="auth" placeholder="Enter Sum">
              <input type="hidden" class="form-control" name="sumcaptcha" id="sumcaptcha">
            </div>           
        </div>
      </div>
      <div class="form-group row mb"> 
       <div class="col-md-6 offset-md-6">
       <input type="button" value="Reset" class="btn btn-dark" onClick="window.location.href=window.location.href">
       <input type="submit" name="fetchsub" class="btn btn-primary float-right" value="Submit"> 
      </div>
     </div>
    </form>
    </div>

    <div class="col-md-7 p-5 bg-rid">
       <div id="answers"></div>
    </div>

    

</div>

<br><br><br>

<? include 'footer.php'; ?>

<script type="text/javascript">
     $( document ).ready(function() {
         $("#costest").change(function() {
          
          var result = parseFloat(parseInt($("#costest").val()) * 25)/100;
            $('#costofstorage,#costoftransfer').val(result || ''); //shows value in "#rate"
});
});
</script>



<script type="text/javascript">
  $(document).ready(function() { 

    "use strict";
  $("form[name='costform']").validate({
  
    // Specify validation rules
    // errorElement: 'label', 
    //rules starts here  
    rules: 
    {
    //cosample
      cosample: {     
            required: true,
            maxlength: 10
            },
   //costest    
      costest: {     
            required: true         
           
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //cosample
      cosample: {     
            required: "Please Enter Cost of sample"
            }, 
     //costest    
      costest: {     
            required: " Please Enter Cost of testing"
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

          alert('pay code goes here');
          return false;
        }
      
      //  submitHandler: function(form) {
      //   var entid = $('#rid').val(); 
      //   $.ajax({
      //       url: 'handler/fetchdetail.php',
      //       type: 'POST',
      //       data: {"entidfw": entid },
      //       cache: false,
      //       //data: $(form).serialize(),
      //       success: function(response) {
      //           $('#answers').html(response);
      //       }            
      //   });
      // }
  });  

  });


</script>

<script type="text/javascript">

     $( document ).ready(function() {

      // alert('asa');

         $("input").change(function() {

             var total = 0;
               $(".gidd").each(function() {

                   //alert($(this).val());
                   total = total + parseFloat(parseFloat($(this).val()));
                   total = parseFloat(total);
               })

               //alert(total);
             $('#tot1').val(total || '');   
            //$("input[name=tot1]").val(tot);

         });
     });

</script>

<script type="text/javascript">
  $(document).ready(function() { 

    var mathenticate = {
        bounds: {
            lower: 100,
            upper: 9
        },
        first: 0,
        second: 0,
        generate: function()
        {
            this.first = Math.floor(Math.random() * this.bounds.lower) + 1;
            this.second = Math.floor(Math.random() * this.bounds.upper) + 1;
        },
        show: function()
        {
            return this.first + ' + ' + this.second;
        },
        solve: function()
        {
            return this.first + this.second;
        }
    };
    mathenticate.generate();
    $( "#sam" ).text( mathenticate.show());

    var summ = mathenticate.solve();
    
    $( "#sumcaptcha" ).val(summ);
    
    "use strict";
  $("form[name='selRid']").validate({
  
    // Specify validation rules
    // errorElement: 'label', 
    //rules starts here  
    rules: 
    {
    //rid
      rid: {     
            required: true,
            number: true,
            maxlength: 8,
            minlength: 8
            },
   //captcha    
      auth: {     
            required: true,            
            equalTo: "#sumcaptcha"
            }  
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //username
      rid: {     
            required: "Please Enter rid",
            number : "Please enter a only number(0-9)."
            }, 
     //captcha    
      auth: {     
            required: " Please Enter Sum",
            equalTo: "Please Enter Correct Sum"

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
        var entid = $('#rid').val(); 
        $.ajax({
            url: 'handler/fetchdetail.php',
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

  });


</script>