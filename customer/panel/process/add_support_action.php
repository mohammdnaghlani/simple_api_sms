<?php
require_once('../../init.php');
$input_names = array(
    'title',
    'group',
    'message',
    'phone',
);
$error_tmp = null;
$success_temp = null;
$msg = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($input_names as $key =>  $name) {
        if (empty($_POST[$name])) {
            $error_tmp[$name] = $name;
        } else {
            $success_temp[$name] = $_POST[$name];
        }
    }
    if (empty($error_tmp)) {
        $add_message = add_message('db/message.json', $success_temp);
        $test = ' درخواست شما ثبت شد. ';
        sendMessage($success_temp['phone'], $test) ;
        if ($add_message) {
            $msg = '<div class="alert alert-success text-center m-4"> پیام شما با موفقیت ارسال شد !</div>';
        } else {
            $msg = '<div class="alert alert-info text-center m-4"> مشکلی در سیستم وجود دارد مجددا تلاش نمایید !</div>';
        }
    } else {
        $msg = '<div class="alert alert-warrning text-center m-4">پرنموندن تمام فیلد ها الزامی می باشد !</div>';
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= link_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/bootstrap-rtl.min.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/fontiran.css') ?>" rel="stylesheet">
    <link href="<?= link_url('assets/css/styles.css') ?>" rel="stylesheet">
    <title>Support </title>
</head>

<body>
    <?= $msg; ?>
    <script>
        setTimeout(function() {
            window.location.href = '<?= BASE_URL; ?>';
        }, 2000);
    </script>
</body>

</html>