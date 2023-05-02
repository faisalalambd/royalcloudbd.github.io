@extends('layouts.admin')
@section('content')
<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Products Table</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                            <div class="buttons" style="margin-left: 55rem;">
                                <a href="{{route('product.create')}}" class="btn btn-icon icon-left btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </a>
                            </div>


                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>SKU</th>
                                        <th>Category</th>
                                        <th>Offer Price</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>


                                <tbody>
@foreach($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td> <img src="{{asset($product->image)}}" alt="" class="img-fluid" width="70" height="70"></td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->price }}</td>
                                        <td>{{ $product->sku }}</td>
                                        <td>{{ $product->category }}</td>
                                        <td>{{ $product->offer_price }}</td>
                                        <td>{!! $product->description !!}</td>
                                        <td>
                                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('product.edit',[$product->id]) }}">Edit</a>
                                           
                                            <form action="{{ route('product.destroy',[$product->id]) }}" class="mr-1" method="POST">
                                            @method('DELETE')
                            @csrf
                                            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                                        </form>  
                                       
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

        </div>

    </div>

</section>




@endsection