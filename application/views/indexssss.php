<!DOCTYPE html>
<html xmlns="htt
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <title>PT. Rekayasa Grhaya</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link href="<?php echo base_url() ?>assets/css/image-picker.css" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/chat.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

    <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
    <script>
        webshims.setOptions('forms-ext', {types: 'date'});
    webshims.polyfill('forms forms-ext');
    </script>


</head>
<head>
<body>

  <?php include 'head_'.$this->session->userdata('statusLogin').'.php' ; ?>

 <?php  include 'body_'.$this->session->userdata('page').'.php' ; ?>

  <?php include 'foot.php' ; ?>
    
     
    <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
    <!-- CORE JQUERY  -->
    <script src="<?php echo base_url() ?>assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.js"></script>
    
      <!-- CUSTOM SCRIPTS  -->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>assets/js/dataTables/dataTables.bootstrap.js"></script>

  </div>
</body>

</html>
