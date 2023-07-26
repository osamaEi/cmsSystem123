<x-home-master>



@section('content')

        <!-- Title -->
        <h1 class="mt-4">{{$post->title}}</h1>

        <!-- Author -->
        <p class="lead">
          by
          <a href="#"></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p>Posted on {{$post->created_at->diffForHumans()}}</p>

        <hr>

        <!-- Preview Image -->
        <img class="img-fluid rounded" src="{{$post->post_image}}" alt="">

      
        <!-- Post Content -->
        <p class="lead">{{$post->body}}</p>

    

       

      
        <form action="{{ route('payment') }}" method="post">
    @csrf
    <input type="hidden" name="amount" value="200"> <!-- Use 'value' attribute instead of 'id' -->
    <button type="submit" class="btn btn-primary">Pay With PayPal</button>
</form>

   

     
    
     
    
    

    @endsection

</x-home-master>