@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pinjam Mobil </h1>
    </div>
    <div class="col-lg-8">
        <form action="/dashboard/pinjam" method="POST">
            @csrf
            <div class="mb-3">
                <label for="tanggal_pinjam" class="form-label">Tanggal_ Pinjam</label>
                <input type="date" class="form-control @error('merek') is-invalid @enderror" id="tanggal_pinjam" name="tanggal_pinjam" required autofocus>
                @error('tanggal_pinjam')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="tanggal_kembali" class="form-label">Tanggal Pengembalian</label>
                <input type="date" class="form-control" id="tanggal_kembali" name="tanggal_kembali">
            </div>
            <div class="mb-3">
                <label for="manajemens_id" class="form-label">Merek Mobil</label>
                <input type="text" class="form-control" id="manajemens_id" name="manajemens_id">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
