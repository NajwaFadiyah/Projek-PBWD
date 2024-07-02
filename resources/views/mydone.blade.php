<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="mytask.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>My Task | MyList</title>
</head>
<body>
    <div class="container">
        <!-- side bar -->
    <aside class="sidebar">
        <div class="header">
            <h1 style="font-size: large;"> MyList </h1>
        </div>
        <nav>
            <a href="/task">
                <i class="fa-solid fa-list-check" style="color: white;"></i>
                <p> My Task </p>
            </a>
            <a href="/done">
                <i class="fa-solid fa-square-check" style="color: white;"></i>
                <p> My Done </p>
            </a>
            <a href="/notes">
                <i class="fa-solid fa-note-sticky" style="color: white;"></i>
                <p> My Notes </p>
            </a>

            <hr>
            <br>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger btn-sm">Logout</button>
            </form>
        </nav>
    </aside>
    <!-- End Side Bar -->
    
    <!-- Main Content -->
    <main class="utama">
    </main>
    <!-- End Main -->
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>