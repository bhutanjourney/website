@extends('layouts.master.master')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="panel panel-default">
                <div class="panel-heading">Change Your Password
                <button class="btn btn-success" style="float:right; padding: 1px;" id="add_menu">Add</button>
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered table-hover table-responsive"id="menu">
                        <thead>
                            <tr>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                                <th>1</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                                <td>1</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $('#menu').DataTable();
        $('#add_menu').click(function(){
            alert('You clicked me');
        });

    } );
</script>
@endsection
