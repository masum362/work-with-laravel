<x-layout>

    @if($greetings==='hello')
    <p>{{$greetings}}</p>
    @endif
 
    
    
     <br>
    @foreach ($testUsers as $user)
    <p>{{$user['username']}}</p>
    <a href="/test/{{$user['id']}}">
    view Details
     </a>
   
    @endforeach
 

</x-layout>