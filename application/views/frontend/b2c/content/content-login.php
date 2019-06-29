<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
    integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/css/style.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/css/signin.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/css/payment.css" />
  <link rel="stylesheet" href="<?=base_url()?>assets/css/css/category.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="container-fluid container-signin row">
    <div class="image-left">
        <img src="<?=base_url()?>assets/images/signin.png" alt="">
    </div>
    <div class="form-right">
        <h4>Sign In</h4>
        <div>
            <label for="name">Username</label>
            <input id="name" type="text" value="" name="name" />
        </div>
        <div>
            <label for="name">Password</label>
            <input id="name" type="text" value="" name="name" />
        </div>
        <div class="btn-form">
            <button class="btn-cyan rounded-xs py-1 px-3"> <b> Login Now </b></button>
            <p>Dont have Account? <a href="signup">Create account</a> </p>
        </div>
    </div>
</div>