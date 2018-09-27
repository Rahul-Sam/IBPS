<?
include '../config/conn.php'; 
/// code for add data and proceed by admin starts //
if (isset($_POST['procee'])=='Proceed' && isset($_POST['proceeH'])=='ProceedH'){

// if ($_SERVER["REQUEST_METHOD"] == "POST"){

	$ffridd = $_POST['proceeHrid'];
    //forwarded R_ID
	$manadd2 = txtclnslash($_POST['manadd2']); 
	$isnum2 = txtclnslash($_POST['isnum2']);
	$procat2 = txtclnslash($_POST['procat2']);
	$airdetails = txtclnslash($_POST['airdetails']);

    $UpdateQwy = "update xxstp_crs_master set man_name_addressbyadmin = '".$manadd2."', is_numberbyadmin = '".$isnum2."',product_categorybyadmin = '".$isnum2."', air_details ='".$airdetails."', is_active='Y' where r_number='".$ffridd."'";
    
    $getpanresut=$connp->query($UpdateQwy);

    header("Location: ../Admin/addd.php?succid=".enc(1)."&ffridd=".$ffridd.""); exit();
	# code...
}
/// code for add data and proceed by admin ends //
?>