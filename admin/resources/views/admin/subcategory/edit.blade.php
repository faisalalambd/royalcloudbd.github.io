@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12 col-md-12 col-lg-12">

                <div class="card">

                    <div class="card-header">
                        <h4>category Form</h4>
                    </div>

<form action="{{route('subcategory.update',[$subcategory->id])}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Sub Category Name</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="Enter Sub category Name" name="categorySName" value="{{ $subcategory->categorySName }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="exampleFormControlSelect1"
                                class="col-sm-3 col-form-label"><strong>Category:</strong></label>
                            <div class="col-sm-9">
                                <select class="form-control selectric" name="categoryName">
                                    <option value="{{ $subcategory->categorySName }}" selected style="display:none">{{ $subcategory->categorySName }}</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                                    @endforeach
                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Link</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="link" value="{{ $subcategory->link }}">
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