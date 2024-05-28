@extends('layouts.topbar')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <center> <h2>Pasca Panen</h2> </center>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('pascapanen.create') }}"> Tambah Data </a>
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
        @foreach ($pascapanen as $pascapanens)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $pascapanens->namatanaman}}</td>
            <td>{{ $pascapanens->judul }}</td>
            <td>{{ Str::limit($pascapanens->isi, 20) }}</td>
            <td>{{ Str::limit($pascapanens->keterangan, 20) }}</td>
            <td><img src="/gambar_tanaman/{{ $pascapanens->gambar_tanaman }}" width="100px"></td>
            <td>
                <form action="{{ route('pascapanen.destroy',$pascapanens->id) }}" method="POST">
     
                    <a class="btn btn-info" href="{{ route('pascapanen.show',$pascapanens->id) }}">Show</a>
      
                    <a class="btn btn-primary" href="{{ route('pascapanen.edit',$pascapanens->id) }}">Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
    
    {!! $pascapanen->links() !!}
        
@endsection