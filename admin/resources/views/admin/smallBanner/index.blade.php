@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Small Banners Table</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">

                           

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                       
                                   
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>


                                <tbody>
                            @foreach($smallBanners as $smallBanner)
                                    <tr>
                                        <td>{{$smallBanner->id}}</td>
                                        <td> <img src="{{asset($smallBanner->image)}}" alt="" class="img-fluid" width="70" height="70"></td>
                                       
                                        
                                        <td><a href="#">{{$smallBanner->link}}</a></td>
                                        <td>
                                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('smallBanner.edit',[$smallBanner->id]) }}">Edit</a>
                                           
                                           
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