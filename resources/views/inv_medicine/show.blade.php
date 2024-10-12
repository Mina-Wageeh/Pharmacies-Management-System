<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="show-table">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-3">Name</th>
                        <th class="col-1">Code</th>
                        <th class="col-1">Price</th>
                        <th class="col-1">Quantity</th>
                        <th class="col-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($inv_medicines as $inv_medicine)
                    <tr>
                        <td>{{$inv_medicine->id}}</td>
                        <td>{{$inv_medicine->name}}</td>
                        <td>{{$inv_medicine->code}}</td>
                        <td>{{$inv_medicine->price}}</td>
                        <td>{{$inv_medicine->quantity}}</td>
                        <td>
                            <div  class="d-flex justify-content-around">
                                <a href="{{route('inv_medicine.edit' , $inv_medicine->id)}}" class="edit-btn">Edit</a>
                                <a href="#" class="delete-btn" inv_medicine_id = "{{$inv_medicine->id}}">Delete</a>
                                <a href="#" class="send-to-branch text-white" data-toggle="modal" data-target="#select-num" inv_medicine_quantity="{{$inv_medicine->quantity}}">Send To Branch</a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

