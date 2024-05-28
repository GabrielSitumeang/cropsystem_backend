@extends('layouts.topbar')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Data Persiapan Lahan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('persiapan.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanaman :</strong>
                {{ $persiapan->namatanaman }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                {{ $persiapan->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi :</strong>
                {{ $persiapan->isi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $persiapan->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <img src="/gambar_tanaman/{{ $persiapan->gambar_tanaman }}" width="500px">
            </div>
        </div>
    </div>
@endsection
