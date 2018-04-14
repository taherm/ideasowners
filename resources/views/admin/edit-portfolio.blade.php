@extends('layouts.admin')
  @section('content') 
                    <div class="col-md-12 main">
        <div class="content-top-1">
            
    <div id="mytoolbar"></div>
    <div class="mTop10">
    <form method="POST" action="/admin/portfolio-edit/{{$serv->id}}">
    {{ csrf_field() }}
    <br>
    <div class="form-group">
      <label for="exampleInputEmail1">Title</label>
      <input type="text" class="form-control" name="title" value="{{$serv->title}}"  >
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Description</label>
    <textarea name="description" id="editor" style="visibility:visible" placeholder="{{$serv->description}}">{{$serv->description}}</textarea>  
    </div>
    <div class="form-group">
        <label for="exampleInputFile">Image</label>
        <input type="file" name="image" value="{{$serv->image}}" >
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Tag</label>
      <select name="tag" class="form-control">
                <option value="None">None</option>
                <option value="logos">Logos</option>
                <option value="websites">Websites</option>
                <option value="videos">Videos</option>
                <option value="apps">Apps</option>
                <option value="graphic">Graphic Design</option>
            </select></div>
    <b>Add to Menu</b>
          <select name="menu" class="form-control">
                <option value="None">None</option>
                @foreach($cate as $item)
               
                    <option value="{{$item->title}}">{{ $item->title }}</option>
                   
                    @endforeach
               
            </select>

   <div>
    <button type="submit" class="btn btn-primary">Submit</button>
   </div>  
</form>

    </div>

        </div>
    </div>

                <div class="clearfix"> </div>
@endsection