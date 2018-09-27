<script> window.setTimeout(function() { $("#error,#success").fadeTo(1000, 500).slideUp(500, function(){ $(this).remove();  }); }, 20000); </script>
<?php 
$errorDiv='<div id="error" class="alert alert-danger alert-dismissable m-10 text-center">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>Error : </strong>';
$successDiv='<div id="success" class="alert alert-success alert-dismissable m-10 text-center">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a><strong>Success : </strong>';
$closeDiv='</div>';		
// Entity Registry Error handling start.


//error case switch Case
if(isset($_REQUEST['errorid']) && $_REQUEST['errorid']!=''){ 
	switch($_REQUEST['errorid']){
		case enc(51): 
			$msgDisplay = "Entity has been already registered."; 
			break;
		case enc(11): 
			$msgDisplay = "Entity name is blank."; 
			break;
		case enc(12): 
			$msgDisplay = "Pan Card Number is blank."; 
			break;
		case enc(ALREADY):
		 	$msgDisplay = "Selected location for this entity already exist."; 
			break;
		case enc(CNAMEEXIST): 
			$msgDisplay = "Consortium Name already resistered."; 
			break;
		case enc(GCAM): 
			$msgDisplay = "Selected Consortium and Entity already mapped."; 
			break;
		case enc(ICPBG26): 
			$msgDisplay = "Selected Entity Name is a prime bidder in Selected Consortium, So TC Holding must be greater than 25%."; 
			break;
		case enc(CIDEXIST): 
			$msgDisplay = "Selected Consortium already exist."; 
			break;
		case enc(ICaptcha): 
			$msgDisplay = "Incorrect Captcha."; 
			break;
		case enc(PBlank): 
			$msgDisplay = "Password is Blank."; 
			break;
		case enc(UNIW): 
			$msgDisplay = "Login credentials are incorrect."; 
			break;
		case enc(UPIW): 
			$msgDisplay = "Login credentials are incorrect."; 
			break;
		case enc(Filesize): 
			$msgDisplay = "Please upload a file having filesize less than 25MB."; 
			break;
		case enc(Filetype): 
			$msgDisplay = "Please upload a file with PDF/pdf extension."; 
			break;
		case enc(ErrorFileName): 
			$msgDisplay = "Please upload a new file, there is an error in uploaded file."; 
			break;
		case enc(OPIW): 
			$msgDisplay = "Old password is wrong."; 
			break;
		case enc(ICREM): 
			$msgDisplay = "Incorrect registered email."; 
			break;
		case enc(PCINRWE): 
			$msgDisplay = "PAN card is not resistered with this email."; 
			break;
		case enc(FiletypedocErr): 
			$msgDisplay = "Please upload a file with doc/DOC extension."; 
			break;
		case enc(FiletypepdfErr): 
			$msgDisplay = "Please upload a file with pdf/PDF extension."; 
			break;
		case enc(FiletypeCSVERR): 
			$msgDisplay = "Please upload a file with CSV/csv extension."; 
			break;
		case enc(CSVsecurityERR): 
			$msgDisplay = "Please generate CSV file by using excel utility! Excel utility is to be downloaded from MPRs Section in the portal."; 
			break;
		case enc(PDSUTS): 
			$msgDisplay = "No Update found. Please do some update to save."; 
			break;
		case enc(ECFSLIAEX): 
			$msgDisplay = "Establishment code already exist."; 
			break;
	    case enc(CINNIARWSLI): 
			$msgDisplay = "CIN num is already exist with the selected Location"; 
			break;
		case enc(VGF1STS): 
	       $msgDisplay = "VGF1 Status is blank."; 
			break;	
	   	case enc(VGF1RMX): 
	       $msgDisplay = "VGF1 Remarks is blank."; 
			break;	
		case enc(MPRREJECT): 
	       $msgDisplay = "Some validation is missing."; 
			break;
		case enc(ACTE):
            $msgDisplay = " Same date and location already Inserted.";
            break;

        case enc(SBGALEFTLCV):
            $msgDisplay = "BG has been already added for the selected location.";
            break;
        case enc(xvzgtwerssas):
            $msgDisplay = "Please enter remarks on check as valid.";
            break;

	}
	
	echo $errorDiv.$msgDisplay.$closeDiv;
}

//success case switch Case
if(isset($_REQUEST['succid']) && $_REQUEST['succid']!=''){
	switch($_REQUEST['succid']){
		case enc(1): 
			$msgDisplay = "Added."; 
			break;	  
	}
	
	echo $successDiv.$msgDisplay.$closeDiv; 
	
}



?>