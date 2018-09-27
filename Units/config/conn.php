<? 
error_reporting(0);
$connp = new mysqli('localhost', 'root', '', 'stpiunut');
if ($connp->connect_error) {
    die("Connection failed: " . $connp->connect_error);
}




function getCrsid($rnum, $connp)
{
	$esxquery = "select crs_id from xxstp_crs_master where r_number='".$rnum."'";
    $excres = $connp->query($esxquery);
    $rowD = $excres->fetch_assoc();
    $crsidd = $rowD['crs_id'];
    return $crsidd;
}


#### Decrypt/Encrypt docode #####
function enc($str = ''){   //YWJj
	if($str != ""){
		return(base64_encode($str));
	}
}
function dec($str = ''){   //abc
	if($str != ""){
		return(base64_decode($str));
	}
}

function dmytoymd($dateFrmt1){
	
	$originalDate1 = $dateFrmt1;
	$originalDate1 = str_replace('/', '-', $originalDate1);
	$newDate1 = date("Y-m-d", strtotime($originalDate1));
	return $newDate1;
	
}
function ymdtodmy($dateFrmt){
	
	$originalDate = $dateFrmt;
	$newDate = date("d-m-Y", strtotime($originalDate));
	return $newDate;
	
}

function txtclnslash($stringm)
{
	$soutput = htmlentities(trim($stringm));	
	$soutput = strip_tags($soutput);
	$soutput = str_replace("'","",$soutput);
	return $soutput;
}
#################################
#################################
function trim_all( $str40)
{
   return trim( preg_replace('/[^A-Za-z0-9\s+\-\']/', '', $str40 ));
}

?>