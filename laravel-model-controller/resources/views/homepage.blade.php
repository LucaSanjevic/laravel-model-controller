 @extends('layouts.default')

@section('content')
 
 @foreach($movies as $movie)
        
            <h1> {{$movie->title}}</h1>
            <h3> {{$movie->original_title}}</h3>
            <h5> {{$movie->nationality}}</h5>
            <h5> {{$movie->date}}</h5>
            <h5> {{$movie->vote}}</h5>
   
@endforeach

@endsection