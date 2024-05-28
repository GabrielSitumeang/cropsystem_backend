@extends('layouts.topbar')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Form Tambah Data Hama </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
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
     
<form action="{{ route('hama.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Nama Tanaman :</strong>
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
                <label for="gejala">Gejala :</label>
                <textarea class="form-control" id="gejala" name="gejala" placeholder="Gejala"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Info Lebih Lanjut :</strong>
                <input type="text" name="info_lebih_lanjut" class="form-control" placeholder="Info Lebih Lanjut">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rekomendasi :</strong>
                <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Hayati :</strong>
                <input type="text" name="pengendalian_hayati" class="form-control" placeholder="Pengendalian Hayati">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Pengendalian Kimiawi :</strong>
                <input type="text" name="pengendalian_kimiawi" class="form-control" placeholder="Pengendalian Kimiawi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Obati Penyebab :</strong>
                <input type="text" name="obati_penyebab" class="form-control" placeholder="Obati Penyebab">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tindakan Pencegahan :</strong>
                <input type="text" name="tindakan_pencegahan" class="form-control" placeholder="Tindakan Pencegahan">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Cegah Penyebab :</strong>
                <input type="text" name="cegah_penyebab" class="form-control" placeholder="cegah_penyebab">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>keterangan :</strong>
                <input type="text" name="rekomendasi" class="form-control" placeholder="Rekomendasi">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Tahapan :</strong>
                <select class="form-control" id="tahapanPupuk" name="tahapanPupuk">
                @foreach ($tahapanOptions as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
                </select>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Gambar :</strong>
                <input type="file" name="gambar_tanaman[]" class="form-control" placeholder="Gambar" multiple>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
     
</form>
@endsection