@extends('layouts.topbar')
     
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Hama</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('hama.index') }}"> Back</a>
            </div>
        </div>
    </div>
     
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
    
    <form action="{{ route('hama.update',$pupuk->id) }}" method="POST" enctype="multipart/form-data"> 
        @csrf
        @method('PUT')
     
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Tanaman :</strong>
                    <input type="text" name="namatanaman" value="{{ $hama->namatanaman }}" class="form-control" placeholder="Nama Tanaman">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Judul :</strong>
                    <input type="text" name="judul" value="{{ $hama->judul }}" class="form-control" placeholder="Judul">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Gejala :</strong>
                    <textarea class="form-control" id="gejala" name="gejala">{{ $hama->gejala }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Info Lebih Lanjut :</strong>
                    <textarea class="form-control" id="info_lebih_lanjut" name="info_lebih_lanjut">{{ $hama->info_lebih_lanjut }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Rekomendasi :</strong>
                    <textarea class="form-control" id="rekomendasi" name="rekomendasi">{{ $hama->rekomendasi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengendalian Hayati :</strong>
                    <textarea class="form-control" id="pengendalian_hayati" name="pengendalian_hayati">{{ $hama->pengendalian_hayati }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Pengendalian Kimiawi :</strong>
                    <textarea class="form-control" id="pengendalian_kimiawi" name="pengendalian_kimiawi">{{ $hama->pengendalian_kimiawi }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Obati Penyebab :</strong>
                    <textarea class="form-control" id="obati_penyebab" name="obati_penyebab">{{ $hama->obati_penyebab }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tindakan Pencegahan :</strong>
                    <textarea class="form-control" id="tindakan_pencegahan" name="tindakan_pencegahan">{{ $hama->tindakan_pencegahan }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Cegah Penyebab :</strong>
                    <textarea class="form-control" id="cegah_penyebab" name="cegah_penyebab">{{ $hama->cegah_penyebab }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Keterangan :</strong>
                    <textarea class="form-control" id="keterangan" name="keterangan">{{ $hama->keterangan }}</textarea>
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
                    <input type="file" name="gambar_tanaman" class="form-control" placeholder="Gambar">
                    <img src="/image/{{ $pupuk->gambar_tanaman }}" width="300px">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
     
    </form>
@endsection