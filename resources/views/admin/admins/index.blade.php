@extends('admin.app')
@section('title') Authenticated Admin @endsection
@section('content')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-bar-chart"></i> Authenticated Admin</h1>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($admins as $admin)
                            <tr>
                                <td class="text-center">{{ $admin->id }}</td>
                                <td class="text-center">{{ $admin->name }}</td>
                                <td class="text-center">{{ $admin->email }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{ $admins->links() }}
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