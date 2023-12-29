@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Mobil Baru </h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/manajemen" method="POST">
            @csrf
            <div class="mb-3">
                <label for="merek" class="form-label">Merek</label>
                <input type="text" class="form-control @error('merek') is-invalid @enderror" id="merek" name="merek" required autofocus>
                @error('merek')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model">
            </div>
            <div class="mb-3">
                <label for="no_plat" class="form-label">No Plat</label>
                <input type="text" class="form-control" id="no_plat" name="no_plat">
            </div>
            <div class="mb-3">
                <label for="tarif_perhari" class="form-label">Tarif Perhari</label>
                <input type="text" class="form-control" id="tarif_perhari" name="tarif_perhari">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
