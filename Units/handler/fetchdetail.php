<?
include '../config/conn.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST"){

	
	$fowRSN = 'R-'.$_POST['entidfw'];
    
    $ridFetch = "select * from xxstp_crs_master where r_number='".$fowRSN."' and is_active='Y'";
	$result = $connp->query($ridFetch);	

	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	?>

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
	        	</tbody>
	        	<tfoot>
				    <tr>
				      <td></td>	
				      <td colspan="2">				      	
				      				      	
				      </td>

				      
				    </tr>
				</tfoot>
	        </table>

			<form name="vewfigure" id="vewfigure" method="POST" action="proceed.php">
			<div class="row">
			  <div class="col-md-4 offset-md-8">
			  	<input type="button" value="Reset" class="btn btn-dark" onClick="window.location.href=window.location.href">
				<input type="submit" class="btn btn-primary float-right" name="procee" id="procee" value="Proceed">
				<input type="hidden" name="fowRSN" id="fowRSN" value="<?=$fowRSN?>">
			  </div>
			</div>
			</form>
			

			

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
