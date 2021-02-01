
    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5 col-lg-7 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form class="user" method="post" action="<?= base_url('auth/registrasi') ?>">
                            	<div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nik" name="nik" placeholder="Masukkan NIK Anda" value="<?= set_value('nik')?>">
                                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Masukkan Nama Lengkap Anda" value="<?= set_value('nama')?>">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-user-select"  name="id_jk">
                                        <option selected disabled> Jenis Kelamin</option>
                                        <?php foreach ($lio as $row) {?>
                                            <option value="<?= $row -> id_jk ?>">
                                                <?= $row -> jenis ?>
                                            </option>
                                        <?php
                                        }?>
                                    </select> 
                                        
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email" value="<?= set_value('email')?>">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-select-user" id="inlineFormCustomSelect" name="id_institusi">
                                        <option selected disabled> Jenjang Pendidikan</option>
                                        <?php foreach ($jang as $row) {?>
                                            <option value="<?= $row -> id_institusi ?>">
                                                <?= $row -> nama ?>
                                            </option>
                                        <?php
                                        }?>
                						
                                        
              						</select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-select-user" id="inlineFormCustomSelect" name="asal_institusi">
                                        <option selected disabled> Asal Institusi</option>
                                        <?php foreach ($yor as $row) {?>
                                            <option value="<?= $row -> asal ?>">
                                                <?= $row -> asal ?>
                                            </option>
                                        <?php
                                        }?>
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-select-user" id="inlineFormCustomSelect" name="id_agama">
                                        <option selected disabled> Agama</option>
                                        <?php foreach ($yop as $row) {?>
                                            <option value="<?= $row -> id ?>">
                                                <?= $row -> nama ?>
                                            </option>
                                        <?php
                                        }?>
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-select-user" id="inlineFormCustomSelect" name="id_pekerjaan">
                                        <option selected disabled> Pekerjaan Orang tua</option>
                                        <?php foreach ($jil as $row) {?>
                                            <option value="<?= $row -> id ?>">
                                                <?= $row -> nama ?>
                                            </option>
                                        <?php
                                        }?>
                                        
                                        
                                    </select>
                                </div>

                                <div class="form-group">
                                    <select class="form-control form-control-select-user" id="inlineFormCustomSelect" name="id_provider">
                                        <option selected disabled> Provider yang Digunakan</option>
                                        <?php foreach ($ryo as $row) {?>
                                            <option value="<?= $row -> id ?>">
                                                <?= $row -> nama ?>
                                            </option>
                                        <?php
                                        }?>
                                        
                                        
                                    </select>
                                </div>


                                
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" class="form-control form-control-user"
                                            id="password1" name="password1" placeholder="Kata Sandi">
                                            <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" class="form-control form-control-user"
                                            id="password2" name="password2" placeholder="Ulangi Kata Sandi">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar Akun
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href=" <?= base_url('auth'); ?>">Sudah Punya Akun?
                                 Masuk!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>