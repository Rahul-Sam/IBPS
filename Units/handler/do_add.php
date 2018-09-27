<?
include '../config/conn.php'; 
/// code for add data and proceed by admin starts //
if (isset($_POST['adddcostbtn'])=='Submit'){

    $ffridd = $_POST['ffridd'];
	$noofsample = $_POST['noofsample'];
    $cosample = $_POST['cosample'];
    $costofcountersample = $_POST['costofcountersample'];
    $costest = $_POST['costest'];
    $costoftransfer = $_POST['costoftransfer'];
    $costofstorage = $_POST['costofstorage'];
    $tot1 = $_POST['tot1'];

    //    
    // $esxquery = "select crs_id from xxstp_crs_master where r_number='".$ffridd."'";
    // $excres = $connp->query($esxquery);
    // $rowD = $excres->fetch_assoc();
    // $crsidd = $rowD['crs_id'];   
    $fcrsid = getCrsid($ffridd, $connp);    
    //	

	$insData = "insert into xxstp_crs_surv_charges (crs_id,num_of_samples,cost_of_sample, cost_of_counter_sample, cost_of_testing,cost_of_pack_trans,cost_of_storage,totalofall)
VALUES ('".$fcrsid."',".$noofsample.", ".$cosample.", ".$costofcountersample.", ".$costest.", ".$costoftransfer.", ".$costofstorage.", ".$tot1.")";

    $excIns = $connp->query($insData);

    //active r_number data
    $activequery = "update xxstp_crs_master set is_active='Y' where r_number='".$ffridd."'";
    $activequeryres = $connp->query($activequery);
    //active r_number data ends
    

    header("Location: ../Admin/dashboard.php?succid=".enc(1).""); exit();

}
?>