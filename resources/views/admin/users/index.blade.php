@extends('admin.app')
@section('title') Registered Users @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Registered Users</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 mx-auto">
            <div class="tile">
                <div class="tile-body table-responsive">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th class="text-center"> Id </th>
                            <th class="text-center"> Name </th>
                            <th class="text-center"> Email </th>
                            <th class="text-center"> City </th>
                            <th class="text-center"> Country </th>
                            <th class="text-center"> Address </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td class="text-center">{{ $user->id }}</td>
                                <td class="text-center">{{ $user->fullname }}</td>
                                <td class="text-center">{{ $user->email }}</td>
                                <td class="text-center">{{ $user->city }}</td>
                                <td class="text-center">{{ $user->country }}</td>
                                <td class="text-center">{{ $user->address }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $users->links() }}
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