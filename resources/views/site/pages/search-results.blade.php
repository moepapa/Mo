@extends('site.app')
@section('title', 'Search Results')
@section('content')
    <div class="container">
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

    <section class="section-pagetop bg-white">
        <div class="container search-results clearfix">
            <h6 class="search-results-count text-green" style="font-size:20px;">Search Results - &nbsp;{{ $seedlings->total() }} result(s) for &nbsp;'{{ request()->input('query') }}'</h6>
            <br>
            @foreach($seedlings as $seedling)
                <div>{{ $seedling->myan_name }}</div>
            @endforeach
            <br>
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th class="text-center text-black"> အမည် </th>
                        <th class="text-center text-black"> စိုက်ပျိုးဒေသ </th>
                        <th class="text-center text-black"> ဆေးဝါးအသုံးပြုပုံ </th>
                        <th class="text-center text-black"> ဈေးနှုန်း </th>
                        <th class="text-center text-black"> အသေးစိတ် </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($seedlings as $seedling)
                    <tr>
                        <td class="text-center">{{ $seedling->myan_name }}</td>
                        <td class="text-center">{{ Str::limit($seedling->cultivate, 40) }}</td>
                        <td class="text-center">{{ Str::limit($seedling->medicine, 40) }}</td>
                        <td class="text-center">{{ config('settings.currency_symbol') }}{{ $seedling->price }}</td>
                        <td class="text-center">
                            <a href="{{ route('seedling.show', $seedling->slug) }}" class="btn btn-sm btn-success">&nbsp&nbsp&nbsp&nbsp View &nbsp&nbsp&nbsp&nbsp</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            {{ $seedlings->appends(request()->input())->links() }}
        </div>
    </section>
@stop
@push('scripts')
   
@endpush