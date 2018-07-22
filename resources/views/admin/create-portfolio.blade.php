@extends('layouts.admin')
@section('content')   
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
    <form method="POST" action="{{url('/admin/add-portfolio')}}"  enctype="multipart/form-data">
                {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea rows="2" cols="128" name="description" id="editor" ></textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tag</label>
      <select name="tag" class="form-control">
      <option value="feasibility">Feasibility Study</option>
                
                <option value="logos">Logos</option>
                <option value="websites">Websites</option>
                <option value="video">Videos</option>
                <option value="app">Apps</option>
                <option value="graphic">Graphic Design</option>
            </select></div>
   

            

<div class="form-group">
      <label for="exampleInputEmail1">URL</label>
      <input type="text" class="form-control" name="weblink"  >
    </div>
                

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
                </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
                @include('layouts.errors')
@endsection