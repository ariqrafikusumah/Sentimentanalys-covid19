                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card">
                    <form class="respon" method="post" action="<?= base_url('auth/registrasi') ?>">
		                  <div class="card-header">
		                    <h4>Data Respon User</h4>   
		                  </div>
		                    <div class="card-body">
			                    <div class="table-responsive">
                            		<label for="stok">Apakah Anda Mendapatkan Bantuan Pemerintah berupa paket internet untuk membantu proses pembelajaran ?</label>
				                    <div class="form-group">
		                              <select class="form-select" name="r1">
		                                  <option selected>Choose...</option>
		                                  <option value="ya">Ya</option>
		                                  <option value="tidak">Tidak</option>
		                              </select>
            						</div>
                        		<br><br>
                        			<label for="stok">Apakah menurut anda bantuan pemerintah tersebut dapat membantu proses pembelajaran disaat seperti ini ?</label>
            						<div class="form-group">
              								<select class="form-select" name="r2">
			                                  <option selected>Choose...</option>
			                                  <option value="ya">Ya</option>
			                                  <option value="tidak">Tidak</option>
			                              	</select>
            						</div>
								</div>
							</div>
					</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


           <!--  ini sql statment utk memisahkan data 
           	SELECT *,(
CASE WHEN CustomerName LIKE '%Antonio%'
THEN 'Bapak GW'
WHEN CustomerName LIKE '%Ana%' THEN 'MamAk gw'
ELSE 'Gak Kenal'
END)AS QuantityText
FROM Customers;

-->

