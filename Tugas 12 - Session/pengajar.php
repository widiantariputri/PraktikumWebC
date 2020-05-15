<?php include 'db.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universitas Udayana</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row cf">
            <?php include 'layout/sidemenu.php' ?>
            <div class="w-75 cf float-left rounded">
                <?php include 'layout/header.php' ?>
                <div class="rounded cf card content shadow mt">
                    <div class="container-content">
                        <h3>Informasi Pengajar</h3>
                        <div class="polaroid shadow mr rounded">
                            <img src="https://devshift.biz/wp-content/uploads/2017/04/profile-icon-png-898.png" alt="profil1">
                            <div class="container text-center">
                                <p style="font-weight: bold;margin-bottom: 7px;">Nama </p>
                                <p style="font-size: 17px;">Made</p>
                                <p style="font-weight: bold;margin: 7px 0;">NIDN </p>
                                <p style="font-size: 17px;">123456789</p>
                            </div>
                        </div>
                        <div class="polaroid shadow mr rounded">
                            <img src="https://devshift.biz/wp-content/uploads/2017/04/profile-icon-png-898.png" alt="profil1">
                            <div class="container text-center">
                                <p style="font-weight: bold;margin-bottom: 7px;">Nama </p>
                                <p style="font-size: 17px;">Nyoman</p>
                                <p style="font-weight: bold;margin: 7px 0;">NIDN </p>
                                <p style="font-size: 17px;">111111111</p>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include 'layout/footer.php' ?>
            </div>
        </div>

    </div>
</body>

</html>