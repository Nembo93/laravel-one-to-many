@extends('layouts.admin');

@section('content')
<div class="container">
  <div class="py-4">
    <h1>{{$project->title}}</h1>
    <div>
      @if ($project->cover_image)
      <img class="w-25" src="{{ asset("storage/$project->cover_image") }}" alt="{{$project->title}}">   
      @endif
    </div>
    <div class="mt-4">
        {{$project->description}}
    </div>
    <h2>Customer: {{$project->customer}}</h2>
  </div>
</div>
@endsection