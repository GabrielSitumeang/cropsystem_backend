@extends('layouts.topbar')
   
@section('content')
<main>
    <section>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="content-header">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h2 class="mb-0">{{ __('Postingan') }}</h2>
                                </div><!-- /.col -->
                            </div>
                            <div class="page-header-content d-lg-flex border-top">
                                <div class="d-flex">
                                    <div class="breadcrumb py-2">
                                        <a href="{{route('komunitas.index')}}" class="breadcrumb-item"><i class="people_outline"></i></a>
                                        <a href="{{route('komunitas.index')}}" class="breadcrumb-item">Postingan</a>
                                        <span class="breadcrumb-item active">Detail</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <div class="row mt-3">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p>Diposting oleh: {{ $posts->name }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <p>Pada Tanggal: {{ $posts->created_at }}</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <div class="col">
                                        <p>{{ $posts->body }}</p>
                                    </div>
                                    <div class="col">
                                        <img src="/posting/{{ $posts->image }}" width="500px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    {{-- <strong>Gambar :</strong><br> --}}
                                    
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group row">
                                    <div class="col">
                                        <a href="#" class="breadcrumb-item"><i class="people_outline"></i></a>
                                        <a href="#" class="breadcrumb-item">{{ $posts->like_count }}</a>
                                    </div> | 
                                    <div class="col">
                                        <a href="#" class="breadcrumb-item"><i class="people_outline"></i></a>
                                        <a href="#" class="breadcrumb-item">{{ $posts->comment_count }}</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                @foreach($comments as $comment)
                                <div class="form-group row">
                                    <div class="col">
                                        <p>{{ $comment->name }}</p>
                                    </div>
                                    <div class="col">
                                        <p>{{ $comment->created_at }}</p>
                                    </div>
                                </div>
                                <div>
                                    <p>{{ $comment->comment }}</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection
