<? include '../../header.php'; ?>
<div class="col-10 offset-1 bg-rid">
		<table class="table table-sm table-bordered bg-rid">
				<tr>
					<td>
						<form name="form1" ACTION="HostedPaymentBuyHttp.php" METHOD="POST">
							<table width="50%" cellpadding="1" cellspacing="1" border="1" align="center">
								<tr>
								</tr>
							</table>
							<table width="50%" cellpadding="1" cellspacing="1" border="1" align="center">
								<tr>
									<td width="100%" colspan="2" align="center"><FONT size="3"><B>Hosted Transaction Details</B></FONT></td>
								</tr>
								<tr>
									<td width="100%" colspan="2" align="center">
										<table width="100%" cellpadding="1" cellspacing="1" border="0" align="center">
											<tr>
												<td width="30%">Action </td>
												<td>
													<select name="action">
														<option selected="selected" value="1">Purchase</option>
														<option value="4">Authorize</option>
													</select>
												</td>
											</tr>
											<tr>
												<td width="30%">Amount </td>
												<td><input size="20" type="text" name="amount" value="100.00"></td>
											</tr>
<!-- 											<tr>
												<td width="30%">Udf 1</td>
												<td><input size="20" type="text" name="udf1" value="udf 1"></td>
											</tr>
											<tr>
												<td width="30%">Udf 2</td>
												<td><input size="20" type="text" name="udf2" value="udf 2"></td>
											</tr>
											<tr>
												<td width="30%">Udf 3</td>
												<td><input size="20" type="text" name="udf3" value="udf 3"></td>
											</tr>
											<tr>
												<td width="30%">Udf 4</td>
												<td><input size="20" type="text" name="udf4" value="udf 4"></td>
											</tr>
											<tr>
												<td width="30%">Udf 5</td>
												<td><input size="20" type="text" name="udf5" value="udf 5"></td>
											</tr> -->
											<tr>
												<td width="30%">Merchant name</td>
												<td><input size="20" type="text" name="udf6" value="udf 6"></td>
											</tr>
											<tr>
												<td width="30%"> Customer name </td>
												<td><input size="20" type="text" name="udf7" value="udf 7"></td>
											</tr>
											<tr>
												<td width="30%">Email id</td>
												<td><input size="20" type="text" name="udf8" value="udf 8"></td>
											</tr>
											<tr>
												<td width="30%">Mobile Number</td>
												<td><input size="20" type="text" name="udf9" value="udf 9"></td>
											</tr>
											<tr>
												<td width="30%">address</td>
												<td><input size="20" type="text" name="udf10" value="udf 10"></td>
											</tr>
											<tr>
												<td width="30%">Original txn amount</td>
												<td><input size="20" type="text" name="udf11" value="udf 11"></td>
											</tr>
											<tr>
												<td width="30%">Txn ref.No</td>
												<td><input size="20" type="text" name="udf12" value="udf 12"></td>
											</tr>
<!-- 											<tr>
												<td width="30%">Udf 13</td>
												<td><input size="20" type="text" name="udf13" value="udf 13"></td>
											</tr>
											<tr>
												<td width="30%">Udf 14</td>
												<td><input size="20" type="text" name="udf14" value="udf 14"></td>
											</tr>
											<tr>
												<td width="30%">Udf 15</td>
												<td><input size="20" type="text" name="udf15" value="udf 15"></td>
											</tr>
											<tr>
												<td width="30%">Udf 16</td>
												<td><input size="20" type="text" name="udf16" value="udf 16"></td>
											</tr>
											<tr>
												<td width="30%">Udf 17</td>
												<td><input size="20" type="text" name="udf17" value="udf 17"></td>
											</tr>
											<tr>
												<td width="30%">Udf 18</td>
												<td><input size="20" type="text" name="udf18" value="udf 18"></td>
											</tr>
											<tr>
												<td width="30%">Udf 19</td>
												<td><input size="20" type="text" name="udf19" value="udf 19"></td>
											</tr>
											<tr>
												<td width="30%">Udf 20</td>
												<td><input size="20" type="text" name="udf20" value="udf 20"></td>
											</tr>
											
											
											
											
												
											<tr>
												<td width="30%">Udf 21</td>
												<td><input size="20" type="text" name="udf21" value="udf 21"></td>
											</tr>
											<tr>
												<td width="30%">Udf 22</td>
												<td><input size="20" type="text" name="udf22" value="udf 22"></td>
											</tr>
											<tr>
												<td width="30%">Udf 23</td>
												<td><input size="20" type="text" name="udf23" value="udf 23"></td>
											</tr>
											<tr>
												<td width="30%">Udf 24</td>
												<td><input size="20" type="text" name="udf24" value="udf 24"></td>
											</tr>
											<tr>
												<td width="30%">Udf 25</td>
												<td><input size="20" type="text" name="udf25" value="udf 25"></td>
											</tr>
											<tr>
												<td width="30%">Udf 26</td>
												<td><input size="20" type="text" name="udf26" value="udf 26"></td>
											</tr>
											<tr>
												<td width="30%">Udf 27</td>
												<td><input size="20" type="text" name="udf27" value="udf 27"></td>
											</tr>
											<tr>
												<td width="30%">Udf 28</td>
												<td><input size="20" type="text" name="udf28" value="udf 28"></td>
											</tr>
											<tr>
												<td width="30%">Udf 29</td>
												<td><input size="20" type="text" name="udf29" value="udf 29"></td>
											</tr>
											<tr>
												<td width="30%">Udf 30</td>
												<td><input size="20" type="text" name="udf30" value="udf 30"></td>
											</tr>
											<tr>
												<td width="30%">Udf 31</td>
												<td><input size="20" type="text" name="udf31" value="udf 31"></td>
											</tr>
											<tr>
												<td width="30%">Udf 32</td>
												<td><input size="20" type="text" name="udf32" value="udf 32"></td>
											</tr> -->
											
											
											<tr>
												<td width="100%" colspan="2" align="center">
													<input type="Submit" value="Buy" class="btn btn-sm btn-primary"></td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</form>
					</td>
				</tr>
			</table>
<? include '../../footer.php'; ?>