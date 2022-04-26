@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="app-menu__icon fas fa-music"></i> {{ $pageTitle }}</h1>
            <p>Song ID: &nbsp{{ $subTitle }}</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <section class="invoice">
                    <div class="row mb-4">
                        <div class="col-6">
                            <h4 class="page-header">Song Name: {{ $song->song_name }}</h4>
                        </div>
                        <div class="col-6">
                            <h5 class="text-right">Created Date: {{ $song->created_at->toFormattedDateString() }}</h5>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="tile">
                <section class="invoice">
                    <div class="row invoice-info">
                        <div class="col-1"></div>
                        <div class="col-6">
                            <h4 class="page-header">Song Details</h4><br><br>
                            <b>Song ID:</b> {{ $song->id }}<br><br>
                            <b>Song Name:</b> {{ $song->song_name }}<br><br>
                            <b>Artists:</b> @foreach($song->artists as $artist) 
                                <span class="badge badge-info">{{ $artist->name }}</span> 
                                @endforeach<br><br>
                            <b>Description:</b> {{ $song->description }}<br><br>
                        </div>
                        <div class="col-5">
                            <h4 class="page-header">Images</h4><br>
                            @if ($song->images)
                            <br>
                                <div class="row">
                                    @foreach($song->images as $image)
                                        <div class="col-12 col-sm-4 col-md-4">
                                            <img src="{{ asset('storage/'.$image->full) }}" id="brandLogo" class="img-fluid" alt="img">
                                        </div>
                                    @endforeach
                                </div>
                            @endif 
                        </div>
                    </div>
                    
                </section>
            </div>
    </div>
    <div class="row">
        <a class="btn btn-success ml-5" href="{{ route('admin.songs.index') }}">Back</a>
    </div>
@endsection
