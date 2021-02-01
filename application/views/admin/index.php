

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="card">
	                  <div class="card-header">
	                    <h4>Data User Registrasi</h4>   
	                  </div>
	                    <div class="card-body">
		                    <div class="table-responsive">
			                    <table class="table">
			  						<thead>
									    <tr>
									      <th scope="col">Nik</th>
									      <th scope="col">Nama</th>
									      <th scope="col">Jenis Kelamin</th>
								 	      <th scope="col">Jenjang Pendidikan</th>
									      <th scope="col">Asal Institusi</th>
									    </tr>
									</thead>
								  <tbody>
								    
								    <?php foreach ($uspro as $row){?>
								    <tr> 
								    	<td><?= $row -> nik ?></td>
								    	<td><?= $row -> nama ?></td>
								    	<td><?= $row -> jenis ?></td>
								    	<td><?= $row -> jenjang ?></td>
								    	<td><?= $row -> asal_institusi ?></td>
								    </tr>
								    <?php
									}?>
								    	
								    
								    
								   </tbody>
								</table>
							</div>
						</div>
					</div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
