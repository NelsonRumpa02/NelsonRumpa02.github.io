@extends('layout.main')
@section('article')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Gender</th>
      <th scope="col">Jurusan</th>
      <th scope="col">Bidang Minat</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      @foreach ($mahasiswa as $no => $mhs)
      <tr>
          <th scope="row">{{$mahasiswa -> firstItem() + $no }}</th>
          <td>{{$mhs -> nim}}</td>
          <td>{{$mhs -> nama}}</td>
          <td>{{$mhs -> gender}}</td>
          <td>{{$mhs -> jurusan}}</td>
          <td>{{$mhs -> bidang_minat}}</td>
          <td>
            <a href="/mahasiswa/editmahasiswa/{{$mhs->id}}" class="btn btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="/mahasiswa/hapusmahasiswa/{{$mhs->id}}" class="btn btn-outline-danger" onclick="return confirm('Apakah anda yakin ingin menghapusnya?')"><i class="bi bi-trash-fill"></i></a>
          </td>
      </tr>
      @endforeach
  </tbody>
</table>
<span class="float-right">{{$mahasiswa -> links()}}</span>
@endsection
