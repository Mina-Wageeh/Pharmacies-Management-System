@extends('layouts.app')

@section('content')

    <div class="content">
        <div class="container-fluid">
            <div class="d-flex justify-content-center mb-3">
                <a href="{{route('doctor.create')}}" type="button" class="btn btn-success rounded w-100 col-12">Create New Doctor</a>
            </div>
            @include('doctor.show')
        </div>
    </div>

@endsection
