@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Edit Medicine Info</h3>
                <form  method="POST" action="{{ route('doctor.update' , $doctor->id) }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="doctor_name" type="text" class="form-control" value="{{$doctor->name}}">
                    </div>
                    <div class="mb-3">
                        <input name="doctor_nat_id" type="text" class="form-control" value="{{$doctor->national_id}}">
                    </div>
                    <div class="mb-3">
                        <input name="doctor_age" type="text" class="form-control" value="{{$doctor->age}}">
                    </div>
                    <div class="mb-3">
                        <input name="doctor_phone" type="text" class="form-control" value="{{$doctor->phone}}">
                    </div>
                    <div class="mb-3">
                        <input name="doctor_address" type="text" class="form-control" value="{{$doctor->address}}">
                    </div>
                    <button type="submit" class="btn btn-primary col-md-12">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
