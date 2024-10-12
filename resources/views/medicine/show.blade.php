<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="show-table">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th class="col-2">Name</th>
                        <th class="col-1">Code</th>
                        <th class="col-1">Price</th>
                        <th class="col-3">Category</th>
                        <th class="col-1">Quantity</th>
                        <th class="col-1">Inventory</th>
                        <th class="col-2">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($medicines as $medicine)
                    <tr>
                        <td>{{$medicine->id}}</td>
                        <td>{{$medicine->name}}</td>
                        <td>{{$medicine->code}}</td>
                        <td>{{$medicine->price}}</td>
                        <td>{{$medicine->category->name}}</td>
                        <td>{{$medicine->quantity}}</td>
                        <td>{{App\Traits\Helper::getSpecificInvMedicineQuantity($medicine->code)}}</td>
                        <td>
                            <div  class="d-flex justify-content-around">
                                <a href="{{route('medicine.edit' , $medicine->id)}}" class="edit-btn">Edit</a>
                                <a href="#" class="delete-btn" medicine_id = "{{$medicine->id}}">Delete</a>
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

