@extends('layouts.topbar')
  
@section('content')
<main>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="content-header">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h2 class="mb-0">{{ __('Tambah Data Pemantauan') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('pemantauan.index')}}" class="breadcrumb-item"><i class="fas fa-hands"></i></a>
                                        <a href="{{route('pemantauan.index')}}" class="breadcrumb-item">Pemantauan</a>
                                        <span class="breadcrumb-item active">Tambah</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('pemantauan.index') }}" class="md-5" style="color: black; text-decoration: none;"><b>< Kembali</b></a>
                                    <form action="{{ route('pemantauan.store') }}" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        
                                        <div class="form-group row">
                                            <label for="nama_tanaman" class="col-sm-2 col-form-label">Nama Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="nama_tanaman" name="namatanaman">
                                                @foreach ($tanaman as $t)
                                                    <option value="{{ $t->nama_tanaman }}">{{ $t->nama_tanaman }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="{{ old('judul') }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="isi" class="col-sm-2 col-form-label">Isi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="isi" name="isi"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan :<span></span></label>
                                            <div class="col-sm-10">
                                                 <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                                                {{-- <input type="text" class="form-control" name="keterangan" id="keterangan" placeholder="Keterangan" value="{{ old('nama_tanaman') }}"> --}}
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="Gambar" class="col-sm-2 col-form-label">Gambar Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <div class="custom-file">
                                                    {{-- <input type="file" class="form-control" name="putusanPN" accept=".pdf"> --}}
                                                    <input type="file" class="custom-file-input" name="gambar_tanaman" id="inputFile">
                                                    <label class="custom-file-label" for="gambar_tanaman">Pilih tanaman</label>
                                                     {{-- <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar"> --}}
                                                </div>
                                            </div>
                                        </div>
                                            <div class="cpl mt-5 col-xs-12 col-sm-12 col-md-12 text-right">
                                                    <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>
                                        
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>              
            </div>
        </div>
    </section>
</main>

{{-- 
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Data Pemantauan </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pemantauan.index') }}"> Back</a>
        </div>
    </div>
</div>
<br>
     
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
     
<form action="{{ route('pemantauan.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Tanaman :</strong>
                <input type="text" name="namatanaman" class="form-control" placeholder="Nama Tanaman">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                <input type="text" name="judul" class="form-control" placeholder="Judul">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <label for="isi">Isi:</label>
                <textarea class="form-control" id="isi" name="isi"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong>
                <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form> --}}
@endsection