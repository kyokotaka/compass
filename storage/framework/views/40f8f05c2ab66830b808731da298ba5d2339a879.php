<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AtlasBulletinBoard</title>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
  <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&family=Oswald:wght@200&display=swap" rel="stylesheet">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
</head>
<body>
  <div class="atlas_img">
    <img src="/image/atlas-black.png">
  </div>
  <form action="<?php echo e(route('loginPost')); ?>" method="POST">
    <div class="w-100 vh-100 d-flex" style="align-items:center; justify-content:center;">
      <div class="border vh-50 w-25">
        <div class="w-75 m-auto pt-5">
        <?php if($errors->has('mail_address')): ?>
         <li><?php echo e($errors->first('mail_address')); ?></li>
        <?php endif; ?>

          <label class="d-block m-0" style="font-size:13px;">メールアドレス</label>
          <div class="border-bottom border-primary w-100">
            <input type="text" class="w-100 border-0" name="mail_address">
          </div>
        </div>
        <div class="w-75 m-auto pt-5">
          <label class="d-block m-0" style="font-size:13px;">パスワード</label>
          <div class="border-bottom border-primary w-100">
            <input type="password" class="w-100 border-0" name="password">
          </div>
        </div>
        <div class="text-right m-3">
          <input type="submit" class="btn btn-primary" value="ログイン">
        </div>
        <div class="text-center">
          <a href="<?php echo e(route('registerView')); ?>">新規登録</a>
        </div>
      </div>
      <?php echo e(csrf_field()); ?>

    </div>
  </form>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="<?php echo e(asset('js/register.js')); ?>" rel="stylesheet"></script>
</body>
</html><?php /**PATH /Users/takahashikyouko/Desktop/AtlasManagementSystem-master/resources/views/auth/login/login.blade.php ENDPATH**/ ?>