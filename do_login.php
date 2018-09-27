<?php 
include('config/conn.php');
session_start();
$_SESSION['bdir']=__DIR__;

if(isset($_POST['lgnsubmit']))
 {
   if($_POST['lgnsubmit']=='Login' && $_POST['lgnsubmithd']=='Loginhd')   
    {
   	 	 	
	$uname = $_POST['username'];	 
	$upass = md5($_POST['password']);	
	
	if(strlen($upass)<8) 
	{	
	header("Location: login.php?errorid=".enc('PBlank').""); 
	exit();
	}
	//finale login credentials check
	$qry  = 'select * from m_login where lgn_userName="'.$uname.'" and lgn_status="1"';			
	$getpanresut=$connp->query($qry);	
					
	 if ($getpanresut->num_rows > 0) 
	  {

	      $panrow = $getpanresut->fetch_assoc();
							 if( $panrow['lgn_userPass'] == $upass)							 
							 {
							 	
							 	if($panrow['lgn_Role']=='Admin'){ //session										
								$aid = $panrow['lgn_id'];
								$_SESSION['aid'] = $aid;
								$_SESSION['AdminD'] =$panrow['lgn_Role'];								
								header("Location: Admin/dashboard.php"); exit(); }							 
								
							 }
							 else
							 {
							
							   header("Location: login.php?errorid=".enc('UPIW').""); 
	                           exit();
							 }							  
	}
	// else of if ($getpanresut->num_rows > 0) {
	else 
		{
		
		header("Location: login.php?errorid=".enc('UNIW').""); 
	    exit();
		}
	} //if($_POST['lgnsubmit']=='Login' && $_POST['lgnsubmithd']=='Loginhd')
 } //lgnsubmit
?>