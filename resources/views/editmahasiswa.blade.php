@extends('layout.main')
@section('article')
<div class="container-fluid mt-4 rounded">
    @php
        $minat = explode(',',$mahasiswa->bidang_minat)
    @endphp
    <form action="/mahasiswa/updatemahasiswa/{{$mahasiswa->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group w-25">
            <label>NIM</label>
            <input type="number" name="nim" class="form-control" value="{{$mahasiswa->nim}}">
        </div>
        <div class="form-group w-25">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$mahasiswa->nama}}">
        </div>
        <label>Gender</label>
        <div class="form-group w-25=">
            <input type="radio" name="gender" value="male" value="male" {{$mahasiswa->gender == 'male' ? 'checked':'' }}
            class="form-check-input">
            <label>male</label>
        </div>
        <div class="form-group w-25">
            <input type="radio" name="gender" value="female" value="female" {{$mahasiswa->gender == 'female' ? 'checked':'' }}
            class="form-check-input">
            <label>female</label>
        </div>
        <div class="form-group w-25">
          <label>Jurusan</label>
          <select name="jurusan" class="form-control">
            <option value="0">--- Pilih Jurusan ---</option>
            <option value="Dokter" {{$mahasiswa->jurusan == 'Dokter' ? 'selected':'' }}>Dokter</option>
            <option value="Teologi" {{$mahasiswa->jurusan == 'Teologi' ? 'selected':'' }}>Teologi</option>
            <option value="Arsitektur" {{$mahasiswa->jurusan == 'Arsitektur' ? 'selected':'' }}>Arsitektur</option>
            <option value="Teknik Informatika" {{$mahasiswa->jurusan == 'Teknik Informatika' ? 'selected':'' }}>Teknik Informatika</option>
            <option value="Sistem Informasi" {{$mahasiswa->jurusan == 'Sistem Informasi' ? 'selected':'' }}>Sistem Informasi</option>
            <option value="Manajemen" {{$mahasiswa->jurusan == 'Manajemen' ? 'selected':'' }}>Manajemen</option>
          </select>
        </div>
        <label>Bidang Minat</label>
        <div class="form-group w-25=">
            <input type="checkbox" name="bidang_minat[]" value="Basket" {{in_array('Basket',$minat)? 'checked':'' }}
            class="form-check-input">
            <label>Basket</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Futsal" {{in_array('Futsal',$minat)? 'checked':'' }}
            class="form-check-input">
            <label>Futsal</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Badminton" {{in_array('Badminton',$minat)? 'checked':'' }}
             class="form-check-input">
            <label>Badminton</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Catur" {{in_array('Catur',$minat)? 'checked':'' }}
             class="form-check-input">
            <label>Catur</label>
        </div>
        <div class="form-group w-25">
            <input type="checkbox" name="bidang_minat[]" value="Menyanyi" {{in_array('Menyanyi',$minat)? 'checked':'' }}
             class="form-check-input">
            <label>Menyanyi</label>
        </div>
        <div class="form-group pt-4">
            <input type="submit" value="Simpan" class="btn btn-outline-primary">
        </div>
    </form>
</div>
@endsection