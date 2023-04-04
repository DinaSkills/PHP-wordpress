<?php
 require   'api/login.php'; 
  ?>
  <!DOCTYPE html>
  <html>
  
  <head>
  <meta charset="utf-8"/>
  <title></title>
  <link rel="stylesheet" href="style2.css">
  </head>

  <body>
  <?php if(!isset($response->code)){ ?>
  <div class="wrapper">
    <div class="typing-demo">
    <?php echo  'Welcome you are '. $response->user->first_name . ' ' . $response->user->last_name; ?>
    </div>
</div>
<?php }else{
   echo 'Error' . $response->code;
}?>
  </body>
  </html>
