<x-admin-master>

    
    @section('content')

    
    @if(auth()->user()->userHasRole('Admin'))
    
    
    <h1 class="h3 mb-4 text-gray-800">blank</h1>

    @endif
    
    
    
    
    @endsection


</x-admin-master>