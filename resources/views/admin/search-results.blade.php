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
                        <h6 class="search-results-count text-green" style="font-size:20px;">Search Results - &nbsp;{{ $seedlings->total() }} result(s) for &nbsp;'{{ request()->input('query') }}'</h6>
                        <br>
                        @foreach($seedlings as $seedling)
                            <div>{{ $seedling->myan_name }}</div>
                        @endforeach
                        <br>
                        <div class="tile-body table-responsive">
                            <table class="table table-hover table-bordered" id="">
                                <thead>
                                    <tr>
                                        <th class="text-center text-black"> Myanmar Name </th>
                                        <th class="text-center text-black"> Category </th>
                                        <th class="text-center text-black"> Type </th>
                                        <th class="text-center text-black"> Price </th>
                                        <th class="text-center text-black"> Details </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($seedlings as $seedling)
                                    <tr>
                                        <td class="text-center">{{ $seedling->myan_name }}</td>
                                        <td class="text-center">
                                            @foreach($seedling->categories as $category)
                                                <span class="badge badge-info">{{ $category->name }}</span>
                                            @endforeach
                                        </td>
                                        <td class="text-center">{{ $seedling->type->name }}</td>
                                        <td class="text-center">{{ $seedling->price }}</td>
                                        <td class="text-center">
                                            <a href="{{ route('admin.seedlings.show', $seedling->id) }}" class="btn btn-sm btn-success">&nbsp&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp&nbsp</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{ $seedlings->appends(request()->input())->links() }}
                    </div>
                </section>
            </div>
        </div>
    </div>
    
@stop
@push('scripts')
   
@endpush