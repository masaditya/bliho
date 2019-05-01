
<head>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/style.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/signup.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/payment.css" />
    <link rel="stylesheet" href="<?=base_url()?>assets/css/css/category.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<div class="sign-up-container row">
    <div class="image-left">
        <img src="<?=base_url()?>assets/images/signup.png" alt="">
    </div>
    <div class="form-right">
        <div style="padding: 0px 30px;">

            <h4>Sign Up</h4>
            <div>
                <label for="name">First Name</label>
                <input id="name" type="text" value="" name="name" />
            </div>
            <div>
                <label for="name">Last Name</label>
                <input id="name" type="text" value="" name="name" />
            </div>
            <div>
                <label for="name">Email</label>
                <input id="name" type="text" value="" name="name" />
            </div>
            <div>
                <label for="name">Password</label>
                <input id="name" type="password" value="" name="name" />
            </div>
            <div>
                <label for="name">Confirm Password</label>
                <input id="name" type="password" value="" name="name" />
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="1">
                <label class="custom-control-label" for="1">Lorem ipsum lorem ipsum lorem ipsum lorem
                    ipsum</label>
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="2">
                <label class="custom-control-label" for="2">Lorem ipsum lorem ipsum lorem ipsum lorem
                    ipsum</label>
            </div>

            <div class="g-recaptcha" data-sitekey="6Lfo350UAAAAANQy8Vr4HjT0OSt1IAgC9VawlC4T"></div>
            <button class="button-create-account">Create Your Account</button>
        </div>
    </div>

</div>
<script src='https://www.google.com/recaptcha/api.js'></script>