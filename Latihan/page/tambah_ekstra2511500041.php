<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Ekstrakurikuler</h1>
      </div>
    </div>
  </div>
</div>
<?php
//kode otomatis
$carikode = mysqli_query($koneksi,"select max(id_ekstra041) from ekstra_2511500041") or die (
    mysqli_error());
$datakode = mysqli_fetch_array($carikode);
if($datakode) {
    $nilaikode = substr($datakode[0], 2);
    $kode = (int) $nilaikode;
    $kode = $kode + 1;
    $hasilkode = "E-".str_pad($kode, 3, "0", STR_PAD_LEFT);
} else {$hasilkode = "E-"; }
$_SESSION['KODE'] = $hasilkode;

if(isset($_POST['tambah'])) {
    $id_ekstra041 = $_POST['id_ekstra041'];
    $nama_ekstra041 = $_POST['nama_ekstra041'];
    $ket041	 = $_POST['ket041'];
    $semester041 = $_POST['semester041'];
    $thn_ajaran041	 = $_POST['thn_ajaran041'];

    $insert = mysqli_query($koneksi,"INSERT INTO ekstra_2511500041 values ('$id_ekstra041','$nama_ekstra041','$ket041','$semester041','$thn_ajaran041')");
    if ($insert) {
        echo '<div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Info </h5>
        <h4>Berhasil Disimpan</h4></div>';
        echo '<meta http-equiv="refresh" content="1;url=index.php?page=ekstra251150041">';
    } else {
        echo '<div class="alert alert-warning alert-dismissible">
        <button type="button" class="close" data-dismiss="alert"
        aria-hidden="true">×</button>
        <h5><i class="icon fas fa-info"></i> Info </h5>
        <h4>Gagal Disimpan</h4></div>';
    }
}
?>
<section class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="card-body p-2">
                    <form method="POST" action="">
                        <div class="form-group">
                            <label for="id_ekstra041">Id Ekstrakurikuler</label>
                            <input type="text" name="id_ekstra041" value="<?= $hasilkode; ?>" placeholder="Id Ekstrakurikuler" class="form-control" readonly>
                        </div>
                        
                        <div class="form-group">
                            <label for="nama_ekstra041">Nama Ekstrakurikuler</label>
                            <input type="text" name="nama_ekstra041" id="nama_ekstra041" placeholder="Nama Ekstrakurikuler" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="ket041">Keterangan</label>
                            <input type="text" name="ket041" id="ket041" placeholder="Keterangan" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="semester041">Semester</label>
                            <input type="text" name="semester041" id="semester041" placeholder="Semester" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="thn_ajaran041">Tahun Ajaran</label>
                            <input type="text" name="thn_ajaran041" id="thn_ajaran041" placeholder="Tahun Ajaran" class="form-control">
                        </div>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="tambah" value="simpan">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>