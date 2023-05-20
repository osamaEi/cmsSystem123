<x-admin-master>


    @section('content')

    <h3>Edit Permission for {{$permission->name}}</h3>
    
  <form method="post" action="{{route('permissions.update_permission',$permission->id)}}">
            
                @csrf
                @method('PUT')
                
                
                <div class="form-group">
                
                    <label for="name">Name</label>
                    
 <input name="name" type="text" id="name" class="form-control" value="{{$permission->name}}">
                
                
                </div>
            
                <button class="btn btn-primary btn-block " type="submit">Update</button>
            
            
            
            
            </form>
    
    
    @endsection






</x-admin-master>