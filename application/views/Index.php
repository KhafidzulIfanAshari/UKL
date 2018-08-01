<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title; ?></title>
    <link rel="icon" href="<?= base_url(); ?>assets/img/official.png">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
    <script src="<?= base_url(); ?>assets/js/jquery-3.2.1.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>assets/js/bootstrap.min.js"></script>
</head>
<body>

<?php
    $this->load->view($page);
?>

<div class="my-4"></div>

<div class="container-fluid">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <p class="lead">
                    Copyright &copy; by | A[10], All rights reserved
                </p>
            </div>
        </div>
    </div>
</div>
<script>
    $('input').focus(function(){
        $(this).parents('.form-group').addClass('focused');
    });

    $('input').blur(function(){
        var inputValue = $(this).val();
        if ( inputValue == "" ) {
            $(this).removeClass('filled');
            $(this).parents('.form-group').removeClass('focused');  
        } else {
            $(this).addClass('filled');
        }
    });  
</script>
</body>
</html>