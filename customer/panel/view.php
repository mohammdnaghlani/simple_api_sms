<?php
    require_once ('../init.php');
    $messages = fetch_message('db/message.json');
    $group = isset($_GET['group']) ? $_GET['group'] : 'all' ;
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
    <title>Support > view</title>
</head>
<body>
    <div class="container mt-2 ">
        <div class="col-12">
            <ul class="breadcrumb ">
                <li class="breadcrumb-item"><a href="<?=link_url('');?>">صفحه اول وبسایت</a></li>
            </ul>
        </div>
        <div class="row ">
            <div class="col-12 col-sm-3">
                <ul class="list-group">
                    <li class="list-group-item">اتتخاب نمایش گروه پیام ها</li>              
                    <li class="list-group-item"><a href="<?=link_url('panel/view.php?group=support');?>">پشتیبانی</a></li>             
                    <li class="list-group-item"><a href="<?=link_url('panel/view.php?group=shop');?>">فروش</a></li>             
                    <li class="list-group-item"><a href="<?=link_url('panel/view.php?group=public');?>">عمومی</a></li>             
                    <li class="list-group-item"><a href="<?=link_url('panel/view.php?group=service');?>">خدمات</a></li>             
                </ul>
            </div>
            <div class="col-12 col-sm-9">
                <div class="row justify-content-center">
                <?php if($messages <> null) :?>
                    <?php foreach($messages as $mid => $message) : ?>
                        <?php if($group == $message->group) :?>
                            <div class="col-10 mt-2 mb-2 bg-light shadow-sm rounded border post-container">
                                <span class="post-author badge bg-dark p-1"><?=$message->group ;?></span>
                                <h2 class="post-title m-2 "><?=$message->title ;?></h2>
                                <div class="post-content text-justify pb-3 pr-3 pl-3 pt-0"><?=$message->message ;?></div>
                            </div>
                        <?php elseif($group == 'all') : ?>
                            <div class="col-10 mt-2 mb-2 bg-light shadow-sm rounded border post-container">
                                <span class="post-author badge bg-dark p-1"><?=$message->group ;?></span>
                                <h2 class="post-title m-2 "><?=$message->title ;?></h2>
                                <div class="post-content text-justify pb-3 pr-3 pl-3 pt-0"><?=$message->message ;?></div>
                            </div>
                        <?php endif ?>                        
                    <?php endforeach; ?>
                <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>