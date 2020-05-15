<div class="w-25 float-left card shadow rounded">
    <div class="img-thumb mt mb">
    <img class="logounud" src="./gmbr/logo.png" alt="Logo.png" height="150px"/>
    </div>
    <div class="side-menu">
        <ul>
            <?php if (isset($_SESSION['login'])) : ?>
                <h4>Hai, <?= $_SESSION['username'] ?></h4>
                <a href="logout.php">
                    <li>Logout</li>
                </a>
            <?php else : ?>
                <a href="login.php">
                    <li>Login</li>
                </a>
            <?php endif ?>
            <li class="bg-dark">Layanan Online</li>
            <a href="#">
                <li>Sistem Informasi Terintegrasi</li>
            </a>
            <a href="#">
                <li>Online Academic Service for E-Learning</li>
            </a>
            <a href="#">
                <li>OJS Unud</li>
            </a>
            <a href="#">
                <li>e-Library</li>
            </a>

        </ul>
    </div>
</div>