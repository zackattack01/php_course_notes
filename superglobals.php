<!DOCTYPE html>
<html>
<head>
  <title>GET AND POST</title>
</head>
<body>
<?php 
  //GET
  echo '<a href="?name=benny&job=none&favorite=dog">Benny!</a>';
  // $_GET will hold info about the query string
  print_r($_GET);
  //it can be keyed into like a normal array, but isset is typically used to check for key inclusion
  if (isset($_GET['user_id'])) {
    echo $_GET['user_id'];
  }

  //POST
  // bang empty to check if post is set
  if (!empty($_POST)) {
    echo $_POST['job'];
  }
 ?>
  <form method="post" action="?handle_form">
    Job: <input type="text" name="job" />
    <input type="submit" />
  </form>
</body>
</html>