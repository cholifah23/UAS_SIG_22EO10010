<?php  
    echo view('header');
    echo view('sidebar');
?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Edit Data Kecamatan</h1>
    </div>
    <?php echo form_open('updatekecamatan') ?>
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label class="form-label">Kabupaten</label>
                <?php  
                    echo form_dropdown('id_kabupaten', $kabupatenOptions, $query->id_kabupaten, 'class="form-control"');
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Kode Kecamatan</label>
                <?php  
                    $kode_kecamatan = [
                        'name' => 'kode_kecamatan',
                        'type' => 'number',
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                        'placeholder' => 'Masukkan Kode Kecamatan',
                        'required' => 'required',
                        'value' => $query->kode_kecamatan
                    ];
                    echo form_hidden('id', $id);
                    echo form_input($kode_kecamatan);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Kecamatan</label>
                <?php  
                    $nama_kecamatan = [
                        'name' => 'nama_kecamatan',
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                        'placeholder' => 'Masukkan Nama Kecamatan',
                        'required' => 'required',
                        'value' => $query->nama_kecamatan
                    ];
                    echo form_input($nama_kecamatan);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Jumlah Penduduk</label>
                <?php  
                    $jumlah_penduduk = [
                        'name' => 'jumlah_penduduk',
                        'type' => 'number',
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                        'placeholder' => 'Masukkan Jumlah Penduduk',
                        'required' => 'required',
                        'value' => $query->jumlah_penduduk
                    ];
                    echo form_input($jumlah_penduduk);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Luas Wilayah</label>
                <?php  
                    $luas_wilayah = [
                        'name' => 'luas_wilayah',
                        'type' => 'number',
                        'class' => 'form-control',
                        'autocomplete' => 'off',
                        'placeholder' => 'Masukkan Luas Wilayah',
                        'required' => 'required',
                        'value' => $query->luas_wilayah
                    ];
                    echo form_input($luas_wilayah);
                ?>
            </div>
            <div>
                <?php 
                    $simpan = [
                        'type' => 'submit',
                        'content' => 'Simpan',
                        'class' => 'btn btn-primary'
                    ];
                    echo form_button($simpan);
                    echo anchor('kecamatan', 'Batal', ['class' => 'btn btn-danger']);
                ?>
            </div>
        </div>
    </div>
    <?php echo form_close(); ?>
</main>
<?php echo view('footer'); ?>
