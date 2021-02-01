

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 ">
                                <div class="p-5">
                                  <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Data Covid Di Indonesia</h1>
                                    </div>

<?php
$content=file_get_contents("https://services5.arcgis.com/VS6HdKS0VfIhv8Ct/arcgis/rest/services/COVID19_Indonesia_per_Provinsi/FeatureServer/0/query?where=1%3D1&outFields=Provinsi,Kasus_Posi,Kasus_Semb,Kasus_Meni&outSR=4326&f=json");

      // Live By Country And Status

        //mengubah standar encoding
        $content=utf8_encode($content);

        //mengubah data json menjadi data array asosiatif
        $result=json_decode($content,true);

  ?>
                        
                               

                                  <table class="table">
                                      <thead>
                                        <tr>
                                          <th scope="col">Provinsi</th>
                                          <th scope="col">Positiv</th>
                                          <th scope="col">Negativ</th>
                                          <th scope="col">Meninggal</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php foreach ($result['features'] as $key ) {?>
                                          <tr>
                                            <td><?= $key ["attributes"] ["Provinsi"];  ?></td>
                                            <td><?= $key ["attributes"] ["Kasus_Posi"];  ?></td>
                                            <td><?= $key ["attributes"] ["Kasus_Semb"];  ?></td>
                                            <td><?= $key ["attributes"] ["Kasus_Meni"];  ?></td>

                                          </tr>

                                        <?php }  ?>
                                      </tbody>
                                   </table>


                                </div>
                            </div> <!-- akhir-->


                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Halaman Login</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form class="user" method="post" action="<?= base_url('auth') ?>">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="nik" name="nik"  value="<?= set_value('nik')?>"
                                                placeholder="Masukkan Nik...">
                                                 <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="" name="password" placeholder="Password">
                                                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                        	Masuk
                                        </button>  
                                        </a>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href=" <?= base_url('auth/registrasi'); ?>">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    

    

