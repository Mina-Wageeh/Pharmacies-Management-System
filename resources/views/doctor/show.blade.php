<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
{{--                <table class="table text-nowrap text-center">--}}
                <table class="show-table">
                    <thead>
                    <tr>
                        <th class="col-1">ID</th>
                        <th>National ID</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Branch</th>
                        <th>Actions</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($doctors as $doctor)
                    <tr>
                        <td>{{$doctor->id}}</td>
                        <td>{{$doctor->national_id}}</td>
                        <td>{{$doctor->name}}</td>
                        <td>{{$doctor->phone}}</td>
                        <td>{{$doctor->address}}</td>
                        <td>{{$doctor->branch->address}}</td>
                        <td>
                            <div  class="d-flex justify-content-around">
                                <a href="" class="edit-btn">Edit</a>
                                <a href="#" class="delete-btn" doctor_id = "{{$doctor->id}}">Delete</a>
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


{{--<!--Script-->--}}
{{--<script>--}}
{{--    function showPharmacyModal(event) {--}}
{{--        var pharmacyId = event.target.id;--}}
{{--            $.ajax({--}}
{{--                url: "".replace(':id', pharmacyId),--}}
{{--                method: "GET",--}}
{{--                success: function(response) {--}}
{{--                    $('#pharmacyAvatar').attr("src","{{ asset('storage/pharmacies_Images/image') }}".replace('image', response.pharmacy.avatar_image));--}}
{{--                    $('#pharmacyID').text(response.pharmacy.id);--}}
{{--                    $('#pharmacyName').text(response.pharmacy.pharmacy_name);--}}
{{--                    $('#pharmacyOwnerName').text(response.user.name);--}}
{{--                    $('#pharmacyOwnerEmail').text(response.user.email);--}}
{{--                    $('#pharmacyPriority').text(response.pharmacy.priority)--}}
{{--                    $('#pharmacyArea').text(response.areas.find(area=>area.id === response.pharmacy.area_id).name)--}}
{{--                }--}}
{{--            });--}}
{{--    }--}}
{{--</script>--}}


