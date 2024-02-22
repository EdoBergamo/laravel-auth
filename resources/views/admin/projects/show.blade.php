@extends('layouts.app')

@section('content')
<div class="container">
  <h2>Dettagli Progetto</h2>

  <div>
    <h3>{{ $project->name }}</h3>
    <p>{{ $project->description }}</p>
    <p>Creato il <b>{{ $project->created_at->format('d M Y H:i:s') }}</b></p>
    <p>Aggiornato <b>{{ Carbon\Carbon::parse($project->updated_at)->diffForHumans() }}</b></p>
  </div>

  <div>
  </div>
</div>
@endsection