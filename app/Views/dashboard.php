<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Welcome, <?= session()->get('username') ?></h2>
    <a href="/login/logout">Logout</a>
</body>
</html>
