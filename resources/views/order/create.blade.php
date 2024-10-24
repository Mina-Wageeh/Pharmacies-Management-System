@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <form  method="POST" action="{{ route('order.store') }}" enctype="multipart/form-data" class="">
            @csrf

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-6">
                            <label for="customer_name" class="label-text">Customer Name</label>
                            <input name="customer_name" type="text" class="form-control" id="customer_name">
                        </div>

                        <div class="form-group col-6">
                            <label for="customer_phone" class="label-text">Customer Phone</label>
                            <input name="customer_phone" type="text" class="form-control" id="customer_phone">
                        </div>

                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="form-group col-3">
                            <label for="categories" class="label-text">Categories</label>
                            <select name="categories" id="categories" class="custom-select text-muted">
                                <option selected hidden>Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group col-3">
                            @include('order.includes.empty-option')
                            <label for="medicines" class="label-text">Medicine</label>
                            <select name="medicines" id="medicines" class="custom-select text-muted">
                                <option selected hidden>Select Medicine</option>
                                <option disabled>Choose Category First</option>
                            </select>
                        </div>

                        <div class="form-group col-2">
                            <label for="medicine_quantity" class="label-text">Quantity</label>
                            <input name="medicine_quantity" class="form-control" id="medicine_quantity" type="text">
                        </div>

                        <div class="form-group col-2">
                            <label for="medicine_price" class="label-text">One Price</label>
                            <input name="medicine_price" id="medicine_price" type="text" class="form-control medicine_price text-muted" readonly>
                        </div>

                        <div class="form-group col-2">
                            <label for="total_medicine_price" class="label-text total-price">Total Price</label>
                            <input name="total_medicine_price" type="text" class="form-control text-muted show-medicine-price" id="total_medicine_price" readonly>
                        </div>
                    </div>
                </div>
            </div>

            <div class="">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </div>
        </form>
    </div>
</div>

@endsection

@section('scripts')
<script>
    $(document).ready(function()
    {
        $(document).on('change' , '#categories' , function(e)
        {
            e.preventDefault()
            var category_id = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ route("medicine.category", ":id") }}'.replace(':id', category_id),
                data:
                    {
                        '_token' : '{{csrf_token()}}',
                        'medicine_id' : category_id
                    },
                success : function(data)
                {
                    $('#medicines').empty().append('<option selected hidden>Select Medicine</option>');

                    if(data.length == 0)
                    {
                        $('#medicines').append("<option disabled>No Medicinens Available</option>");
                    }
                    $.each(data , function (key , value)
                    {
                        var cloned_option= $('.empty-option').clone();
                        cloned_option.removeClass('empty-option').removeClass('d-none');
                        cloned_option.val(value.id);
                        cloned_option.text(value.name);
                        $('#medicines').append(cloned_option);
                    });


                }
            })
        })


        $(document).on('change' , '#medicines' , function(e)
        {
            e.preventDefault()
            var medicine_id = $(this).val();
            $.ajax({
                type: 'get',
                url: '{{ route("medicine.id", ":id") }}'.replace(':id', medicine_id),
                data:
                    {
                        '_token' : '{{csrf_token()}}',
                        'medicine_id' : medicine_id
                    },
                success : function(data)
                {
                    $("input[name='medicine_quantity']").val(data.quantity);
                    $("input[name='medicine_price']").val(data.price);
                    $("input[name='total_medicine_price']").val(data.price * data.quantity);

                }
            })
        })


        $(document).on('input' , '#medicine_quantity' , function(e)
        {
            e.preventDefault()
            var medicine_price = $("#medicine_price").val();
            var medicine_quantity = $(this).val();

            $("#total_medicine_price").val(medicine_price * medicine_quantity)
        })
    });
</script>
@endsection
