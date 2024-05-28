@extends('layouts.topbar')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Persiapan Lahan</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('persiapan.create') }}"> Tambah Data </a>
            </div>
            <br>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Tanaman</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Keterangan</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($persiapan as $persiapans)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $persiapans->namatanaman}}</td>
            <td>{{ $persiapans->judul }}</td>
            <td>{{ Str::limit($persiapans->isi, 20) }}</td>
            <td>{{ Str::limit($persiapans->keterangan, 20) }}</td>
            <td><img src="/gambar_tanaman/{{ $persiapans->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('persiapan.destroy',$persiapans->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('persiapan.show',$persiapans->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('persiapan.edit',$persiapans->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $persiapan->links() !!}
        
@endsection