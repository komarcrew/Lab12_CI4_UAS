<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $title; ?></title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- My Css -->
    <link rel="stylesheet" href="<?= base_url('/style.css'); ?>">
    <script type='text/javascript'>
    </script>
</head>

<body>
    <div id="container">
        <header>
            <h1>Sistem Antrian</h1>
        </header>
        <?= $this->include('layout/navbar'); ?>
        
        <?= $this->renderSection('content'); ?>

        <footer>
            <p>Copyright &copy; Komarudin 312010068 | Universitas Pelita Bangsa 2022</p>
        </footer>
    </div>
</body>

</html>