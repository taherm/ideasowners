@extends('layouts.admin')
@section('content')   
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div class="mTop10">
    <form method="POST" action="{{url('/admin')}}"  enctype="multipart/form-data">
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
        <label for="exampleInputFile">Icon</label>
        <input type="file" name="icon" >
    </div>
    <b>Add to Menu</b>
          <select name="submenu" class="form-control">
                <option value="None">None</option>
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

            


                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" name="menu">
                    <label class="form-check-label" for="exampleCheck1">Main Menu</label>
                  </div>

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>
                </form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
@endsection