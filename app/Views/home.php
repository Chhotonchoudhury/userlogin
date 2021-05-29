<!--this content for partial of a website 
<h2><span class="badge badge-pill badge-success"> //$name; </span></h2>-->
        
 <!--this section for templete creating -->
 <?= $this->extend('templete/base.php') ?>
 <?= $this->section('title') ?>
<?= $title ?>
 <?= $this->endSection() ?>

 <?= $this->section('content') ?>
 <div class="col-md-3">
 <h3>Welcome <?= $name ?><?=  session()->set('name' , 'don'); session()->remove('name');  echo session('name'); ?></h3>
 </div>
<div class="col-md-6">
<?php if(session()->getFlashData('message')): ?>
<p class="alert alert-success"><?= session()->getFlashData('message') ?></p>
<?php endif; ?>
<?= $c_f['form_open']?>
<div class="form-group">
    <?= form_label('Enter your name') ?>
    <?= $c_f['name']; ?>
   <?php if($validator != null) : ?> 
    <?= $validator->showError('name' , 'mysingle') ?>
   <?php endif; ?>
</div>

<div class="form-group">
    <?= form_label('Enter your email') ?>
    <?= $c_f['email'] ?>
     <?php if($validator != null) : ?> 
    <?= $validator->showError('email' , 'mysingle') ?>
   <?php endif; ?>
</div>

<div class="form-group">
    <?= form_label('Enter your message') ?>
    <?= $c_f['message'] ?>
     <?php if($validator != null) : ?> 
    <?= $validator->showError('message' , 'mysingle') ?>
   <?php endif; ?>
</div>

<div class="form-group">
    <?= form_submit(['value' => 'Contact us' ,'class'=>'btn btn-primary'])?>
</div>
<?= $c_f['form_close'] ?>
</div>
 <div class="col-md-3">
 <?= $this->include('partials/listgroup') ?>
 </div>
 <?= $this->endsection()  ?>

  