<h1>Create Project</h1>

<form method="POST" action="{{ route('projects.store') }}">
    @csrf

    <label>Name</label>
    <br>
    <input type="text" name="name" placeholder="Project Name">

    <br><br>

    <label>Description</label>
    <br>
    <textarea name="description" placeholder="Project Description"></textarea>

    <br><br>

    <button type="submit">Save Project</button>
</form>