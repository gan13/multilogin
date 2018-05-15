<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <h1>Register</h1>

<!-- isi -->
    <p>
      isi data
    </p>
    <div class="cool-lg-8-col-lg-offset-2">
      <div class="form-group">
        <label for="username" class="label-default">Username</label>
        <input class="form-control" id="username" name="username" type="text">
      </div>

      <div class="form-group">
        <label for="email" class="label-default">Email</label>
        <input class="form-control" id="email" name="email" type="text">
      </div>
      <div class="form-group">  
        <label for="password" class="label-default">Password</label>
        <input class="form-control" id="password" name="password" type="password">
      </div> 
      <div class="form-group">
        <label for="password" class="label-default">Confirm Password</label>
        <input class="form-control" id="password" name="password2" type="password">
      </div>
      <div class="form-group">
        <label for="gender" class="label-default">Gender</label>
        <select class="form-control" id="gender" name="gender">
          <option value="Male">Male</option>
          <option value="Female">female</option>
        </select>
      </div>
      <div class="form-group">
        <label for="phone" class="label-default">Phone</label>
        <input class="form-control" id="phone" name="phone" type="text">
      </div>
    </div>

    <div class="text-center">
      <button class="btn btn-primary">Register</button>
      
    </div>
<!-- /isi -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?= base_url('assets/js/jquery-3.2.1.slim.min.js');?>" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/popper.min.js');?>" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js'); ?>" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>