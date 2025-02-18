<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masum Testing | test page</title>
</head>
<body>
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

    
</body>
</html>