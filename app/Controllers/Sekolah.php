<?php
namespace App\Controllers;
use App\Models\KecamatanModel;
use App\Models\SekolahModel;

class Sekolah extends BaseController
{
    public function index()
    {
        $this->tampil(); // memanggil method tampil
    }

    public function tampil()
    {
        $sekolahModel = new SekolahModel();
        $data['query'] = $sekolahModel->join('kecamatan', 'kecamatan.kode_kecamatan = sekolah.kode_kecamatan')->findAll();
        $data['msg'] = session()->getFlashdata('msg');
        echo view('sekolah/tampil', $data);
    }

    public function tambah()
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->findAll();
        $kecamatanOptions = ['' => 'belum dipilih'];
        foreach ($kecamatan as $row) {
            $kecamatanOptions[$row->kode_kecamatan] = strtoupper($row->nama_kecamatan);
        }
        $data['kecamatanOptions'] = $kecamatanOptions;
        $data['statusOptions'] = ['' => 'Belum Dipilih', 'NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA'];
        $data['jenjangOptions'] = ['' => 'Belum Dipilih', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SMK' => 'SMK'];
        return view('sekolah/tambah', $data);
    }

    public function edit($npsn)
    {
        $kecamatanModel = new KecamatanModel();
        $kecamatan = $kecamatanModel->findAll();
        $kecamatanOptions = ['' => 'belum dipilih'];
        foreach ($kecamatan as $row) {
            $kecamatanOptions[$row->kode_kecamatan] = strtoupper($row->nama_kecamatan);
        }
        $data['kecamatanOptions'] = $kecamatanOptions;
        $data['statusOptions'] = ['' => 'Belum Dipilih', 'NEGERI' => 'NEGERI', 'SWASTA' => 'SWASTA'];
        $data['jenjangOptions'] = ['' => 'Belum Dipilih', 'SD' => 'SD', 'SMP' => 'SMP', 'SMA' => 'SMA', 'SMK' => 'SMK'];
        $sekolahModel = new SekolahModel();
        $data['query'] = $sekolahModel->find($npsn);
        $data['id'] = $npsn;
        return view('sekolah/edit', $data);
    }

    public function simpan()
    {
        $sekolahModel = new SekolahModel();
        $data_sekolah = [
            'npsn' => $this->request->getVar('npsn'),
            'kode_kecamatan' => $this->request->getVar('kode_kecamatan'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'status' => $this->request->getVar('status'),
            'jenjang_pendidikan' => $this->request->getVar('jenjang_pendidikan'),
            'koordinat' => $this->request->getVar('koordinat')
        ];
        $sekolahModel->insert($data_sekolah);
        if ($sekolahModel->affectedRows() > 0) {
            $msg = '<div class="alert alert-primary" role="alert">Data berhasil disimpan !</div>';
        } else {
            $msg = '<div class="alert alert-danger" role="alert">Data gagal disimpan !</div>';
        }
        session()->setFlashdata('msg', $msg);
        return redirect()->to('sekolah');
    }

    public function update()
    {
        $sekolahModel = new SekolahModel();
        $id = $this->request->getVar('id');
        $data_sekolah = [
            'npsn' => $this->request->getVar('npsn'),
            'kode_kecamatan' => $this->request->getVar('kode_kecamatan'),
            'nama_sekolah' => $this->request->getVar('nama_sekolah'),
            'alamat_sekolah' => $this->request->getVar('alamat_sekolah'),
            'status' => $this->request->getVar('status'),
            'jenjang_pendidikan' => $this->request->getVar('jenjang_pendidikan'),
            'koordinat' => $this->request->getVar('koordinat')
        ];
        $sekolahModel->update($id, $data_sekolah);
        if ($sekolahModel->affectedRows() > 0) {
            $msg = '<div class="alert alert-primary" role="alert">Data berhasil disimpan !</div>';
        } else {
            $msg = '<div class="alert alert-danger" role="alert">Data gagal disimpan !</div>';
        }
        session()->setFlashdata('msg', $msg);
        return redirect()->to('sekolah');
    }

    public function hapus($npsn)
    {
        $sekolahModel = new SekolahModel();
        $sekolahModel->delete(['npsn' => $npsn]);
        if ($sekolahModel->affectedRows() > 0) {
            $msg = '<div class="alert alert-primary" role="alert">Data berhasil dihapus !</div>';
        } else {
            $msg = '<div class="alert alert-danger" role="alert">Data gagal dihapus !</div>';
        }
        session()->setFlashdata('msg', $msg);
        return redirect()->to('sekolah');
    }
}
?>
