@extends('dashboard.layouts.main')

@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pinjam </h1>
    </div>
    @if (session()->has('success'))
        <div class="alert alert-primary" role="alert">
            {{ session('success') }}
        </div>
    @endif
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="/dashboard/pinjam/create" class="btn btn-primary mb-3">Pinjam Mobil</a>
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tanggal Pinjam</th>
                    <th scope="col">Tanggal Kembali</th>
                    <th scope="col">Merek</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pinjamList as $pinjam)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pinjam->tanggal_pinjam }}</< /td>
                        <td>{{ $pinjam->tanggal_kembali }}</< /td>
                        <td>{{ $pinjam->manajemens_id }}</td>
                        <td>
                    
                        <form action="{{ route('pinjam.destroy',$pinjam) }}" method="POST">
                        @method('delete')
                         @csrf
                        <button class="badge bg-danger border-0" onclick="return confirm('Ingin mengembalikan mobil ?')"><span data-feather="delete"></span></button>
                        </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
