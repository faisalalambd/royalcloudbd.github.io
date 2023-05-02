@extends('layouts.admin')
@section('content')

<section class="section">

  <div class="section-body">

    <div class="row">

      <div class="col-12 col-md-12 col-lg-12">

        <div class="card">

          <div class="card-header">
            <h4>Sliders Form</h4>
          </div>

<form action="{{ route( 'gallery.update',[$gallery->id] )}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
          <div class="card-body">

            <div class="form-group row">
              <label for="formFile" class="col-sm-3 col-form-label">
                <strong>Upload a slider image:</strong>
              </label>
              <div class="col-sm-9">
                <input class="form-control" type="file" id="formFile" name="image" value="{{$gallery->image}}">
              </div>
            </div>

            
            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Link</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="link" value="{{$gallery->link}}">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Banner</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="banner" value="{{$gallery->banner}}">
                            </div>
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

</section>


@endsection