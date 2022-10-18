@extends('layout')

@section('content')
    @foreach(Statamic::tag('collection:news')->limit(3) as $entry)
        <p><a href="{{ $entry->url }}">{{ $entry->title }}</a></p>
    @endforeach
@stop
