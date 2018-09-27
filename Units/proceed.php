<?
//include 'config/conn.php'; 
include 'header.php';
/// code for add data and proceed by admin starts //
if (isset($_POST['procee'])=='Proceed'){

  $frnum = $_POST['fowRSN'];
  $fcrsid = getCrsid($frnum, $connp);


  //data select query starts //  
  $selDataQuery = "select * from xxstp_crs_surv_charges where crs_id=".$fcrsid." and payment_flag='N'";
  $queryExc =$connp-> query($selDataQuery);
  $fetchData= $queryExc->fetch_assoc();

  //tax calculations
  
  $taxableamount = $fetchData['cost_of_testing']+$aaa = $fetchData['cost_of_pack_trans']+$aaa = $fetchData['cost_of_storage'];

  $percentage = 18;

  $finalTax = ($percentage / 100) * $taxableamount;
  
  //



  //data select query ends //

 
?>
<div class="row hide  mt-5" id="proceedDiv"  style="">

  <div class="col-md-8 offset-2 bg-rid">

           <form name="costform" id="costform">
            
              <div class="form-group row mt-3">
                 <P>Amount to Pay : <?=$fetchData['totalofall']+$finalTax;?>

                  <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> show breakup </button>
                 </P>
              </div>






              <!-- instrustions -->
              <!-- <div class="alert alert-success" role="alert">
                <h4 class="alert-heading">Instructions!</h4>
                <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                <hr>
                <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
              </div>
 -->
              <div class="form-group row"> 
               <div class="col-md-12 mb-5">
                <input type="submit" name="" class="btn btn-primary" value="Pay Offline">
               <!-- <input type="submit" name="" class="btn btn-primary float-right" value="Pay Online">  -->


              <a href="http://newunit.com/phpnormal/hostedhttp/HostedPaymentdetailsHttp.php" class="btn btn-primary float-right" >Pay Online</a>


              </div>
             </div>

           </form>

            <div class="collapse mb-5" id="collapseExample">
              <div class="card card-body">
               <table class="table  table-sm table-bordered">
                <tr>
                  <th>Number of Samples:</th>
                  <td><?=$fetchData['num_of_samples']?></td>
                </tr>

                <tr>
                  <th>Cost of sample:</th>
                  <td><?=$fetchData['cost_of_sample']*$fetchData['num_of_samples']?></td>
                </tr>

                <tr>
                  <th>Cost of Counter Sample:</th>
                  <td><?=$fetchData['cost_of_counter_sample']*$fetchData['num_of_samples']?></td>
                </tr>

                <tr>
                  <th>Cost of testing:<span class="text-danger">(Taxable Amount)</span></th>
                  <td><?=$fetchData['cost_of_testing']?></td>
                </tr>

                <tr>
                  <th>Cost of package transfer:<span class="text-danger">(Taxable Amount)</span></th>
                  <td><?=$fetchData['cost_of_pack_trans']?></td>
                </tr>

                <tr>
                  <th>Cost of storage:<span class="text-danger">(Taxable Amount)</span></th>
                  <td><?=$fetchData['cost_of_storage']?></td>
                </tr>

                <tr>
                  <th>Total:</th>
                  <td><?=$fetchData['totalofall'];?></td>
                </tr>

                <tr>
                  <th>Tax :</th>
                   <td>
                   <?=$finalTax;?>
                    </td>
                </tr>


                <tr>
                  <th>Final payable amount :</th>
                  <td><?=$fetchData['totalofall']+$finalTax;?></td>
                </tr>
                

                 
               </table>
              </div>
            </div>


    </div>         
</div>

<?
}
/// code for add data and proceed by admin ends //
?>


<? include 'footer.php'; ?>