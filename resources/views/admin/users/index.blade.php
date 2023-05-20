<x-admin-master>

 @section('content')
    
    
    
    <h1>All Users</h1>
    
      @if(Session::has('message'))
    
    <div class="alert alert-danger"> {{session('message')}}</div>
   
    
    @endif
    
    
    
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                      <th>Id</th>
                      <th>Name</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Image</th>
              
                         <th>Delete</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                     <th>Id</th>
                      <th>Name</th>
                      <th>User Name</th>
                      <th>Email</th>
                      <th>Image</th>
                    
                      <th>Delete</th>
                     
                    </tr>
                  </tfoot>
               <tbody>
                      @foreach($users as $user)
                    <tr>
                      <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                      <td><a href="users/{{$user->id}}/profile">{{$user->username}}</a></td>
                      <td>{{$user->email}}</td>
                      <td><img height="40px" src=""></td>
               
                        <td>
                            <form method="post" action="{{route('user.destroy',$user->id)}}" enctype="multipart/form-data">
                           {{csrf_field()}}
                              @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                            </form>
                        
                        
                        </td>
                 
                    </tr>
                      
                      @endforeach
     
                  </tbody>
    </table>
    @endsection






</x-admin-master>