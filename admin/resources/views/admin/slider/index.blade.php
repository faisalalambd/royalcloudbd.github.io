@extends('layouts.admin')
@section('content')

<section class="section">

    <div class="section-body">

        <div class="row">

            <div class="col-12">

                <div class="card">

                    <div class="card-header">
                        <h4>Sliders Table</h4>
                    </div>

                    <div class="card-body">

                        <div class="table-responsive">

                            <div class="buttons" style="margin-left: 55rem;">
                                <a href="{{ route('slider.create') }}" class="btn btn-icon icon-left btn-primary">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </a>
                            </div>


                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">

                                <thead>

                                    <tr>
                                        <th>ID</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>


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