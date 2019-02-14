<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <!-- Import Icon -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <!-- Link CSS -->
    <link rel="stylesheet" href="assets/css/common.css">
    <link rel="stylesheet" href="assets/css/<?php echo $controller ?>.css">
    <!-- Import WebLogo -->
    <link rel="icon" href="assets/images/all/logo-web.png">
    <title>Miny</title>
</head>
<body>
    <div id="layer-opacity"></div>
    <button id="scroll-top" onclick="scrollToTop(150, 5)"><i class="fas fa-angle-up"></i></button>
    <div id="mobile-header" class="mobile-header d-none">
        <div id="icon-nav" onclick="isDisplay()"><i class="fas fa-bars"></i></div>
        <div class="search-container">
            <i class="icon fas fa-search"></i>
            <input class="f-regular-12" type="text" placeholder="Tìm kiếm câu hỏi">
        </div>
    </div>
    <?php
        require_once 'controllers/components/menuController.php';
        require_once 'controllers/components/bannerController.php';
        require_once $file_controller;
        require_once 'controllers/components/footerController.php';
    ?>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="assets/js/common.js"></script>
    <script src="./assets/js/<?php echo $controller ?>.js"></script>
</body>
</html>
