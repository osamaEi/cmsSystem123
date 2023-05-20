<x-admin-master>


    @section('content')
    
    
    <h3>EDIT page {{$role->name}} </h3>
    
    <div class="row">
        <div class="col-sm-6">
    <form method="post" action="{{route('roles.update',$role->id)}}">
    
    @csrf
        @method('PUT')
        
        
        <div class="form-group">
        
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name" value="{{$role->name}}">
        
        </div>
    
        
        
        <button class="btn btn-primary">Update</button>
        
     
    </form>
        </div></div>
    
    

    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
              <tr>
                      <th>option</th>
                      <th>Id</th>
                     <th>name</th>
                     <th>slug</th>
                    <th>Delete</th>
                      <th>Attach</th>
                    <th>Detach</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                        <th>option</th>
                      <th>Id</th>
                     <th>name</th>
                     <th>slug</th>
                    <th>Delete</th>
                    <th>Attach</th>
                    <th>Detach</th>
                     
                    </tr>
                  </tfoot>
       
       
       
     
       
                  <tbody>
                      
                      
                    
                          @foreach($permissions as $permission)
                      <tr>
                      
                          <td>
                              
                           
                              <input type="checkbox"
                       
                              @foreach($role->permission as $role_permission)
       
                              @if($role_permission->slug == $permission->slug)
                              checked
                              @endif
                            @endforeach
                             
                       >
                              
                          </td>
                          <td>{{$permission->id}}</td>
                          <td>{{$permission->name}}</td>
                          <td>{{$permission->slug}}</td>
                      
                          <td><button type="submit" class="btn btn-danger">Delete</button></td>
                        <td>
                            
                        
                            <form method="post" action="{{route('role.permission.attach',$role)}}">
                                   @method('PUT')
                                   @csrf
                                
                             <input type="hidden" name="permission" value="{{$permission->id}}">
                            <button type="submit" 
                                    class="btn btn-primary"
                                    
                                           @if($role->permission->contains($permission))  
                                           
                                           disabled
                                           
                                           @endif
                                           
                                    
                                    
                                    
                                    >Attach</button>
                            </form>
                        
                        </td>
                              
                        <td>
                            
                        
                            <form method="post" action="{{route('role.permission.detach',$role)}}">
                                   @method('PUT')
                                   @csrf
                                
                                <input type="hidden" name="permission" value="{{$permission->id}}">
                            <button type="submit" class="btn btn-danger"
                                    
                                    
                                           @if(!$role->permission->contains($permission))  
                                           
                                           disabled
                                           
                                           @endif
                                    
                                    
                                    >Detach</button>
                            </form>
                        
                        </td>
                          
                      
                      
                      </tr>
                      
                      
                      
                      @endforeach
                      
                      
                      
                      
       </tbody>
    
    </table>
    </div>
        </div>
    </div>
    

    
    
    
    

    @endsection
    
    



</x-admin-master>