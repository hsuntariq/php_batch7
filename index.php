<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css
">
    <title>Get Data</title>
</head>
<body>


        <?php
            // session_start();
            if(isset($_SESSION['success'])){
                echo "
                    <div class='w-25 bg-info text-white'>
                        {$_SESSION['success']}
                    </div>
                ";
            }
        ?>


        <a href="./show-data.php" class="btn btn-info">
            Show Data
        </a>
    <div class="container p-3 shadow col-md-6 m-auto">
        <h1 class="text-center display-3">
            Get Data
        </h1>
        <form action="./get-data.php" method="POST">
            <label for="">Name</label>
            <input type="text" name="name" class='form-control'>
            <label for="">Email</label>
            <input type="text" name="email" class='form-control'>
            <label for="">Age</label>
            <input type="text" name="age" class='form-control'>
            <button class="btn btn-info w-100 my-2">
                Add Data
            </button>
        </form>
    </div>
</body>
</html>