<?php

  $fn = (isset($_SERVER['HTTP_X_FILENAME']) ? $_SERVER['HTTP_X_FILENAME'] : false);

  if ($fn) {
    file_put_contents(
  		'../uploads/' . $fn,
  		file_get_contents('php://input')
  	);
  	echo "$fn uploaded";
  	exit();
  }
  else{
    $target_dir = "../uploads/";
    $target_file = $target_dir.basename($_FILES['cv']['name']);

    foreach ($_FILES as $file) {
      if (move_uploaded_file($file['tmp_name'], $target_file)) {
        echo "File Successfully uploaded";
      }
    }
  }

 ?>
