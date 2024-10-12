@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <h3 class="text-center mb-3">Add Medicine To Inventory</h3>
                <form  method="POST" action="{{ route('inv_medicine.store') }}" enctype="multipart/form-data" class="gy-3 gx-2">
                    @csrf
                    <div class="mb-3">
                        <input name="inv_medicine_name" type="text" class="form-control" id="" placeholder="Name">
                    </div>
                    <div class="mb-3">
                        <input name="inv_medicine_code" type="text" class="form-control" id="" placeholder="Code">
                    </div>
                    <div class="mb-3">
                        <input name="inv_medicine_price" type="text" class="form-control" id="" placeholder="Price">
                    </div>
                    <div class="mb-3">
                        <input name="inv_medicine_quantity"  min="0" max="1000" type="number" class="form-control" id="" placeholder="Quantity">
                    </div>

                    <div class="mb-3">
                        <input name="inventory_data" type="hidden" class="form-control" id="" value="{{$inventory}}">
                    </div>

                    <button type="submit" class="btn btn-primary col-md-12">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
