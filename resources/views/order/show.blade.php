<div class="row d-flex justify-content-center">
    <div class="col-12">
        <div class="card">
            <div class="card-body table-responsive p-0">
                <table class="show-table">
                    <thead>
                    <tr>
                        <th class="">ID</th>
                        <th class="">Customer Name</th>
                        <th class="">Customer Phone</th>
                        <th class="">Order Price</th>
                        <th class="">Order Date</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($orders as $order)
                    <tr>
                        <td>{{$order->id}}</td>
                        <td>{{$order->customer->name}}</td>
                        <td>{{$order->customer->phone}}</td>
                        <td>{{$order->total_price}}</td>
                        <td>{{$order->order_date}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

