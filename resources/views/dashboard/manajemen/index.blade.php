@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Mobil </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
           {{ session('success')}}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="/dashboard/manajemen/create" class="btn btn-primary mb-3">Tambah Mobil</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Merek</th>
                    <th scope="col">Model</th>
                    <th scope="col">Nomor Plat</th>
                    <th scope="col">Tarif Perhari</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($manajemens as $manajemen)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $manajemen->merek }}</td>
                        <td>{{ $manajemen->model }}</< /td>
                        <td>{{ $manajemen->no_plat }}</< /td>
                        <td>{{ $manajemen->tarif_perhari }}</< /td>
                        <td><a href="" class="badge bg-primary"><span data-feather="edit"></span></a></< /td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
