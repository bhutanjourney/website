@extends('layouts.master.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Menu Managements
                <button class="btn btn-primary btn-md" style="float:right; padding: 1px;" data-toggle="modal" data-target="#addModal"><span class="glyphicon glyphicon-plus">Add</span></button>
                </div>
                {{-- view table --}}
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover table-responsive"id="menu">
                        <thead>
                            <tr>
                                <th>Sl.No</th>
                                <th>Title</th>
                                <th>Description</th>
                                <th>Options</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $i = 1;
                            ?>
                            @foreach($menus as $menu)
                            <tr>
                                <td>{{$i}}</td>
                                <td>{{$menu->title}}</td>
                                <td>{{$menu->description}}</td>
                                <td>
                                    <button type="button" class="edit_menu btn btn-info" data-toggle="modal" data-target="#edit_menu"><span class="glyphicon glyphicon-edit">Edit</span>
                                        <div class="hidden menu_id">{{$menu->id}}</div>
                                        <div class="hidden title">{{$menu->title}}</div>
                                        <div class="hidden description">{{$menu->description}}</div>
                                    </button>
                                    <a href="{{route('delete_menu',['id'=>$menu->id])}}" class="btn btn-danger" onclick='return confirm("Are you sure?")'><span class="glyphicon glyphicon-trash">Delete</span></a>
                                </td>
                            </tr>
                            <?php
                            $i++;
                            ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                    
                {{-- Add menu modal page --}}
            
                <!-- Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Add Menu</h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('add_menu')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label for="title">Title</label>
                                </div>                            
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" required>
                                </div>                            
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label for="description">Description</label>
                                </div>                            
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="description" required>
                                </div>                            
                            </div>
                            <div class="clearfix"></div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok">Save</i></button>
                        <button type="button" class="btn btn-warning glyphicon glyphicon-remove" data-dismiss="modal">Close</button>
                      </div>
                    </form>
                    </div>
                  </div>
                </div>
            </div>
            {{-- Edit modal page --}}
            <div class="modal fade" id="edit_menu" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Menu</h4>
                      </div>
                      <div class="modal-body">
                        <form action="{{route('edit_menu')}}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label for="title">Title</label>
                                </div>                            
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="title" required value="{{$menu->title}}">
                                </div>                            
                            </div>
                            <br>
                            <br>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <label for="description">Description</label>
                                </div>                            
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="description" required value="{{$menu->description}}">
                                </div>                            
                            </div>
                            <input type="hidden" name="menu_id">

                            <div class="clearfix"></div>
                      </div>
                      <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="glyphicon glyphicon-ok">Save</i></button>
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
<script>
    $(document).ready(function() {
        $('#menu').DataTable();
        $('.edit_menu').click(function(){
          title = $(this).find(".title").html();
          description = $(this).find(".description").html();
          id = $(this).find(".menu_id").html();

          $('#edit_menu input[name=title]').val(title);

          $('#edit_menu input[name=description]').val(description);
          $('#edit_menu input[name=menu_id]').val(id).prop('disabled',false);
      });

    } );
</script>
@endsection
