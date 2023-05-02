@extends('layouts.admin')
@section('content')

<section class="section">

  <div class="section-body">

    <div class="row">

      <div class="col-12 col-md-12 col-lg-12">

        <div class="card">

          <div class="card-header">
            <h4>Brand Image</h4>
          </div>

<form action="{{ route( 'brand.store' )}}" method="post" enctype="multipart/form-data">
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