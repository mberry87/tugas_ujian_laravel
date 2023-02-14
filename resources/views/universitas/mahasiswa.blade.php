<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/my-style.css">
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php
        foreach ($mahasiswa as $nama) {
            echo "<li> $nama</li>";
        }
        ?>
    </ul>

    <div>
        copyright &copy <?php echo date('Y'); ?> strawberry
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/my-script.js"></script>

</body>

</html>
