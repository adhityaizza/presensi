<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RPS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url(); ?>asset/css/style.css">
  </head>
  <body class="purple">
    
    <div class="card vertical text-center" style="width: rem;">
        <div class="card-body">
                <div class="mb-3">
                    <img src="<?php echo base_url(); ?>asset/image/logo-full.png" style="width: 300px; margin: 30px;">
                    <form action="<?php echo base_url(); ?>index.php/c_login/aksi_login" method="post">     
                    <div class="mb-3">
                        <input type="text" class="form-control" id="username" name="username" placeholder="username">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="password" name="password" placeholder="password">
                    </div>
                    <button type="submit" class="btn btn-primary">login</button>
                </form>
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>