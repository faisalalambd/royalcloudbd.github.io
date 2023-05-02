@extends('layouts.admin')
@section('content')
<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Orders Table</h4>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <div class="buttons" style="margin-left: 55rem;">
                                <a href="{{ route('gallery.create') }}" class="btn btn-icon icon-left btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </a>
                            </div>


                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>Order ID</th>
                                        <th>Customer Name</th>
                                        <th>Customer Email</th>
                                        <th>Customer Phone</th>
                                        <th>Customer Address</th>
                                        <th>Product Name</th>
                                       
                                        <th>Product Price</th>
                                        <th>Product Quantity</th>
                                        <th>Total Price</th>
                                    
                                    </tr>

                                </thead>


                                <tbody>
                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->c_name }}</td>
                                        <td>{{ $order->c_mail }}</td>
                                        <td>{{ $order->c_phone }}</td>
                                        <td>{{ $order->c_address }}</td>
                                        <td>{{ $order->p_name }}</td>
                                        <td>{{ $order->p_price }}</td>
                                        <td>{{ $order->quantity }}</td>
                                        <td>{{ $order->total_price }}</td>
                                       
                                       
                                    </tr>
                    @endforeach
                                   

                                </tbody>

                            </table>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



@endsection