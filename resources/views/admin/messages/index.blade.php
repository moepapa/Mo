@extends('admin.app')
@section('title') Messages @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Messages </h1>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('admin.messages.store') }}" method="POST" role="form">
            @csrf
            <div class="form-group">
                <label for="message">Enter Message</label>
                <textarea name="message" id="message" cols="30" rows="10" class="form-control" value="" required autofocus></textarea>
            </div>
            <table class="table table-hover table-bordered" id="sampleTable">
                <thead>
                    <tr>
                        <th class="text-center"></th>
                        <th class="text-center"> Id </th>
                        <th class="text-center"> User Name </th>
                        <th class="text-center"> email </th>
                        <th class="text-center"> mobile </th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($users)>0)
                        @foreach($users->all() as $user)
                            <tr>
                                <td>
                                    <input type="checkbox" name="mobile[]" class="checkbox" value="{{ $user->mobile }}"/>
                                </td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->fullname }}</td>
                                <td>{{ $user->mobile }}</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Send Message</button>
            </div>
        </form>
    </div>
@endsection
@push('scripts')
    <script type="text/javascript" src="{{ asset('backend/js/plugins/jquery.dataTables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('backend/js/plugins/dataTables.bootstrap.min.js') }}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
@endpush