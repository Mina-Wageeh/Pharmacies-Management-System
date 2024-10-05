@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('branch.create')}}" type="button" class="btn btn-success rounded col-12">Create New Branch</a>
            </div>
            @include('branch.show')
        </div>
    </div>

@endsection
