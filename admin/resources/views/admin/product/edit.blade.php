@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Products Form</h4>
                    </div>

<form action="{{route('product.update',[$product->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="formFile" class="col-sm-3 col-form-label">
                                <strong>Upload a product image:</strong>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="formFile" name="image" value="{{$product->image}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Name:</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Product Name" name="name" value="{{$product->name}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Price:</strong></label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        BDT
                                    </div>
                                    <input type="text" class="form-control currency" placeholder="Product Price" name="price" value="{{$product->price}}">
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong> Offer Price:</strong></label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        BDT
                                    </div>
                                    <input type="text" class="form-control currency" placeholder="Product Price" name="offer_price" value="{{$product->offer_price}}">
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>SKU:</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="sku" value="{{$product->sku}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="exampleFormControlSelect1"
                                class="col-sm-3 col-form-label"><strong>Category:</strong></label>
                            <div class="col-sm-9">
                                <select class="form-control selectric" name="category">
                                    <option selected>Choose...</option>
                                    @foreach($categories as $category)
                                    <option>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1"
                                class="col-sm-3 col-form-label"><strong>Sub Category:</strong></label>
                            <div class="col-sm-9">
                                <select class="form-control selectric" name="subcategory">
                                    <option selected>Choose...</option>
                                    @foreach($subcategories as $subcategory)
                                    <option>{{ $subcategory->categorySName }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Description:</strong></label>
                            <div class="col-sm-9">
                                <textarea class="summernote"name="description" value="{{$product->description}}">{{$product->description}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Trending</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="trending" value="{{$product->trending}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Best Seller:</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="bestseller" value="{{$product->bestseller}}">
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    </div>
             </form>

                   

                </div>

            </div>

        </div>

    </div>

</section>




@endsection