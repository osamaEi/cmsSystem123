<x-admin-master>

    @section('content')
    
    
    
    
    
     <div class="col-sm-3">
        
            <form method="post" action="{{route('permissions.store')}}">
            
                @csrf
                
                
                <div class="form-group">
                
                    <label for="name">Name</label>
                    
                    <input name="name" type="text" id="name" class="form-control">
                
                
                </div>
            
                <button class="btn btn-primary btn-block " type="submit">Create</button>
            
            
            
            
            </form>
        
        
        
        
        
        
        
        
        </div>
    
            <div class="col-sm-9">
        
        
        
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Delete</th>
               

                    </tr>
                  </thead>
                  <tfoot>
                  <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Delete</th>
                    
                    </tr>
                  </tfoot>
                  <tbody>
                     
                      @foreach($permissions as $permission) 
                      
                      <tr>
                      
                      
                          <td>{{$permission->id}}</td>
                          
    <td><a href="{{route('permissions.edit',$permission->id)}}">{{$permission->name}}</a></td>
                          <td>{{$permission->slug}}</td>
                      
                          <td>
                                              
 <form class="" method="post" action="{{route('permissions.destroy_permission',$permission->id)}}"> 
     
                                @csrf
                                @method('DELETE')  
     
       <button class="btn btn-danger" type="submit">Delete</button>
                                  
                           </form>
                          
                          
                          
                          
                          </td>
                          
                          
                          
                          
                      
                      
                      @endforeach
                      
                      
                      
                      
                      
                      
                      
                      
                      
                      </tr>
                      
                      
                      
               
       </tbody>
            </table>
        
        
        
        </div>
    
    
    
    @endsection




</x-admin-master>