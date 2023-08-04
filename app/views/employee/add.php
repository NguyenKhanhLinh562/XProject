<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Add New</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="text-center">Add new employee</h3>
        <a class="btn btn-primary float-end" href="<?= DOMAIN . "/public/index.php" ?>">Back</a>
        <form action="<?= DOMAIN . "/public/index.php?action=store" ?>" method="post">
            <div class="mt-3">
                <label for="">Name</label>
                <input type="text" name="name" id="" class="form-control">
            </div>
            <div class="mt-3">
                <label for="">Address</label>
                <input type="text" name="address" id="" class="form-control">
            </div>
            <div class="mt-3">
                <label for="">Salary</label>
                <input type="text" name="salary" id="" class="form-control">
            </div>

            <div class="mt-3">
                <button type="submit" name="submit" class="btn btn-success">ADD</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>