@extends('layout')

@section('content')

<!-- HEADER + STATS -->
<div class="d-flex justify-content-between align-items-center mb-3">

    <h2>Projects</h2>

    <a href="{{ route('projects.create') }}" class="btn btn-success">
        + Create Project
    </a>

</div>

<div class="alert alert-info py-2">
    Total Projects: {{ $projects->count() }}
</div>

<!-- PROJECT LIST -->
<div class="row">

@foreach($projects as $project)

<div class="col-md-4 mb-3">

    <div class="card shadow-sm h-100">

        <div class="card-body">

            <h5 class="card-title">{{ $project->name }}</h5>

            <p class="card-text">
                {{ $project->description }}
            </p>

            <!-- DELETE BUTTON -->
            <form method="POST" action="{{ route('projects.destroy', $project->id) }}">
                @csrf
                @method('DELETE')

                <button class="btn btn-danger btn-sm mt-2"
                        onclick="return confirm('Are you sure you want to delete this project?')">
                    Delete
                </button>
            </form>

        </div>

    </div>

</div>

@endforeach

</div>

@endsection