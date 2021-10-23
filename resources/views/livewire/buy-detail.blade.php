<div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <legend>Order list</legend>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Item Image</th>
                                    <th scope="col">Item Name</th>
                                    <th scope="col">Item Price</th>
                                    <th>Item Count</th>
                                    <th scope="col">Order By</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($buydetail as $detail)
                                <tr>
                                    <th>
                                        <img src="{{ asset('storage/'.$detail->p_img) }}" style="margin-left:20px" width="50" height="50">
                                    </th>
                                    <td>{{ $detail->p_name }}</td>
                                    <td>{{ $detail->p_price }}$</td>
                                    <td>{{ $detail->p_count }}</td>
                                    <td>{{ $detail->user_name }}</td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="card-flooter">

                    </div>
                </div>
            
            </div>
        </div>
    </div>
</div>

<style>
    .container {
        margin-top: 40px;
    }

</style>
