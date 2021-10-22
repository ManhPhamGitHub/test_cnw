<?php
include('config.php');
$id = $_GET['id'];
 $sql = "SELECT * FROM xe WHERE vehicle_id = $id";
 $res = mysqli_query($conn,$sql);
 $count = mysqli_num_rows($res);
if($count > 0){
    $sql2 = "DELETE FROM xe WHERE vehicle_id = $id";
    mysqli_query($conn,$sql2);
    header("location:".SITE_URL);
}else{
    echo "<h1>khong tim thay id</h1>";
    echo "<a href=".SITE_URL.">quay lai trang chu </a>";
}

?>