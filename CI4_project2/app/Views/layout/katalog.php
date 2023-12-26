<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.0.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel="stylesheet" href="<?= base_url('/css/katalog.css') ?> ">
    <link rel="stylesheet" href="<?= base_url('/css/dashboard.css') ?> ">
    <title>Katalog</title>
</head>

<body>
    <?= $this->renderSection('katalog'); ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        function openNav() {
            document.getElementById("mySidebar").style.width = "250px";
        }

        function closeNav() {
            document.getElementById("mySidebar").style.width = "0";
        }
    </script>
    <script>
        $('.toggle').click(function() {
            $(this).toggleClass('on');
            $('.filter').slideToggle();
        });
    </script>
    <script>
        function filterItems(category) {
            console.log("Selected Category: " + category);
        }

        function filterItemsBySize(size) {
            console.log("Selected Size: " + size);
        }
    </script>
</body>

</html>