@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Category Table</h4>
                    </div>


                    <div class="card-body">

                        <div class="table-responsive">
                        <div class="buttons" style="margin-left: 55rem;">
                                <a href="{{route('category.create')}}" class="btn btn-icon icon-left btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </a>
                            </div>
                           

                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Category Name</th>
                                       
                                        <th>Link</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
@foreach($categories as $category)
<tr>
    <td>{{$category->id}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->link}}</td>
    <td>
                                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Action
                                      </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{ route('category.edit',[$category->id]) }}">Edit</a>
                                           
                                            <form action="{{ route('category.destroy',[$category->id]) }}" class="mr-1" method="POST">
                                            @method('DELETE')
                            @csrf
                                            <button type="submit" class="btn btn-danger delete-btn">Delete</button>
                                        </form>  
                                       
                                         </div>
                          </td> 
</tr>
@endforeach
                                <tbody>
                         

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