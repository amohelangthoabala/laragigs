@extends('layout')

@section('content')
    @unless(count($listings) == 0)

    @foreach($listings as $listing)
    <h2>
        <a href="/listings/{{ $listing['id'] }}"> $listing['title'] }} </a>
    </h2>
    @endforeach

    @else
        <p>No listings found</p>
    @endunless
@endsection

