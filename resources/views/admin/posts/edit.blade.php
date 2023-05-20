<x-admin-master>

@section('content')
    
    
    <h1>Edit A Post</h1>
    
    <form method="post" action="{{route('post.update',$post->id)}}" enctype="multipart/form-data">
        {{csrf_field()}}
        @method('PATCH')
   

        <div class="form-group">
            <label for="title">Title</label>
        <input type="text" 
               name="title" 
               class="form-control" 
               id="title"
               aria-describedby="" 
               placeholder="Enter title"
               value="{{$post->title}}">
        
        
        </div>
    
        <div class="form-group">
        
            <label for="file">File</label>
        
            
            <div><img height="100px" src="http://localhost/new-cms-system/storage/app/public/{{$post->post_image}}"></div>
            
            
            
            <input type="file"
                   name="post_image" 
                   class="form-control-files" 
                   id="post_image">
        </div> 
        
        
        <div class="form-group">
        
            <textarea name="body"
                      class="form-control" 
                      id="body"
                      cols="30"
                      rows="10"
                      value="">{{$post->body}}
            </textarea>
        
        
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    
    
    
    
    </form>
    
    @endsection


</x-admin-master>