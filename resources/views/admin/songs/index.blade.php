@extends('admin.app')
@section('title') {{ $pageTitle }} @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="app-menu__icon fas fa-music"></i> {{ $pageTitle }}</h1>
            <p>{{ $subTitle }}</p>
        </div>
        <a href="{{ route('admin.songs.create') }}" class="btn btn-primary pull-right">Add song</a>
    </div>
    @include('admin.partials.flash')
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="tile">
                <div class="tile-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th class="text-center"> ID </th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Images </th>
                            <th class="text-center"> Artists </th>
                            <th class="text-center"> Description </th>
                            <th class="text-center"> Created_at </th>
                            <th class="text-center"> Updated_at </th>
                            <th style="width:100px; min-width:100px;" class="text-center text-danger">Action <i class="fa fa-bolt"> </i></th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($songs as $song)
                                <tr>
                                    <td>{{ $song->id }}</td>
                                    <td>{{ $song->song_name }}</td>
                                    <td>
                                        @if ($song->images)
                                            <div class="row">
                                                @foreach($song->images as $image)
                                                    <div class="col-md-6">
                                                        <div class="card">
                                                            <img src="{{ asset('storage/'.$image->full) }}" id="brandLogo" class="img-fluid" alt="img">
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        @if ($song->artists)
                                        @foreach($song->artists as $artist)
                                            {{ $artist->name }}
                                        @endforeach
                                        @endif
                                    </td>
                                    <td>{{ $song->description }}</td>
                                    <td>{{ $song->created_at->toFormattedDateString() }}</td>
                                    <td>{{ $song->updated_at->toFormattedDateString() }}</td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group" aria-label="Second group">
                                            <a href="{{ route('admin.songs.edit', $song->id) }}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('admin.songs.delete', $song->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
                                            <a href="{{ route('admin.songs.show', $song->id) }}" class="btn btn-sm btn-primary">View</a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush
