<?
include '../config/conn.php'; 


if ($_SERVER["REQUEST_METHOD"] == "POST"){
	
	$fowRSN = 'R-'.$_POST['entidfw'];
    
    $ridFetch = "select * from xxstp_crs_master where r_number='".$fowRSN."'";
	$result = $connp->query($ridFetch);	

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	?>
            <form name="addProceed" id="addProceed" method="POST" action="../handler/do_adddetails.php"> 
		        <table class="table table-sm table-bordered">	        	
		        	<tbody>

		        		  <tr>
						    <td class="bg-primary text-white">Man Name Address:</td>
						    <td><?=$row["man_name_address"];?></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">Is Number:</td>
						    <td><?=$row["is_number"];?></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">Product Category:</td>
						    <td><?=$row["product_category"];?></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">Man Name Address:</td>
						    <td><textarea class="form-control form-control-sm" name="manadd2" maxlength="255" required><?=$row["man_name_addressbyadmin"];?></textarea></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">Is Number:</td>
						    <td><textarea class="form-control form-control-sm" name="isnum2" maxlength="200" required><?=$row["is_numberbyadmin"];?></textarea></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">Product Category:</td>
						    <td><textarea class="form-control form-control-sm" name="procat2" maxlength="100" required><?=$row["product_categorybyadmin"];?></textarea></td>
						  </tr>
						  <tr>
						    <td class="bg-primary text-white">AIR details :</td>
						    <td><textarea class="form-control form-control-sm" name="airdetails" maxlength="255" required><?=$row["air_details"];?></textarea></td>
						  </tr>
		        	</tbody>
		        	<tfoot>
					    <tr>
					      <td></td>	
					      <td colspan="2">    	
					      </td>
					      
					    </tr>
					</tfoot>
		        </table>
			     <div class="row">
				  <div class="col-md-4 offset-md-8">
				  	<input type="button" value="Reset" class="btn btn-dark" onClick="window.location.href=window.location.href">	
					<input type="submit" class="btn btn-primary float-right" name="procee" id="procee" value="Proceed">
					<input type="hidden" name="proceeH" value="ProceedH">
					<input type="hidden" name="proceeHrid" id="proceeHrid" value="<?=$fowRSN?>">

				  </div>
				</div>   
<!--             </form> -->
			
	        <?
	    }
	} else { ?>

      <div class="alert alert-danger" role="alert">
	    No data found on entered R-ID
	   </div>

	 <?
	}
}

?>

<script type="text/javascript">
  $("form[name='addProceed']").validate({
  
    // Specify validation rules
    // errorElement: 'label', 
    //rules starts here  
    rules: 
    {
    //rid
      manadd2: {     
              required: true
             } 
    },//rules ends
    // Specify validation error messages
    messages:
     {
      //username
      manadd2: {     
              required: "Please Enter rid"
             }
     }
  });  
  
</script>

