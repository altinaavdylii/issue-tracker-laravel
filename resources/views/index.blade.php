@extends('layout')

@section('content')

<h2 class="mb-3">Projects</h2>

<div class="row">

@foreach($projects as $project)

<div class="col-md-4 mb-3">

    <div class="card shadow">

        <div class="card-body">

            <h5>{{ $project->name }}</h5>

            <p>{{ $project->description }}</p>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection