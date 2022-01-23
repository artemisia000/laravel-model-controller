
@extends('layouts.main')

@section('content')

<div class="container">
    
    <h1>Buongiorno Laravel</h1>

    <section>
        @foreach ($movies as $movie)
        <h1> {{$book->title}} </h1>
        <h2> {{$book->original_title}} </h2>
        <h3> {{$book->nationality}} </h3>
        <h3> {{$book->date}} </h3>
        <h3> {{$book->vote}} </h3>
        @endforeach
    </section>


</div>


@endsection