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
                                    <h2 class="mb-0">{{ __('Edit Data Rotasi Tanaman') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('rotasi.index')}}" class="breadcrumb-item"><i class="fa fa-repeat"></i></a>
                                        <a href="{{route('rotasi.index')}}" class="breadcrumb-item">Rotasi Tanaman</a>
                                        <span class="breadcrumb-item active">Edit</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="container-fluid">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <strong>Whoops!</strong> Terdapat beberapa kesalahan pada inputan Anda.<br><br>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="card">
                                <div class="card-body">
                                    <a href="{{ route('rotasi.index') }}" class="md-5" style="color: black; text-decoration: none;"><b>< Kembali</b></a>
                                    <form action="{{ route('rotasi.update',$rotasi->id) }}" class="mt-5" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('PUT')
                                        <div class="form-group row">
                                            <label for="nama_tanaman" class="col-sm-2 col-form-label">Nama Tanaman :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control" id="nama_tanaman" name="namatanaman">
                                                @foreach ($tanaman as $t)
                                                    <option value="{{ $t->nama_tanaman }}" {{ $t->nama_tanaman == $rotasi->namatanaman ? 'selected':'' }}>{{ $t->nama_tanaman }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="jenisInformasi" class="col-sm-2 col-form-label">Jenis Informasi :<span></span></label>
                                            <div class="col-sm-10">
                                                <select class="form-control form-select" id="jenisInformasi" name="jenisInformasi">
                                                @foreach ($jenisinformasiOptions as $key => $value)
                                                    <option value="{{ $key }}" {{ $key == $rotasi->jenisInformasi ? 'selected':'' }}>{{ $value }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="judul" class="col-sm-2 col-form-label">Judul :<span></span></label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="judul" id="judul" placeholder="Judul" value="{{ $rotasi->judul }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="isi" class="col-sm-2 col-form-label">Isi :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="isi" name="isi">>{{ $rotasi->isi }}</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="keterangan" class="col-sm-2 col-form-label">Keterangan :<span></span></label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="keterangan" name="keterangan">{{ $rotasi->keterangan }}</textarea>
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
                                                <img src="/gambar_tanaman/{{ $rotasi->gambar_tanaman }}" width="300px">
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

    
    {{-- <form action="{{ route('rotasi.update',$rotasi->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tanaman :</strong>
                    <input type="text" name="namatanaman" value="{{ $rotasi->namatanaman }}" class="form-control" placeholder="Nama Tanaman">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Informasi :</strong>
                    <select class="form-control" id="jenisInformasi" name="jenisInformasi">
                    @foreach ($jenisinformasiOptions as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $rotasi->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Isi :</strong>
                    <textarea class="form-control" id="isi" name="isi">{{ $rotasi->isi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <textarea class="form-control" id="keterangan" name="keterangan">{{ $rotasi->keterangan }}</textarea>
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gambar :</strong>
                    <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
                    <br>
                    <img src="/gambar_tanaman/{{ $rotasi->gambar_tanaman }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form> --}}
@endsection