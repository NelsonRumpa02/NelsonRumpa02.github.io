@extends('layout.main')
@section('article')
<div class="container-fluid mt-4 rounded">
    <form action="/mahasiswa/simpanmahasiswa" method="POST" class="pt-2 pb-2">
        @csrf
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" placeholder="Masukan NIM" required>
        </div>
        <div class="form-group w-25">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" placeholder="Masukan Nama" required>
        </div>
        <label>Gender</label>
        <div class="form-group w-25=">
            <input type="radio" name="gender" value="male" class="form-check-input">
            <label>male</label>
        </div>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="female" class="form-check-input">
            <label>female</label>
        </div>
        <div class="form-group w-25">
          <label>Jurusan</label>
          <select name="jurusan" class="form-control">
            <option value="0">--- Pilih Jurusan ---</option>
            <option value="Dokter">Dokter</option>
            <option value="Teologi">Teologi</option>
            <option value="Arsitektur">Arsitektur</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen">Manajemen</option>
          </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-group w-25=">
            <input type="checkbox" name="bidang_minat[]" value="Basket" class="form-check-input">
            <label>Basket</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Futsal" class="form-check-input">
            <label>Futsal</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Badminton" class="form-check-input">
            <label>Badminton</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Catur" class="form-check-input">
            <label>Catur</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Menyayi" class="form-check-input">
            <label>Menyayi</label>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection