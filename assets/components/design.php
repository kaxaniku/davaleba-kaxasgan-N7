<header>
        <span class="logo">LOGO</span>
        <div class="user">
            <div>
                <img src="assets/img/user.png">
            </div>
            <div>
                <span>A</span>
                <span>Root</span>
            </div>
        </div>
</header>
<aside>
    <div class="sections">
        <ul>
            <li>
                <a href="">Students</a>
            </li>
        </ul>
    </div>
</aside>
<?php 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students-1';
$connection = mysqli_connect($servername, $username, $password, $dbname);
?>