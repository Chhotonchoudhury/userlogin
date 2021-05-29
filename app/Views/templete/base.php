<!doctype html>
<html lang="en">
  <head>
    <title><?= $this->renderSection('title') ?></title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="<?php echo base_url('public/assets/css/bootstrap.min.css'); ?>">
   </head>
  <body><br><br>
       <div class="container">
            <div class="row">
       <?= $this->renderSection('content')  ?>
            </div>
       </div>        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   <script src="<?php echo base_url('public/assets/js/bootstrap.min.js'); ?>"></script>
   <script src="<?php echo base_url('public/assets/js/bootstrap.bundle.min.js'); ?>"></script>
 </body>
</html>