<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('/css/dashboard.css'); ?>">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <title>SHOJUUU</title>
</head>

<body>
    <?= $this->renderSection('dashboard'); ?>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>

    <script src="path/to/bootstrap.min.js"></script>
    <!-- <script src="js/bootstrap.min.js"></script> -->


</body>

</html>