@extends('layouts.main')

@section('content')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 fw-normal text-center">Form Pendaftaran</h1>
                <form action="/register" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" name="email"
                            class="form-control rounded-top @error('email') is-invalid @enderror" id="email"
                            placeholder="email">
                        <label for="email">Email : </label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" placeholder="Password">
                        <label for="password">Password : </label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                            id="name" placeholder="Abdur">
                        <label for="name">Nama : </label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="alamat" class="form-control @error('alamat') is-invalid @enderror"
                            id="alamat" placeholder="JL.Kadli">
                        <label for="alamat">Alamat : </label>
                        @error('alamat')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="no_tel" class="form-control @error('no_tel') is-invalid @enderror"
                            id="no_tel" placeholder="0823xxxxx">
                        <label for="no_tel">Nomor Telepon : </label>
                        @error('no_tel')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" name="no_sim"
                            class="form-control rounded-bottom  @error('no_sim') is-invalid @enderror" id="no_sim"
                            placeholder="1123xxxxx">
                        <label for="no_sim">Nomor SIM : </label>
                        @error('no_sim')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Daftar</button>
                </form>
                <small class="d-block mt-3 text-center">Sudah MenDaftar ?
                    <a href="/login">Login sekarang</a>
                </small>
            </main>
        </div>
    </div>
@endsection
