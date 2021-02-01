<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card">
                    <form class="respon" method="post" action="<?= base_url('user/index') ?>">
		                  <div class="card-header">
		                    <h4>Berikan Tanggapan Anda</h4>   
		                  </div>
		                    <div class="card-body">
			                    <div class="table-responsive">
                            		<label><?= $q['q1']  ?> ?</label>
									  <div class="form-group">
									    <textarea class="form-control" id="q1" name="r1" rows="3"></textarea>
									  </div>
                        		<br><br>
                        			<label><?= $q['q2']  ?> ?</label>
            						<div class="form-group">
									  <div class="form-group">
									    <textarea class="form-control" id="q2" name="r2" rows="3"></textarea>
									  </div>
            						</div>
								</div>
								<button type="submit" class="btn btn-primary btn-user btn-block">Kirim
                                </button>
							</div>
							
					</form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->