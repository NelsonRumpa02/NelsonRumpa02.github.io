<!doctype html>
<html lang="en">
  <head>
    <title>Data Pengguna</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
  </head>
  <body>
      <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 py-4 bg-primary">
              <div class="dropdown float-right">
                <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-person-circle"></i> User
                </button>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                  <a class="dropdown-item" href="/mahasiswa">{{Auth::User()->nama_user ?? ''}}</a>
                  <a class="dropdown-item" href="#">Data Pengguna</a>
                  <a class="dropdown-item" href="/logout">Logout</a>
                </div>
              </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2 vh-100">
                {{-- navbar --}}
                @include('layout.navbar')
            </div>
            <div class="col-lg-10 vh-100">
              <div class="card">
                <div class="card-header">
                  <a class="btn btn-primary" href="/user/formuliruser" class="bi bi-plus-square-fill" role="button"><i class="bi bi-person-plus-fill"></i> ADD USER</a>
                  <form class="form-inline my-2 my-lg-0 float-right" method="GET" action="/user/cari">
                    <input class="form-control mr-sm-2" name="cari" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                  </form>
                </div>
                <div class="card-body">
                  {{-- data user --}}
                  <div class="container-fluid mt-4 rounded">
                    <form action="/user/simpanuser" method="POST" class="pt-2 pb-2">
                        @csrf
                        <div class="form-group w-25">
                            <label>NIK User</label>
                            <input type="number" name="nik_user" class="form-control" placeholder="Masukan NIK" autofocus required>
                        </div>
                  
                        <div class="form-group w-25">
                            <label>Nama User</label>
                            <input type="text" name="nama_user" class="form-control" placeholder="Masukan Nama" required>
                        </div>
                        <div class="form-group w-25">
                            <label>No HP</label>
                            <input type="number" name="no_hp" class="form-control" placeholder="Masukan No HP" required>
                        </div>
                        <div class="form-group w-25">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                        </div>
                        <div class="form-group pt-4">
                            <input type="submit" value="Simpan" class="btn btn-outline-primary">
                        </div>
                    </form>
                </div>
                  {{-- akhir --}}
                </div>
              </div>
            </div>
        </div>
      </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>