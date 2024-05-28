@extends('layouts.topbar')
     
@section('content')
<div class="container">
    <h1>Daftar Ajukan Informasi</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Tanaman</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($informasi as $info)
                <tr>
                    <td>{{ $info->id }}</td>
                    <td>{{ $info->namatanaman }}</td>
                    <td>{{ $info->judul }}</td>
                    <td>{{ $info->isi }}</td>
                    <td>{{ $info->status }}</td>
                    <td>
                        <a href="{{ route('ajukan-informasi.show', $info->id) }}" class="btn btn-primary">Show</a>
                        <form action="{{ route('ajukan-informasi.approve', $info->id) }}" method="POST" style="display:inline-block;">
                            @csrf
                            <button type="submit" class="btn btn-success">Approve</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

