<?php
    $num= $_GET['number'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Multiplication</title>
</head>
<body>
    <div class="container text-center border border-primary rounded-3 mt-5">
    <table class="table table-striped">
        <thead>
            <th>Operation</th>
            <th>Resultant</th>
        </thead>
        <tbody>
            <?php
                for($i=1; $i<=10; $i++){
            ?>
            <tr>
                <td><?php echo $num." X ".$i; ?></td>
                <td><?php echo $num*$i; ?></td>
            </tr>
            <?php
                }
            ?>
        </tbody>
    </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $num=$_POST['number'];
    header("Location: http://localhost/multiply/mulTable.php?number=$num");
}
?>