<?php
echo view('header');
echo view('sidebar');
?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Data Sekolah</h1>
    </div>
    <?php 
    if(!empty($msg)){
        echo $msg;
    } ?>
    <div class="mb-3">
        <?php echo anchor('tambahsekolah', '<i class="fa-solid fa-plus"></i>', ['class'=>'btn btn-primary']); ?>
    </div>
    <table class="table table-hover table-striped table-bordered">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Kecamatan</th>
                <th>NPSN</th>
                <th>Nama Sekolah</th>
                <th>Alamat Sekolah</th>
                <th>Status</th>
                <th>Jenjang Pendidikan</th>
                <th>Koordinat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php  
            $no=1;
            if(!empty($query)){
                foreach ($query as $baris) {?>
                    <tr>
                        <td><?php echo $no++;?></td>
                        <td><?php echo $baris->nama_kecamatan;?></td>
                        <td><?php echo $baris->npsn;?></td>
                        <td><?php echo $baris->nama_sekolah;?></td>
                        <td><?php echo $baris->alamat_sekolah;?></td>
                        <td><?php echo $baris->status;?></td>
                        <td><?php echo $baris->jenjang_pendidikan;?></td>
                        <td><?php echo $baris->koordinat;?></td>
                        <td>
                            <?php 
                            echo anchor('editsekolah/'.$baris->npsn,'<i class="fa-solid fa-pencil"></i>',['class'=>'btn btn-success']).' ';
                            echo anchor('hapussekolah/'.$baris->npsn,'<i class="fa-solid fa-trash-can"></i>',['class'=>'btn btn-danger']);
                            ?>
                        </td>
                    </tr>
                    <?php 
                }
            }else{?>
                <tr>
                    <td colspan="9">Data tidak ditemukan</td>
                </tr>
                <?php 
            }?>
        </tbody>
    </table>
</main>
<?php echo view('footer'); ?>
