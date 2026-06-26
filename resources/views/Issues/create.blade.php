<h1>Create Project</h1>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf

    <label>Project Name</label><br>
    <input type="text" name="name">

    <br><br>

    <label>Description</label><br>
    <textarea name="description"></textarea>

    <br><br>

    <button type="submit">Save Project</button>
</form>