<x-admin-master>

    
    @section('content')

    <h1 class="h3 mb-4 text-gray-800">view all posts</h1>
    
    @if(Session::has('message'))
    
    <div class="alert alert-danger"> {{session('message')}}</div>
   
    
    @endif
    
    
    
    
   <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr>
                      <th>Id</th>
                      <th>owner</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Image</th>
                      <th>Create At</th>
                      <th>Update At</th>
                         <th>Delete</th>
                     
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Id</th>
                     <th>Owner</th>
                      <th>Title</th>
                      <th>Body</th>
                      <th>Image</th>
                      <th>Create At</th>
                      <th>Update At</th>
                      <th>Delete</th>
                     
                    </tr>
                  </tfoot>
                  <tbody>
                      @foreach($posts as $post)
                    <tr>
                      <td>{{$post->id}}</td>
                        <td>{{$post->user->name}}</td>
                      <td><a href="{{route('post.edit',$post->id)}}">{{$post->title}}</a></td>
                      <td>{{$post->body}}</td>
                      <td><img height="40px" src="http://localhost/new-cms-system/storage/app/public/{{$post->post_image}}"></td>
                      <td>{{$post->created_at->diffForHumans()}}</td>
                      <td>{{$post->updated_at->diffForHumans()}}</td>
                        <td>
                            <form method="post" action="{{route('post.destroy', $post->id)}}" enctype="multipart/form-data">
                           {{csrf_field()}}
                              @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                            </form>
                        
                        
                        </td>
                 
                    </tr>
                      
                      @endforeach
     
                  </tbody>
                </table>
    
    
    {{$posts->links()}}
    
    @endsection

    @section('scripts')
    
  <!-- Page level plugins -->
  <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>

  <!-- Page level custom scripts -->
 

    
    @endsection
    
    

</x-admin-master>