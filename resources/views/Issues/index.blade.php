<h1>PROJECTS & ISSUES</h1>

<!-- ================= PROJECTS ================= -->
<h2>PROJECTS</h2>

@foreach($projects as $project)
    <div style="border:1px solid #ccc; padding:10px; margin-bottom:10px; background:#f9f9f9;">
        <h3>{{ $project->name }}</h3>
        <p>{{ $project->description }}</p>
    </div>
@endforeach

<hr>

<!-- ================= ISSUES ================= -->
<h2>ISSUES</h2>

<a href="{{ route('issues.create') }}">+ Create Issue</a>

<hr>

@foreach($issues as $issue)

<div style="border:1px solid #ccc; padding:15px; margin-bottom:15px; border-radius:5px;">

    <!-- Title -->
    <h3>{{ $issue->title }}</h3>

    <!-- Project -->
    <p>
        <strong>Project:</strong>
        {{ $issue->project->name ?? 'No Project' }}
    </p>

    <!-- Description -->
    <p>
        <strong>Description:</strong>
        {{ $issue->description }}
    </p>

    <!-- Status -->
    <p>
        <strong>Status:</strong>
        {{ $issue->status }}
    </p>

    <!-- Tags -->
    <p>
        <strong>Tags:</strong><br>

        @foreach($issue->tags as $tag)
            <span style="display:inline-block; background:#007bff; color:white; padding:3px 8px; border-radius:5px; margin-right:5px;">
                {{ $tag->name }}
            </span>
        @endforeach
    </p>

    <!-- Actions -->
    <a href="{{ route('issues.edit', $issue->id) }}" style="color:blue;">
        Edit
    </a>

    <form method="POST" action="{{ route('issues.destroy', $issue->id) }}" style="display:inline;">
        @csrf
        @method('DELETE')

        <button onclick="return confirm('Delete this issue?')" style="color:red;">
            Delete
        </button>
    </form>

</div>

@endforeach