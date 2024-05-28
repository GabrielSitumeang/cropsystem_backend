@extends('layouts.topbar')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Irigasi</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('irigasi.create') }}"> Tambah Data </a>
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
        @foreach ($irigasi as $irigasis)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $irigasis->namatanaman}}</td>
            <td>{{ $irigasis->judul }}</td>
            <td>{{ Str::limit($irigasis->isi, 20) }}</td>
            <td>{{ Str::limit($irigasis->keterangan, 20) }}</td>
            <td><img src="/gambar_tanaman/{{ $irigasis->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('irigasi.destroy',$irigasis->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('irigasi.show',$irigasis->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('irigasi.edit',$irigasis->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $irigasi->links() !!}
        
@endsection