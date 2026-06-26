<!DOCTYPE html>
<html>
<head>
    <title>Issue Tracker</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-dark bg-dark px-3">
    <a class="navbar-brand" href="#">Issue Tracker</a>
    <div>
        <a href="/projects" class="btn btn-light btn-sm">Projects</a>
        <a href="/issues" class="btn btn-warning btn-sm">Issues</a>
    </div>
</nav>

<div class="container mt-4">

    @yield('content')

</div>

</body>
</html>