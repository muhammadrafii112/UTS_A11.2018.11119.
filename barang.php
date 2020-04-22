<h2 class="mt-4" style="color: grey;"><i class="fas fa-people-carry fa"></i> DATA PENGUNJUNG</h2>
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><i class="fas fa-home"></i> <a href="dashboard.php">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data pembeli</li>
  </ol>
</nav>
<p>
  <i class="far fa-hand-point-right fa-lg"></i><a class="" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Input baru
  </a>
</p>
<div class="collapse" id="collapseExample">
<div class="card card-body">
  <form action="" method="post" accept-charset="utf-8">
  <div class="form-group">
    <label>Kode Supplier</label>
    <input type="number" class="form-control" name="kd_sub" id="exampleFormControlInput1" placeholder="Kode Supplier" required>
  </div>
<div class="form-group">
    <label>Nama Supplier</label>
    <input type="text" class="form-control" name="nm_sup" id="exampleFormControlInput2" placeholder="Nama Supplier" required>
</div>
<div class="form-group">
    <label>Alamat Supplier</label>
    <input type="text" class="form-control" name="alm_sup" id="exampleFormControlInput2" placeholder="Alamat Supplier" required>
</div>
<div class="form-group">
    <label>Telpon</label>
    <input type="number" class="form-control" name="telp_sup" id="exampleFormControlInput3" placeholder="Telpon" required>
</div>
<div class="form-group">
    <label>HP</label>
    <input type="number" class="form-control" name="hp_sup" id="exampleFormControlInput3" placeholder="Hp" required>
</div>
<div class="form-group">
    <label>Email</label>
    <input type="text" class="form-control" name="email_sup" id="exampleFormControlInput2" placeholder="Email" required>
</div>
<div class="form-group">
    <label>Kota</label>
    <input type="text" class="form-control" name="kota_sup" id="exampleFormControlInput2" placeholder="Kota" required>
</div>
<div class="form-group">
    <label>Kode Pos</label>
    <input type="number" class="form-control" name="kode_sup" id="exampleFormControlInput3" placeholder="Kode Pos" required>
</div>
<br>
<div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp
<button type="reset" class="btn btn-danger">Cancel</button>    
</div>
</form>
</div>
</div>
<div class="card mb-4" style="margin-top: 10px;">
                        <div class="card-header"><i class="fas fa-table mr-1"></i>Data Supplier</div>
                          <div class="card-body">
                              <div class="table-responsive">
                                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                      <thead>
                                          <tr>
                                              <th>Kode Supplier</th>
                                              <th>Nama Supplier</th>
                                              <th>Alamat Supplier</th>
                                              <th>Telpon Suplier</th>
                                              <th>Hp Supplier</th>
                                              <th>Email</th>
                                              <th>Kota</th>
                                              <th>Kode Pos</th>
                                              <th>Update</th>
                                          </tr>
                                      </thead>
<tbody>
<?php
    $query = mysqli_query($conn,"SELECT * FROM barang");
    while ($hasil = mysqli_fetch_array ($query)) 
    { 
        $kode = $hasil['kd_sub'];
        $nama = stripslashes ($hasil['nm_sup']); 
        $alamat = stripslashes ($hasil['alm_sup']); 
        $telp = stripslashes ($hasil['telp_sup']); 
        $hp = stripslashes ($hasil['hp_sup']); 
        $email = stripslashes ($hasil['email_sup']);
        $kota = stripslashes ($hasil['kota_sup']);
        $kode_sup = stripslashes ($hasil['kode_pos']); 
    }
    //tampilkan barang
    echo "<tr><td>$kode</td><td>$nama</td><td>$alamat</td><td>$telp</td><td>$hp</td><td>$email</td><td>$kode_sup</td><td>$kota</td>";
?>
    <td><a href="" style="color:white;" class="btn btn-warning" data-toggle="modal" data-target="#myModalM<?php echo $kode; ?>">Edit</a> |
    <a class="btn btn-danger" href="barang_hapus.php?id=<?php echo $kode; ?>" onclick="return confirm('Yakin Hapus?')">Delete</a></td>

