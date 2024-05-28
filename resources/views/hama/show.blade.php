@extends('layouts.topbar')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan Data Hama </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Tanaman :</strong>
                {{ $hama->namatanaman }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                {{ $hama->tahapanPupuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                {{ $hama->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gejala :</strong>
                {{ $hama->gejala }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info Lebih Lanjut :</strong>
                {{ $hama->info_lebih_lanjut }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rekomendasi :</strong>
                {{ $hama->rekomendasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Hayati :</strong>
                {{ $hama->pengendalian_hayati }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Kimiawi :</strong>
                {{ $hama->pengendalian_kimiawi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Obati Penyebab :</strong>
                {{ $hama->obati_penyebab }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tindakan Pencegahan :</strong>
                {{ $hama->tindakan_pencegahan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cegah Penyebab :</strong>
                {{ $hama->cegah_penyebab}}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $hama->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                {{ $hama->tahapanPupuk }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <img src="/gambar_tanaman/{{ $hama->gambar_tanaman }}" width="500px"> <br>
            </div>
        </div>
    </div>
@endsection
