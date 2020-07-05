@extends('layouts.master')

@section('content')
<div class="jumbotron">
    <h1 class="display-4">Selamat Datang!</h1>
    <p class="lead">Ini adalah simulasi CRUD Quiz III Laravel. Jangan lupa atur file .env untuk set database. 
        Agar fitur bisa dirasakan semua, buatlah akun sendiri pada link <a href="/registration">register</a></p>
    <hr class="my-4">
    <p>Untuk mencoba, silahkan klik tombol di bawah ini. Loginlah terlebih dahulu</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="/artikel" role="button">Menuju Artikel</a>
      <a class="btn btn-primary btn-lg" href="#ERD" role="button">Lihat Diagram ERD</a>
      <a class="btn btn-primary btn-lg" href="/login" role="button">Login dulu</a>
    </p>
</div>

<div class="container-fluid">
  <div class="row no-gutter">
    <div class="d-none d-md-flex col-md-3"></div>
    <div class="col-md-8 col-lg-6">
      <div class="login d-flex align-items-center py-5">
        <div class="container">
          <div class="row">
            <div class="col-md-9 col-lg-8 mx-auto">
              <h3 class="login-heading mb-4" id="ERD">My Diagram ERD</h3>
              <div class="card">
                  <div class="card-body text-center">
                    <img src={{asset("/img/erd.png")}} width="325px"/>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 
@endsection