<div class="modal fade" id="myModalM<?php echo $kode; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Utama</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" method="post" accept-charset="utf-8">
            <div class="form-group">
            <label for="">Kode Supplier</label>
            <input type="number" class="form-control" name="kd_sub_edit" id="exampleFormControlInput1" value="<?php echo $kode; ?>" readonly>
            </div>
            <div class="form-group">
            <label for="">Nama Suplier</label>
            <input type="text" class="form-control" name="nm_sup_edit" id="exampleFormControlInput1" value="<?php echo $nama; ?>">
            </div>
            <div class="form-group">
            <label for="">Alamat</label>
            <input type="text" class="form-control" name="alm_sup_edit" id="exampleFormControlInput1" value="<?php echo $alamat; ?>">
            </div>
            <div class="form-group">
            <label for="">Telpon</label>
            <input type="number" class="form-control" name="telp_sup_edit" id="exampleFormControlInput1" value="<?php echo $telp; ?>">
            </div>
            <div class="form-group">
            <label for="">Hp</label>
            <input type="number" class="form-control" name="hp_sup_edit" id="exampleFormControlInput1" value="<?php echo $hp; ?>">
            </div>
            <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email_edit" id="exampleFormControlInput1" value="<?php echo $email; ?>">
            </div>
            <div class="form-group">
            <label for="">Kota</label>
            <input type="text" class="form-control" name="kota_sup_edit" id="exampleFormControlInput1" value="<?php echo $kota; ?>">
            </div>
            <div class="form-group">
            <label for="">Kode Pos</label>
            <input type="number" class="form-control" name="kode_pos_edit" id="exampleFormControlInput1" value="<?php echo $kode_sup; ?>">
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-primary" name="edit">Simpan</button>
        </form>
      </div>
    </div>
  </div>
</div>
</tbody>
</table>
</div>
</div>
</div>
<?php
if (isset($_POST["submit"]))
    {
        $kode=$_POST['kd_sub'];
        $nama=$_POST['nm_sup'];
        $alamat=$_POST['alm_sup'];
        $telp=$_POST['telp_sup'];
        $hp=$_POST['hp_sup'];
        $email=$_POST['email_sup'];
        $kota=$_POST['kota'];
        $kode_sup=$_POST['kode_pos'];
        
 
        $input=mysqli_query($conn,"INSERT INTO barang VALUES('$kode','$nama','$alamat','$telp','$hp','$email','$kota','$kode_sup')");
        if ($input) 
        {
           echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambahkan Barang');
                window.location.href='dashboard.php?page=barang';
                </script>");
        }
        else
        {
            echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambahkan Periksa Kembali !!!');
                  window.location.href='dashboard.php?page=barang';
                  </script>");
        }     
      }
?>

<?php
if (isset($_POST["edit"])) {
    $kode_edit=$_POST['kd_sub_edit'];
    $nama_edit=$_POST['nm_sup_edit'];
    $alamat_edit=$_POST['alm_sup_edit'];
    $telp_edit=$_POST['telp_sup_edit'];
    $hp_edit=$_POST['hp_sup_edit'];
    $email_edit=$_POST['email_edit'];
    $kota_sup_edit=$_POST['kota_sup_edit'];
    $kode_sup_edit=$_POST['kode_pos_edit'];
    
    $sql = mysqli_query($conn,"UPDATE barang set nm_sup_edit='$nama_edit', alm_sup_edit='$alamat_edit', telp_sup_edit='$telp_edit', hp_sup_edit='$hp_edit', email_edit='$email_edit', kode_pos_edit='$kode_sup_edit', kota_edit='$kota_sup_edit' WHERE kd_sub_edit='$kode_edit'" );
    if ($sql)
    {
     echo ("<script LANGUAGE='JavaScript'>window.alert('Data Berhasil Diubah');
     window.location.href='dashboard.php?page=barang';
     </script>");
    }
    else
    {
        echo 
        "
            <script type='text/javascript'>
                alert('Gagal Diubah');
                window.location='dashboard.php?page=barang';
            </script    
        ";
    }
}
?>