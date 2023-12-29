@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pemilik Mobil </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
           {{ session('success')}}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</< /td>
                        <td>{{ $user->alamat }}</< /td>
                        <td>{{ $user->no_tel }}</< /td>
                        <td><a href="" class="badge bg-primary"><span data-feather="edit"></span></a></< /td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
