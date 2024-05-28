@extends('layouts.topbar')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Ajukan Informasi </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('ajukan.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tanaman :</strong>
                {{ $informasi->namatanaman }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Informasi :</strong>
                {{ $informasi->jenisInformasi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Judul :</strong>
                {{ $informasi->judul }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Isi :</strong>
                {{ $informasi->isi }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Keterangan :</strong>
                {{ $informasi->keterangan }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong><br>
                <img src="/gambar_tanaman/{{ $informasi->gambar_tanaman }}" width="500px">
            </div>
        </div>

        @if(in_array($informasi->jenisInformasi, ['Hama dan Penyakit']))
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tahapan :</strong>
                    {{ $informasi->tahapan }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gejala :</strong>
                    {{ $informasi->gejala }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rekomendasi :</strong>
                    {{ $informasi->rekomendasi }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Penyebab :</strong>
                    {{ $informasi->penyebab }}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tindakan Pencegahan :</strong>
                    {{ $informasi->tindakanpencegahan }}
                </div>
            </div>
        @endif
    </div>
@endsection
