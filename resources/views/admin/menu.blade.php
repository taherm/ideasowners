@extends('layouts.admin')
@section('content')      
                    <div class="col-md-7 main">
        <div class=" content-top-1">
                <h1>Menus</h1>
    <hr>
    <div class="panel-body" style="padding: 0;">
        <table class="table table-striped custom-table">
            <thead>
            <tr>
                <th>Menu</th>
                
                
                <th class="text-center">Action</th>
            </tr>
            </thead>
            @foreach($cat as $item)
                            <tr>
                    <td>{{ $item->title }}</td>
                    
                    
                    <td class="text-center">
                        <a class='btn btn-info btn-xs' href="{{ url('admin/'.$item->id.'/edit_menu')}}">
                            <span class="glyphicon glyphicon-edit"></span>
                            Edit
                        </a>
                        </td>

                     <td> 
                       <form class="delete" method="POST" action="{{url('/admin/delete-menu/'.$item->id)}}">
										{{ csrf_field() }}
										<input name="_method" value="delete" type="hidden">
										<button class="btn btn-danger" type="submit">Delete</button>
									</form>
                    
                    </td>
                </tr>
@endforeach
                            
                    </table>
        


    </div>

        </div>
    </div>
    <div class="col-md-5 main">
        <div class="content-top-1">
            
    <div>
        <h1>Add Menu</h1>
        <hr>

        <form method="POST" action="{{url('/main-menu')}}">
        {{ csrf_field() }}
        <div class="form-group">
    <label for="companyName">Name</label>
    <input class="form-control" placeholder="Name (English)" name="title" type="text">
</div>


<span class="form-g"></span>

<div class="form-group">
    <button type="submit" class="btn btn-success" style="width: 100%">Save</button>
</div>
        </form>
    </div>



        </div>
    </div>

                <div class="clearfix"> </div>
                @include('layouts.errors')
            @endsection