<?php
  include("../config/koneksi.php");  
  ?>
  <?php
$id_user = $_GET['id_user']; //get the no which will updated

$queryy = mysql_query("SELECT * FROM user WHERE id_user = '$id_user'"); //get the data that will be updated
$dt=mysql_fetch_array($queryy);

?>

<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>User</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">User</a></li>
                                    <li class="active"><a href="#">Edit Data User</a></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="content">
            <div class="animated fadeIn">
                <div class="row">

                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Edit Data User</strong>
                            </div>
                            <div class="card-body">
         
<form action="index.php?p=proses_edit_user" method="post" enctype="multipart/form-data" class="form-horizontal">
<input type="hidden" id="text-input" name="id_user"  value="<?=$dt['id_user'];?>" class="form-control" required="">
                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Nama</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="nama" class="form-control" required=""  value="<?=$dt['nama'];?>">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Alamat</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="alamat" class="form-control" required=""  value="<?=$dt['alamat'];?>">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">No. HP</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="hp" class="form-control" required=""  value="<?=$dt['hp'];?>">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Username</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="text-input" name="username" class="form-control" required=""  value="<?=$dt['username'];?>">
                                        </div>
                                    </div>

                                    <div class="row form-group">
                                        <div class="col col-md-3"><label for="text-input" class=" form-control-label">Password</label></div>
                                        <div class="col-12 col-md-9">
                                            <input type="password" id="text-input" name="password" class="form-control" required="">
                                        </div>
                                    </div>
                                    
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </form>


                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->