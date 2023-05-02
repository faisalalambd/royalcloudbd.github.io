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

<form action="{{ route( 'gallery.store' )}}" method="post" enctype="multipart/form-data">
    @csrf
          <div class="card-body">

            <div class="form-group row">
              <label for="formFile" class="col-sm-3 col-form-label">
                <strong>Upload a slider image:</strong>
              </label>
              <div class="col-sm-9">
                <input class="form-control" type="file" id="formFile" name="image">
              </div>
            </div>

            
            <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Link</strong></label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" placeholder="ZG011AQA" name="link">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label"><strong>Banner</strong></label>
                            <div class="col-sm-9">
                            <input type="checkbox" id="vehicle1" name="banner" value="yes">
                            <label for="vehicle1">Banner </label><br>
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