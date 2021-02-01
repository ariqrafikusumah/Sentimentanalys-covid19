<!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Page Heading -->
                    <div class="card">
	                  <div class="card-header">
	                    <h4>Data Sentiment 1</h4>   
	                  </div>
	                    <div class="card-body">
		                    <div class="table-responsive">
			                    <table class="table">
			  						<thead>
									    <tr>
									      <th scope="col">Nik</th>
									      <th scope="col">Respon</th>
									      <th scope="col">Jenis Sentiment</th>
									    </tr>
									</thead>
								  <tbody>
								    
								    <?php foreach ($R1 as $row){?>
								    <tr> 
								    	<td><?= $row -> nik?></td>
								    	<td><?= $row -> r1 ?></td>
								    	<td><?= $row -> Sentiment ?></td>
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