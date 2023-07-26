<x-home-master>



@section('content')

       
    

       <form action="{{route('payment')}}" method="post">

@csrf 



       </form>

   

     
    
    

    @endsection

</x-home-master>