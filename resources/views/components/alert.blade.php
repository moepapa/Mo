@extends("layouts.main")

@section("content")
    <div class="alert alert-danger">
        <h4 class="alert-title">Error</h4>
    </div>
@endsection

@component('components.alert')
    This is a dummy message, just for testing purpose.
@endcomponent
