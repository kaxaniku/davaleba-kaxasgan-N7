<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
<?php include 'assets/components/design.php';
$name = isset($_POST['name']) && $_POST['name']? $_POST['name'] : null;
$lastname = isset($_POST['lastname']) && $_POST['lastname']? $_POST['lastname'] : null;
$age = isset($_POST['age']) && $_POST['age']? $_POST['age'] : null;
$activity = isset($_POST['activity']) && $_POST['activity']? $_POST['activity'] : null;
if ($name && $lastname && $age && $activity) {
    $sql1 = "INSERT INTO students (name, lastname, age, activity) VALUES ('$name','$lastname','$age','$activity')";
    mysqli_query($connection, $sql1);
    header("location: main.php");
}
?>
<main>
        <div class="container-header">
            <h2>Students</h2>
        </div>
        <div class="content">
            <form method="post" action="">
                <div class="form-group">
                    <label for="">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" name="lastname">
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" name="age">
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="activity">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn submit">Add</button>
                    <a href="main.php" class="btn">Back</a>
                </div>
            </form>
        </div>
</main>
</body>
</html>