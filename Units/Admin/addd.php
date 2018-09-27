<? include '../header.php'; ?>

<? include('../config/globalError.php'); ?>


<div class="row mt-5">

  <div class="col-md-8 offset-2 bg-rid">

           <form name="costform" id="costform" method="POST" action="../handler/do_add.php">
            <!-- <hr> -->
              <div class="form-group row mt-3">
                <label for="" class="col-sm-4 col-form-label"> Number of Samples : </label>
                <div class="col-sm-8">
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                   <input type="text" class="form-control" name="noofsample" id="noofsample" placeholder="Please Enter Number of Samples" maxlength="3">
                </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"> Cost of sample : </label>
                <div class="col-sm-8">
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                   <input type="text" class="form-control" name="cosample" id="cosample" placeholder="Enter Cost of sample">
                </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label"> Cost of Counter Sample : </label>
                <div class="col-sm-8">
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                   <input type="text" class="form-control" name="costofcountersample" id="costofcountersample" placeholder="Number of Counter Sample" readonly tabindex="-9">
                </div>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="col-sm-4 col-form-label">Total of  Cost of sample and Cost of Counter: </label>
                <div class="col-sm-8">
                   <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                   <input type="text" class="form-control" name="firstsomee" id="firstsomee" placeholder="" readonly tabindex="-22">
                </div>
                </div>
              </div>

           

              <div class="form-group row">
              <label for="" class="col-sm-4 col-form-label "> Cost of testing :</label>
              <div class="col-sm-8">
                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                   <input type="text" class="form-control gidd" name="costest" id="costest" placeholder="Enter Cost of testing">  
                </div>              
              </div>
              </div>

              <div class="form-group row">
               <label for="" class="col-sm-4 col-form-label "> Cost of package transfer :</label>
              <div class="col-sm-8">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                    <input type="text" tabindex="-1" class="form-control gidd" name="costoftransfer" id="costoftransfer" readonly>  
                </div>
                               
              </div>
              </div>


              <div class="form-group row">
               <label for="" class="col-sm-4 col-form-label "> Cost of storage :</label>
              <div class="col-sm-8">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                    <input type="text" tabindex="-2" class="form-control gidd" name="costofstorage" id="costofstorage" readonly>  
                </div>
                                
              </div>
              </div>

              <div class="form-group row">
               <label for="" class="col-sm-4 col-form-label"> Total : </label>
              <div class="col-sm-8">

                <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text"><strong>₹</strong></div>
                    </div>
                    <input type="text" tabindex="-3" class="form-control" id="tot1" name="tot1" readonly> 
                </div>
                                
              </div>
              </div>


              <!-- instrustions -->
              

              <div class="form-group row"> 
               <div class="col-md-12 mb-5">
               	<div class="float-right">
               	<input type="button" value="Reset" class="btn btn-dark" onClick="window.location.href=window.location.href">
                <input type="submit" name="adddcostbtn" class="btn btn-primary " value="Submit">
                <input type="hidden" name="ffridd" value="<?=$_GET['ffridd']?>">

                </div>                
              </div>
             </div>

           </form>
    </div>         
</div>
<? include( '../footer.php'); ?>
<script type="text/javascript">
$( document ).ready(function() {

         $("#costest").change(function() {          
            var result = parseFloat(parseInt($("#costest").val()) * 25)/100;
            $('#costofstorage,#costoftransfer').val(result || ''); //shows value in "#rate"
         });

         $("#cosample").change(function() {     		
     	    $('#costofcountersample').val($("#cosample").val());	
     	});
});
</script>

<script type="text/javascript">
     $( document ).ready(function() {

         $("input").change(function() {

             var total = 0;
               $(".gidd").each(function() {

                   //alert($(this).val());
                   total = total + parseFloat(parseFloat($(this).val()));
                   total = parseFloat(total);
               })

               //alert(total);
             var firstsome  =  $('#noofsample').val()*$('#cosample').val()*2;
             $('#firstsomee').val(firstsome);   
             // var costofsampleandcountersample = $('#cosample').val()*2; 
             var ftotal = total+firstsome;
             //alert($ftotal);           
             $('#tot1').val(ftotal || '');   
            

         });
     });

</script>

<script type="text/javascript">
  $("form[name='costform']").validate({
  
    // Specify validation rules
    // errorElement: 'label', 
    //rules starts here  
    rules: 
    {
      noofsample: {     
              		required: true,
              		digits: true
              }, 
      cosample: {     
              		required: true,
              		digits: true
              },
      costest:{
      	      		required: true,
              		digits: true
               }        
    },//rules ends
    // Specify validation error messages
    messages:
     { 
      noofsample: {  required: "Please Enter Number of samples" },
      cosample: {  required: "Please Enter Cost of sample " },
      costest: {  required: "Please Enter Cost of testing" }
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
        }
  });  
  
</script>