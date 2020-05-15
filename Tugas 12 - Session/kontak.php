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
                        <h3>Profil Pembuat Web</h3>
                        <div class="cf">
                            <div class="img-profile float-left w-25">
                                <img class="rounded w-100" src="./gmbr/user.png" alt="">
                            </div>
                            <div class="profile container-content float-left">
                                <p class="mb" style="font-weight: bold;">Widiantari Putri </p>
                                <p class="mb">1708561057</p>
                                <div class="cf">
                                    <ul class="">
                                        <li><a href="https://wa.me/082247030198"><img class="img-icon" src="https://image.flaticon.com/icons/png/https://www.flaticon.com/free-icon/whatsapp_2111728" alt=""></a></li>
                                        <li><a href="mailto:ayutari16@gmail.com"><img class="img-icon" src="https://1.bp.blogspot.com/-aHRkWv8UoTQ/XWaUomcxTLI/AAAAAAAAAdQ/tbu-JWk34pIUeCG4pIl-DDL-2Ef58Y4cwCLcBGAs/s1600/gmail%2B%25281%2529.png" alt=""></a></li>
                                    </ul>
                                </div>
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