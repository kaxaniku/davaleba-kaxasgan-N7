<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
<?php include 'assets/components/design.php';
$id = isset($_GET['id']) && $_GET['id']? $_GET['id'] : null;
$name = isset($_POST['name']) && $_POST['name']? $_POST['name'] : null;
$lastname = isset($_POST['lastname']) && $_POST['lastname']? $_POST['lastname'] : null;
$age = isset($_POST['age']) && $_POST['age']? $_POST['age'] : null;
$activity = isset($_POST['activity']) && $_POST['activity']? $_POST['activity'] : null;
//C
if ($id) {
    $sql = 'SELECT * FROM `students` WHERE id = ' . $id;
    $result = mysqli_query($connection, $sql);
    $students = mysqli_fetch_assoc($result);
} else {
    die('invalid id');
}
//UPDATE
if ($name && $lastname && $age && $activity) {
    $sql1 = "UPDATE students SET name = '$name',lastname = '$lastname',age = '$age', activity='$activity' WHERE id = " . $id;
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
                    <input type="text" name="name" value=<?=$students['name']?>>
                </div>
                <div class="form-group">
                    <label for="">Lastname</label>
                    <input type="text" name="lastname" value=<?=$students['lastname']?>>
                </div>
                <div class="form-group">
                    <label for="">Age</label>
                    <input type="text" name="age" value=<?=$students['age']?>>
                </div>
                <div class="form-group">
                    <label for="">Status</label>
                    <select name="activity">
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                </div>
                <div class="form-group">
                    <button class="btn submit">Update</button>
                    <a href="main.php" class="btn">Back</a>
                </div>
            </form>
        </div>
</main>
</body>
</html>