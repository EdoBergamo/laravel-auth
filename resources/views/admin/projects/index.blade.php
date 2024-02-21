@extends('layouts.app')

@section('content')
<div class="container">
  <h2 class="my-4">Elenco Progetti</h2>

  @if(count($projects) > 0)
  <div class="row">
    @foreach($projects as $project)
    <div class="col-md-4 mb-4">
      <div class="card">
        <div class="card-body">
          <div class="d-flex align-items-center">
            <img src="{{ $project->owner_avatar_url }}" class="card-img-top rounded-circle" style="width: 40px; height: 40px; margin-right: 10px;" alt="">
            <a href="https://github.com/EdoBergamo" class="text-black text-decoration-none" target="_blank">
              <h5 class="card-title" style="font-size: 16px;">EdoBergamo</h5>
            </a>
          </div>
          <div class="card-body">
            <a href="{{ $project->html_url }}" class="text-decoration-none" target="_blank">
              <h5 class="card-text">{{ $project->name }}</h5>
            </a>
            @if($project->description)
            <p>{{ $project->description }}</p>
            @endif

            <p>Updated {{ Carbon\Carbon::parse($project->created_at)->diffForHumans()}}</p>
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  @else
  <p class="alert alert-info">Nessun progetto disponibile.</p>
  @endif
</div>
@endsection