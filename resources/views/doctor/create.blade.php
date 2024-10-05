@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Add A New Doctor</h3>
                <form  method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="doctor_name" type="text" class="form-control" id="" placeholder="Name">
                    </div>

                    <div class="mb-3">
                        <input name="doctor_nat_id" type="text" class="form-control" id="" placeholder="National ID">
                    </div>

                    <div class="mb-3">
                        <input name="doctor_age" type="text" class="form-control" id="" placeholder="Age">
                    </div>

                    <div class="mb-3">
                        <input name="doctor_phone" type="text" class="form-control" id="" placeholder="Phone">
                    </div>

                    <div class="mb-3">
                        <input name="doctor_address" type="text" class="form-control" id="" placeholder="Address">
                    </div>

                    <div class="mb-3">
                        <input name="branch_id" value="{{$branch->address}} Branch" type="text" class="form-control text-muted" readonly>
                    </div>


                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
