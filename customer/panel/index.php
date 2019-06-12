<?php
    require_once ('../init.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= link_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/bootstrap-rtl.min.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/fontiran.css')?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/styles.css')?>" rel="stylesheet">
    <title>Mini CMS</title>
</head>
<body>
    <div class="container mt-2 ">
        <div class="col-12">
            <ul class="breadcrumb ">
                <li class="breadcrumb-item"><a href="<?=link_url('');?>">صفحه اول وبسایت</a></li>
            </ul>
        </div>
        <div class="row ">
            <div class="col-12">
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?=link_url('panel/view.php');?>">نمایش پیام ها</a></li>              
                </ul>
            </div>
        </div>
    </div>
</body>
</html>