

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Perhitungan Sentiment</h1>
                    <p class="mb-4">Sma/ Sederajat</p>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Donut Chart -->
                        <div class="container">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div>
                                        <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                          <th scope="col">Pertanyaan</th>
                                          <th scope="col">Jumlah respon Positif</th>
                                          <th scope="col">Jumlah respon Negatif</th>
                                          <th scope="col">Jumlah respon Netral</th>
                                        </tr>
                                    </thead>
                                  <tbody>
                                    
                                    <tr>
                                        <td><?= $q['q1']  ?></td>
                                        <td><?= count($jr1)   ?></td>
                                        <td><?= count($jr1n)   ?></td>
                                        <td><?= count($jr1t)   ?></td>

                                    </tr>
                                    <tr>
                                        <td><?= $q['q2']  ?></td>
                                        <td><?= count($jr2)   ?></td>
                                        <td><?= count($jr2n)   ?></td>
                                        <td><?= count($jr2t)   ?></td>
                                    </tr>
                                
                                        
                                    
                                    
                                   </tbody>
                                </table>
                            </div>
                                    </div>
                                    <hr>
                                    Rekap Responden
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            