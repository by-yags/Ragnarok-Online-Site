<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Ragnarok Online</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="placeholder-image">&lt;INSERT IMAGE HERE&gt;</div>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="#">News</a></li>
            <li><a href="#">Game Info</a></li>
            <li><a href="#">Community</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="/login">Login</a></li>
        </ul>
    </nav>
    <main>
        <h1>Login</h1>
        @livewire('login')
        <p>Don't have an account? <a href="/register">Register here</a>.</p>
    </main>
    <footer>
        <p>&copy; 2023 Gravity Co., Ltd. & Lee Myoung-jin(studio DTDS). All rights reserved.</p>
    </footer>
</body>
</html>
