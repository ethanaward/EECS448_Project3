
<?php
/**
*	@file : CreatePosts.php
*	@author : Mike Neises, Travis Augustine, Ethan Ward
*	@date : 2016.04.08
*	@brief: Creates new Create object
*/
session_start();
include "src/Create.php";

if(isset($_SESSION['username'])) {
  $create = new Create();

  $create->makePost();
}

else {
  echo "The post could not be created. You are not logged in.";
}


?>


<!--
    In this html section, we simply provide a link back to the feed.
-->
<html>
        <head>
                <title>EECSForum Main Feed</title>
                <style></style>
        </head>
        <body>
                <br><br>
                <a href="FeedFrontEnd.html">Back</a>
        </body>
</html>
