<?php include('config.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    
    <h1 class="text-center">Thue xe Duong dai ahihihi </h1>
        <div>
            <a href="add.php">Them moi</a>
</div>

    <table class="table table-hover">
        <tr>
            <th scope="col">STT</th>
            <th scope="col"> model </th>
            <th scope="col"> car type </th>
            <th scope="col"> day rate </th>
            <th scope="col"> weak rate </th>
            <th scope="col"> status </th>
            <th scope="col"> details </th>

</tr>

    <?php
        $sql = 'SELECT * FROM xe';
        $res = mysqli_query($conn,$sql) or die(mysqli_error());
        $count = mysqli_num_rows($res) ;
        if($count = 0){
            die;
        }
        $i=1;
        while($row = mysqli_fetch_assoc($res)){
                $vehicle_id = $row['vehicle_id'];
                $license_no = $row['license_no'];
                $model = $row['model'];
                $year = $row['year'];
                $ctype = $row['ctype'];
                $drate = $row['drate'];
                $wrate = $row['wrate'];
                $status = $row['status'];

        ?>
        <tr>
        <td><?php echo $i++ ?></td>
        <td ><?php echo $model ?></td>
        <td><?php echo $ctype ?></td>
        <td><?php echo $drate ?></td>
        <td><?php echo $wrate ?></td>
        <td><?php echo $status ?></td>

        <td><a href="<?php echo SITE_URL.'details.php?vehicle_id='.$vehicle_id ?>">Xem chi tiet </a> </td>
    </tr>
    <?php
        }
    ?>

</table>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>