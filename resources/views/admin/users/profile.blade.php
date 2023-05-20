<x-admin-master>

    
    @section('content')
    
    
    <h1>User Profile  {{$user->name}}</h1>
    
    <div class="col-sm-6">
    
        <form method="post" action="{{route('user.profile.update',$user->id)}}" enctype="multipart/form-data">
        
            @csrf
            @method('PUT')
            <div class="mb-2">
            
            
                <img width=80 class="img-profile rounded-circle" src="http://localhost/new-cms-system/storage/app/public/{{$user->avatar}}">
            
            </div>
            
            
            <div class="form-group">
            
                <input type="file" name="avatar">
            
                
            </div>
            
            
            
            
            
            <div class="form-group">
            
                <label for="username">Username</label>
            
                <input type="text"
                       name="username"
                       class="form-control 
                              @error('username') is-invalid @enderror"
                       
                       id="username" 
                       aria-describedby="" 
                       placeholder="{{$user->username}}">
            
            
            </div>
            
                    
            <div class="form-group">
            
                <label for="name">Name</label>
            
                <input type="text"
                       name="name"
                       class="form-control 
                              @error('name') is-invalid @enderror"
                       id="name" 
                       aria-describedby="" 
                       placeholder="{{$user->name}}">
            
           
            </div>
        
        
        
         <div class="form-group">
            
                <label for="">Email</label>
            
                <input type="text"
                       name="email" 
                        class="form-control 
                              @error('email') is-invalid @enderror"
                       id="email" 
                       aria-describedby="" 
                       placeholder="{{$user->email}}">
            
             
            </div>
        
              <div class="form-group">
            
                <label for="password">Password</label>
            
                <input type="password"
                       name="password" 
                         class="form-control 
                              @error('password') is-invalid @enderror"
                       id="password" 
                       aria-describedby="" 
                       placeholder="">
            
               
            </div>
            
                  <div class="form-group">
            
                <label for="password-confirm">Confirm Password</label>
            
                <input type="password"
                       name="password_confirmation" 
                       class="form-control 
                              @error('password_confirmation') is-invalid @enderror"
                       id="password" 
                       aria-describedby="" 
                       placeholder="">
            
               
            </div>
        
            <button type="submit" class="btn btn-primary">Submit</button>
            
            
        
        
        
        </form>
    
    
    
    
    
    
    
    
    
    </div>
    
    <div class="row">
    
    <div class="col-sm-12">
    
    
     <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                  <th>options</th>
                     <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Attach</th>
                      <th>Detach</th>
                    
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                   <th>options</th>
                     <th>Id</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th>Attach</th>
                      <th>Detach</th>
                    
                     
                    </tr>
                  </tfoot>
               <tbody>
                      @foreach($roles as $role)
                    <tr>
                        <td><input type="checkbox"
                                   
                                   @foreach($user->roles as $user_role)
                                   
                            @if($user_role->slug == $role->slug)
                            
                            checked
                            
                             @endif                                   
                                   
                                   @endforeach
                                  
                                   
                                   
                                   
                                   
                                   
                                   ></td>
                        <td>{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->slug}}</td>
                        
                        
                        <td>
                            
                        
                            <form method="post" action="{{route('user.role.attach',$user)}}">
                                   @method('PUT')
                                   @csrf
                                
                             <input type="hidden" name="role" value="{{$role->id}}">
                            <button type="submit" 
                                    class="btn btn-primary"
                                    
                                           @if($user->roles->contains($role))  
                                           
                                           disabled
                                           
                                           @endif
                                           
                                    
                                    
                                    
                                    >Attach</button>
                            </form>
                        
                        </td>
                              
                        <td>
                            
                        
                            <form method="post" action="{{route('user.role.detach',$user)}}">
                                   @method('PUT')
                                   @csrf
                                
                                <input type="hidden" name="role" value="{{$role->id}}">
                            <button type="submit" class="btn btn-danger"
                                    
                                    
                                           @if(!$user->roles->contains($role))  
                                           
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
    
    
    
    
    
    @endsection




</x-admin-master>