<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

    <title>Update Data</title>
</head>
<body>
    <div class="container shadow p-3 col-md-5 m-auto">
        <h1 class="text-center display-1">
            Update Data
        </h1>
        <?php
            // connection
            $connection = mysqli_connect("localhost","root","","school") or die('connection failed');
            $id = $_GET['id'];
            $select = "SELECT * FROM student WHERE id = $id";
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <form action='./update.php' method='POST'>
                    <input value={$row['id']} type='hidden' class='form-control' name='i' id=''>
                    <label for=''>Updated Name</label>
                    <input value={$row['name']} type='text' class='form-control' name='n' id=''>
                    <label for=''>Updated Email</label>
                    <input value={$row['email']} type='text' class='form-control' name='e' id=''>
                    <label for=''>Updated Age</label>
                    <input type='text' value={$row['age']} class='form-control' name='a' id=''>
                    <button class='btn btn-info w-100 my-2'>
                        Update Data
                    </button>
                </form>";
                }
            }
        ?>
       
    </div>
</body>
</html>