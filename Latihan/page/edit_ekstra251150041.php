<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Ekstrakurikuler</h1>
            </div>
        </div>
    </div>
</div>

    <?php
    $kd = $_GET['kd'];
    $edit = mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM ekstra_2511500041 WHERE id_ekstra041='$kd'"));

    if(isset($_POST['tambah'])){
        $id_ekstra041 = $_POST['id_ekstra041'];
        $nama_ekstra041 = $_POST['nama_ekstra041'];
        $ket041 = $_POST['ket041'];
        $semester041 = $_POST['semester041'];
        $thn_ajaran041 = $_POST['thn_ajaran041'];
        
        $insert = mysqli_query($koneksi,"UPDATE ekstra_2511500041 SET nama_ekstra041='$nama_ekstra041', ket041='$ket041', semester041='$semester041', thn_ajaran041='$thn_ajaran041' WHERE id_ekstra041='$id_ekstra041'");
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
                                <input type="text" name="id_ekstra041" value="<?= $edit['id_ekstra041']; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label for="nama_ekstra041">Nama Ekstrakurikuler</label>
                                <input type="text" name="nama_ekstra041" value="<?= $edit['nama_ekstra041']; ?>" id="nama_ekstra041" placeholder="Nama Ekstrakurikuler" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="ket041">Keterangan</label>
                                <input type="text" name="ket041" value="<?= $edit['ket041']; ?>" id="ket041" placeholder="Keterangan" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="semester041">Semester</label>
                                <input type="text" name="semester041" value="<?= $edit['semester041']; ?>" id="semester041" placeholder="Semester" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="thn_ajaran041">Tahun Ajaran</label>
                                <input type="text" name="thn_ajaran041" value="<?= $edit['thn_ajaran041']; ?>" id="thn_ajaran041" placeholder="Tahun Ajaran" class="form-control">
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