<?php

//required statement
require_once(__DIR__ . "/../model/config.php");
//It shows all your post you posted
$query = "SELECT * FROM posts";
$result = $_SESSION["connection"]->query($query);
//settings for post to show on your page
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<div class='post'>";
        echo "<h2>" . $row['title'] . "</h2>";
        echo "<br />";
        echo "<p>" . $row['post'] . "</h1>";
        echo "<br/>";
        echo "</div";
    }
}