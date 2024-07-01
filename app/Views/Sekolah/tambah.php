<?php
echo view('header');
echo view('sidebar');
?>
<main class="col-10 ms-sm-auto px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2">
        <h1 class="h4">Tambah Data Sekolah</h1>
    </div>
    <?php echo form_open('simpansekolah'); ?>
    <div class="row">
        <div class="col-4">
            <div class="mb-3">
                <label class="form-label">Kecamatan</label>
                <?php echo form_dropdown('kode_kecamatan', $kecamatanOptions, '', 'class="form-control"'); ?>
            </div>
            <div class="mb-3">
                <label class="form-label">NPSN</label>
                <?php
                $npsn = [
                    'name' => 'npsn',
                    'type' => 'number',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan NPSN Sekolah',
                    'required' => 'required'
                ];
                echo form_input($npsn);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Nama Sekolah</label>
                <?php
                $nama_sekolah = [
                    'name' => 'nama_sekolah',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan Nama Sekolah',
                    'required' => 'required'
                ];
                echo form_input($nama_sekolah);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Alamat Sekolah</label>
                <?php
                $alamat_sekolah = [
                    'name' => 'alamat_sekolah',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Masukkan Alamat Sekolah',
                    'required' => 'required'
                ];
                echo form_input($alamat_sekolah);
                ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Status</label>
                <?php echo form_dropdown('status', $statusOptions, '', 'class="form-control"'); ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Jenjang Pendidikan</label>
                <?php echo form_dropdown('jenjang_pendidikan', $jenjangOptions, '', 'class="form-control"'); ?>
            </div>
            <div class="mb-3">
                <label class="form-label">Koordinat Sekolah</label>
                <?php
                $koordinat = [
                    'name' => 'koordinat',
                    'class' => 'form-control',
                    'autocomplete' => 'off',
                    'placeholder' => 'Contoh : -7.5134,109.0702',
                    'required' => 'required'
                ];
                echo form_input($koordinat);
                ?>
            </div>
            <div>
            </div>
        </div>
    </div>
    <?php
    $simpan = [
        'type' => 'submit',
        'content' => 'Simpan',
        'class' => 'btn btn-primary'
    ];
    echo form_button($simpan);
    echo anchor('kecamatan', 'Batal', ['class' => 'btn btn-danger']);
    ?>
    <?php echo form_close(); ?>
</main>
<?php echo view('footer'); ?>
