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

<form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
    @csrf
                    <div class="card-body">

                        <div class="form-group row">
                            <label for="formFile" class="col-sm-3 col-form-label">
                                <strong>Upload a product image:</strong>
                            </label>
                            <div class="col-sm-9">
                                <input class="form-control" type="file" id="formFile" name="image">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Name:</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Product Name" name="name">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Price:</strong></label>
                            <div class="col-sm-9">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        BDT
                                    </div>
                                    <input type="text" class="form-control currency" placeholder="Product Price" name="price">
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
                                    <input type="text" class="form-control currency" placeholder="Product Price" name="offer_price">
                                </div>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>SKU:</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="sku">
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
                                <textarea class="summernote"name="description"></textarea>
                            </div>
                        </div>

                      

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Add TO Tranding </strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="trending">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Add TO Best Seller Product </strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="bestseller">
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