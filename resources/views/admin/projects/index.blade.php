@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Projects</h2>

  @if(count($projects) > 0)
  <ul>
    @foreach ($projects as $project)
    <li>
      <h3>{{ $project->title }}</h3>
      <p>{{ $project->description }}</p>
    </li>
    @endforeach
  </ul>
  @else
  <p>Nessun Progetto</p>
  @endif
</div>
@endsection