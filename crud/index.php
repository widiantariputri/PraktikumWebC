<?php
require 'function.php';
if (isset($_GET["aw"])) {
    $key = $_GET["aw"];
    $page = 0;
    $mahasiswa = query("SELECT * FROM mahasiswa WHERE nama LIKE '%$key%' OR nim LIKE '%$key%' OR email LIKE '%$key%' OR fakultas LIKE '%$key%' ORDER BY nim");
} else {
    $halaman = 5; /* page halaman*/
    $page    =isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
    $mulai    =($page>1) ? ($page * $halaman) - $halaman : 0;
    $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
    $total = mysqli_num_rows($result);
    $pages = ceil($total/$halaman);  
    $sql = "SELECT * FROM mahasiswa ORDER BY nim LIMIT $mulai,$halaman";
    $mahasiswa = query($sql);          
    $no =$mulai+1;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PAGINATION</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title cf">
                <h2>Daftar Mahasiswa</h2>
                <!-- <div class="btn-row">
                    <a class="btn-add bg-green" href="add.php"><i class="fas fa-plus-square fa-lg"></i>Tambah Data Mahasiswa</a>
                </div> -->
            </div>
            <div class="search-wrapper">
                <div class="field">
                    <form action="" method="get">
                        <label for="cari" style="display:block;">Cari</label>
                        <input type="text" name="aw" placeholder="<?php if (isset($_GET["aw"])) echo $_GET["aw"]; ?>">
                        <input class="btn-search" type="submit" value="Search" name="search">
                        <input class="btn-reset" type="submit" value="Clear" name="reset">
                    </form>
                </div>
            </div>
            <div class="table-data">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Tgl Lahir</th>
                            <th>Email</th>
                            <th>Fakultas</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($mahasiswa as $row) :
                        ?>
                            <tr>
                                <td><?= $i ?></td>
                                <td><?= $row["nim"] ?></td>
                                <td><a href="detail.php?id=<?= $row["idmahasiswa"] ?>"><?= $row["nama"] ?></a></td>
                                <td><?= $row["jenisKelamin"] ?></td>
                                <td><?= $row["tglLahir"] ?></td>
                                <td><?= $row["email"] ?></td>
                                <td><?= $row["fakultas"] ?></td>
                            </tr>
                        <?php $i++;
                        endforeach;
                        ?>
                    </tbody>
                </table>
            </div>
            <div class="pagination">
                <?php for ($i=1; $i<=$pages ; $i++){ ?>
                   <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
                <?php } ?>
            </div>
        </div>
    </div>
</body>

</html>