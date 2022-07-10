<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="<?= base_url('/stylelogin.css');?>">
</head>
<body>
    <div class="form">
            <fieldset style="margin-top: 100px;">
                <center><p><h1>LOGIN SISTEM ANTRIAN</h1></p></center>
                <?php if(session()->getFlashdata('flash_msg')):?>
    <div class="alert alert-danger"><?=
         session()->getFlashdata('flash_msg') ?>
         </div>
        <?php endif;?>
   
                <form action="/pages/daftar" method="post" name="login">
                    
                    <center>
                        <input type="text" name="username" placeholder="Username" required />
                    </center>
                    <center><input type="password" name="password" placeholder="Password" required /></center>
                        <input name="submit" type="submit" value="Login" />
                </form>
               

        </div>
    </body>
</html>

