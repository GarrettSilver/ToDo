<?php 
    $items = strip_tags( $_POST['task'] );
    

    require("connect.php");

    mysql_query("INSERT INTO tasks VALUES ('', '$items')");

    $query = mysql_query("SELECT * FROM tasks WHERE items='$items'");

    $row = mysql_fetch_assoc($query); 
 $items_id = $row['id'];
  $items_name = $row['items'];
  $items_completed =$completed['completed'];

    mysql_close();

    echo '<li><span>'.$items_name.'</span><img id="'.$items_id.'" class="delete-button" width="10px" src="images/close.svg" /></li>';
?>