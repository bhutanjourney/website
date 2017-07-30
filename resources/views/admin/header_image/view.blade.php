@extends('layouts.master.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-sm-10">
            <div class="panel panel-default">
                <div class="panel-heading">Header Image Managements
                <button class="btn btn-primary btn-md" style="float:right; padding: 1px;" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus">Add</span></button>
                </div>
                <div class="panel-body">
                    {{-- view header image --}}


                    {{-- add header image --}}
                    <!-- Modal -->
                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title" id="myModalLabel">Add Header Image</h4>
                          </div>
                          <div class="modal-body">
                            <form action="{{route('add_header_image')}}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="file_name">Header Image</label>
                                    </div>                      
                                    <div class="col-md-10">
                                        <input type="file" class="form-control" name="file_name" required id="file_name">
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <label for="caption">Caption</label>
                                    </div>                            
                                    <div class="col-md-10">
                                        <input type="text" class="form-control" name="caption" required id="caption">
                                    </div>                      
                                </div>
                                <div class="clearfix"></div>
                          </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok" id="save">Save</i></button>
                            <button type="button" class="btn btn-warning glyphicon glyphicon-remove" data-dismiss="modal">Close</button>
                          </div>
                        </form>
                        </div>
                      </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
