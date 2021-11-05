<!DOCTYPE html>
<html>
<head>
    <title>davaleba</title>
    <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>
    <?php include 'assets/components/design.php';
    //ERASURE
    $id = isset($_POST['id']) && $_POST['id']? $_POST['id'] : null;
    if ($id) {
        $ERASURE = "DELETE FROM students WHERE id = '$id'";
        mysqli_query($connection, $ERASURE);
    }
    //C
        $sql = 'SELECT * FROM `students`';
        $result = mysqli_query($connection, $sql);
        $students = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
<main>
        <div class="container-header">
            <h2>Students</h2>
            <a href="new.php" class="btn">Add New</a>
        </div>
        <div class="content">
            <table>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>Age</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
                <?php foreach ($students as $value) :?>
                <tr>
                    <td><?= $value['name']?></td>
                    <td><?= $value['lastname']?></td>
                    <td><?= $value['age']?></td>
                    <td>
                        <span class="status <?= $value['activity']?>"><?= $value['activity']?></span>
                    </td>
                    <td class="actions">
                        <a class="edit" href="edit.php?id=<?=$value['id']?>">Edit</a>
                        <form class="Tform" method='post'>
                        <input type="hidden" name='id' value=<?=$value['id']?>>
                        <button class="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach ?>
              </table>
        </div>
    </main>
</body>
</html>