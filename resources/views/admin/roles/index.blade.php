<x-admin-master>
    
    
    

    @section('content')
    
 
           @if(session()->has('role-deleted'))
        
        <div class="alert alert-danger">
            
            {{session('role-deleted')}}
        
        </div>
        
        @endif
        
    
    <div class="row">
    
 
        
        
    
        <div class="col-sm-3">
        
            <form method="post" action="{{route('roles.store')}}">
            
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
                     
                      @foreach($roles as $role) 
                      
                      <tr>
                      
                      
                          <td>{{$role->id}}</td>
                          
                          <td><a href="{{route('roles.edit',$role->id)}}">{{$role->name}}</a></td>
                          <td>{{$role->slug}}</td>
                      
                          <td>
                          
                          
           
   <form class="" method="post" action="{{route('roles.destroy',$role->id)}}"> 
                              
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
    
    
    
    
    
    </div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    @endsection




</x-admin-master>