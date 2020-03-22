<!DOCTYPE html>
<html land="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, inital-sacel=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="main.css">

</head>
<body>
<div class="container">
     <div class="card">
       <div class="img_container"><img src="https://d2w9rnfcy7mm78.cloudfront.net/1616404/display_ce645ebfe2895f7717f066ab3f8dc496.png?1516357045" alt=""/>
       </div>
       <form action="results.php" method="POST">
          <input placeholder="სახელი" type="text" name="user_name"> <br />
          <?php if(isset($name_error)) { ?>
          <p><?php echo $name_error ?></p>
          <?php } ?>
          

          <input placeholder="პაროლი" type="password" name="user_password">
          <?php if(isset($password_error)) { ?>
          <p><?php echo $password_error ?></p>
          <?php } ?>

          <input placeholder="მეილი" type="email" name="user_email">
          <?php if(isset($email_error)) { ?>
          <p><?php echo $email_error ?></p>
          <?php } ?>

          <input class="register_button" type="submit" value="რეგისტრაცია">
       </div>
       </body>
       </html>