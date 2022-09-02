<?php
if( $_SESSION["user_role"]=='0'){
    header("Location:http://localhost/news-site/admin/post.php");
}
include "config.php";
$userid= $_GET['id'];
$sql="DELETE FROM user WHERE user_id = {$userid}";


if(mysqli_query($conn,$sql)){
    header("Location:http://localhost/news-site/admin/users.php");
}else{
    echo "<p>can't Delete</p>";
}

mysqli_close($conn);
?>