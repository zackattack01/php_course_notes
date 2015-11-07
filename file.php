<!DOCTYPE html>
<html>
<head>
  <title>FILE</title>
</head>
<body>
<?php 
  if (!empty($_FILES)) {
    // you can key into the FILES super global just as you would a params hash
    echo $_FILES['user_picture']['name'];

    //uploads chosen file to project directory
    $tmp = $_FILES['user_picture']['tmp_name'];
    $destination = $_FILES['user_picture']['name'];
    move_uploaded_file($tmp, $destination);

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
  }
?>
  <form method="post" action="?" enctype="multipart/form-data">
    <input type="file" name="user_picture" />
    <input type="submit" />
  </form>
</body>
</html>