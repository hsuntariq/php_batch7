<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Your Data</title>
</head>
<body>
    <a class="btn btn-success" href="./index.php">
        Home
    </a>
    <div class="container text-center shadow p-4">
        <h1 class="display-1 ">
            Student Records
        </h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>email</th>
                    <th>age</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // connection
                    $conn = mysqli_connect("localhost","root","","school");
                    // query
                    $select = "SELECT * FROM student";
                    // execute the query
                    $result = mysqli_query($conn,$select);
                    // count the number of rows
                    // check if they are greater than 0
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                            echo "
                                <tr>
                                    <td>{$row['id']}</td>
                                    <td>{$row['name']}</td>
                                    <td>{$row['email']}</td>
                                    <td>{$row['age']}</td>
                                </tr>
                            ";
                            
                        }
                    }
                ?>
            </tbody>
        </table>
        
    </div>
</body>
</html>