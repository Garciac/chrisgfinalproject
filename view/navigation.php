<?php
//required statements
require_once(__DIR__ . "/../model/config.php");
require_once(__DIR__ . "/../controller/login-verify.php");

if (!authenticateUser()) {
    header("Location: " . $path . "index.php");
    die();
}
//when logged in, they can logout or create a post
?>
<nav>
    <ul>
        <a href="post.php" class="list-group-item list-group-item-success">Post Form</a>

    </ul>
    <ul>
        <a href="controller/logout-user.php" class="list-group-item list-group-item-danger">Logout</a>
    </ul>
</nav>
