@extends('admin.app')
@section('title', 'Search Results')
@section('content')
    <div class="container-fluid">
        @if(session()->has('success_message'))
            <div class="alert alert-success">
                {{ session()->get('success_message') }}
            </div>
        @endif

        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <section class="section-pagetop bg-white">
                    <div class="container search-results clearfix">
                        <h6 class="search-results-count text-green" style="font-size:20px;">Search Results - &nbsp;{{ $songs->total() }} result(s) for &nbsp;'{{ request()->input('query') }}'</h6>
                        <br>
                        @foreach($songs as $song)
                            <div>{{ $song->song_name }}</div>
                        @endforeach
                        <br>
                        <div class="tile-body table-responsive">
                            <table class="table table-hover table-bordered" id="">
                                <thead>
                                    <tr>
                                        <th class="text-center text-black"> Song Name </th>
                                        <th class="text-center text-black"> Description </th>
                                        <th class="text-center text-black"> Details </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($songs as $song)
                                    <tr>
                                        <td class="text-center">{{ $song->song_name }}</td>
                                        <td class="text-center">{{ $song->description }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.songs.show', $song->id) }}" class="btn btn-sm btn-success">&nbsp&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp&nbsp</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $songs->appends(request()->input())->links() }}
                    </div>
                </section>
            </div>
        </div>
    </div>
    
@stop
@push('scripts')
   
@endpush