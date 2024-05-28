@extends('layouts.topbar')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Penanaman</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('penanaman.create') }}"> Tambah Data </a>
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
        @foreach ($penanaman as $penanamans)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $penanamans->namatanaman}}</td>
            <td>{{ $penanamans->judul }}</td>
            <td>{{ Str::limit($penanamans->isi, 20) }}</td>
            <td>{{ Str::limit($penanamans->keterangan, 20) }}</td>
            <td><img src="/gambar_tanaman/{{ $penanamans->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('penanaman.destroy',$penanamans->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('penanaman.show',$penanamans->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('penanaman.edit',$penanamans->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $penanaman->links() !!}
        
@endsection