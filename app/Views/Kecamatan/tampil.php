<?php  
echo view('header');
echo view('sidebar');
?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Data Kecamatan</h1>
    </div>
    <?php 
    // Menampilkan pesan setelah proses simpan, update dan hapus.
    if (!empty($msg)) {
        echo $msg;
    } 
    ?>
    <div class="mb-3">
        <?php echo anchor('tambahkecamatan', '<i class="fa-solid fa-plus"></i>', ['class' => 'btn btn-primary']); ?>
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kode Kecamatan</th>
                <th>Nama Kecamatan</th>
                <th>Jumlah Penduduk</th>
                <th>Luas Wilayah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $no = 1;
            if (!empty($query)) {
                foreach ($query as $baris) { ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $baris->kode_kecamatan; ?></td>
                        <td><?php echo $baris->nama_kecamatan; ?></td>
                        <td><?php echo number_format($baris->jumlah_penduduk, 0, ',', '.') . ' Jiwa'; ?></td>
                        <td><?php echo number_format($baris->luas_wilayah, 0, ',', '.') . ' Km<sup>2</sup>'; ?></td>
                        <td>
                            <?php 
                            echo anchor('editkecamatan/' . $baris->kode_kecamatan, '<i class="fa-solid fa-pencil"></i>', ['class' => 'btn btn-success']) . ' ' .
                                 anchor('hapuskecamatan/' . $baris->kode_kecamatan, '<i class="fa-solid fa-trash-can"></i>', ['class' => 'btn btn-danger']); 
                            ?>
                        </td>
                    </tr>
                <?php 
                }
            } else { ?>
                <tr>
                    <td colspan="6" class="text-center">Tidak ada data</td>
                </tr>
            <?php 
            } ?>
        </tbody>
    </table>
</main>
<?php echo view('footer'); ?>
