<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Signup and Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.html"><img alt="my logo" height="50" src="img/my_logo.png" width="180"></a>
        <button aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation"
                class="navbar-toggler"
                data-bs-target="#navbarNavDropdown" data-bs-toggle="collapse" type="button">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav navbar-nav-scroll ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a aria-current="page" class="nav-link active" href="index.html">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Find Blogs</a>
                </li>
                <?php
                session_start();
                if (isset($_SESSION["username"])) {
                    echo '<div class="dropdown">';
                    echo '<button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">';
                    echo $_SESSION["username"];
                    echo '</button>';
                    echo '<ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2" style="min-width: inherit">';
                    echo '<li><a class="dropdown-item active" href="profile_panel.php">Profile</a></li>';
                    echo '<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="admin_add.php">Sign up</a>';
                    echo '</li>';
                    echo '<li class="nav-item">';
                    echo '<a class="nav-link" href="login.php">Log in</a>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
