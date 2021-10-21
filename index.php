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
    <div class="container text-center mt-5">
    <form method="POST" class="border border-primary p-5">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Enter Number:</label>
                    <input type="text" class="form-control" name="number" id="exampleInputPassword1">
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
        <button type="submit" id="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
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