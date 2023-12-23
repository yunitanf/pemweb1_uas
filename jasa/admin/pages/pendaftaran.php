<div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Pendaftaran</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Pendaftaran</a></li>
                                    <li class="active"><a href="#">Data Pendaftaran</a></li>
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
                                <strong class="card-title">Data Pendaftaran</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
<?php
  include ("../config/koneksi.php");
  $sqll = "select * from pendaftaran join customer using (id_customer) join jenis_cucian using (id_jenis_cucian) order by id_pendaftaran desc";
  $resultt = mysql_query($sqll);
    if(mysql_num_rows($resultt) > 0){
?>                                            
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>No. Antrian</th>
                                            <th>Jam Daftar</th>
                                            <th>Nama</th>
                                            <th>No. Plat</th>
                                            <th>Jenis Cucian</th>
                                            <th>Total Biaya</th>
                                            <th width="30%">Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
<?php
  $nomor=1;
  while($data = mysql_fetch_array($resultt)){
?>                                          
                                        <tr>
                                            <td><?= $nomor++;?></td>
                                            <td><?= $data['no_antrian'];?></td>
                                            <td><?= $data['jam_pendaftaran'];?></td>
                                            <td><?= $data['nama'];?></td>
                                            <td><?= $data['nomor_plat'];?></td>
                                            <td><?= $data['jenis_cucian'];?></td>
                                            <td><?= $data['total_biaya'];?></td>
                                            <td>
                                                <form action="index.php?p=ganti_status" method="POST">
                                                    <input type="hidden" name="id_pendaftaran" value="<?php echo $data['id_pendaftaran'];?>">
                                                     <?php
                                                        if($data['status']=='Lunas'){
                                                    ?>
                                                    Lunas
                                                <?php } else { ?>
                                                    <select name="status" onchange="this.form.submit();" class="form-control">
                                                      <option value="Pendaftaran" <?php if($data['status'] == 'Pendaftaran') { echo 'selected'; } ?>>Pendaftaran</option> 
                                                      <option value="Dalam Pengerjaan" <?php if($data['status'] == 'Dalam Pengerjaan') { echo 'selected'; } ?>>Dalam Pengerjaan</option>
                                                      <option value="Batal" <?php if($data['status'] == 'Batal') { echo 'selected'; } ?>>Batal</option>
                                                    </select>
                                                <?php } ?>
                                                </form>
                                            </td>
                                            <td align="center">
                                                <?php
                                                        if($data['status']!='Lunas'){
                                                    ?>
                                                <a href="index.php?p=tambah_pembayaran&id_pendaftaran=<?php echo $data['id_pendaftaran']; ?>" class="btn btn-success mb-3"> <i class="fa fa-fw fa-dollar" style="color: white"></i> <font color="white">Bayar</font>
                                                </a>
                                                <?php }else{ ?>

                                                    LUNAS
                                                <?php } ?>
                                            </td>
                                        </tr>
<?php
  }
?>
              </tbody>
            </table>
<?php
  }else{
    echo 'Data not found!';
    echo mysql_error();
  }
?>            
                            </div>
                        </div>
                    </div>


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->