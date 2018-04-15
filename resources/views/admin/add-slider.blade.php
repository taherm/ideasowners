@extends('layouts.admin')
@section('content')
<div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
        <form method="POST" action="{{url('/admin/slider')}}" enctype="multipart/form-data">
            {{ csrf_field() }}

        <div class="form-group">
            <span class="btn btn-default fileinput-button">
                <i class="glyphicon glyphicon-plus"></i>
                <span>Select Featured Image...</span>
                <!-- The file input field used as target for the file upload widget -->
                <input id="image" type="file" name="image" class="cover form-control">
            </span>
        </div>
        OR
        <br>
        <div class="form-group">
      <label for="exampleInputEmail1">Enter Youtube Title</label>
      <input type="text" class="form-control" name="url">
    </div>

        
        <div class="form-group">
            <input class="btn btn-primary form-control" type="submit">
        </div>

        </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>


                @endsection