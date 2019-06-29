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
<div class="sign-in-container row">
    <div class="my-auto inimage-left">
        <img src="<?=base_url()?>assets/images/signin2.png" alt="">
    </div>
    <div class="form-right shadows">
        <h4>Sign Up</h4>
        <div class="row input-row">
            <div class="inputrow-item">
                <label for="name">First Name</label>
                <input id="name" type="text" value="" name="name" />
            </div>
            <div class="inputrow-item">
                <label for="name">Last Name</label>
                <input id="last" type="text" value="" name="name" />
            </div>
        </div>
        <div>
            <label for="name">Email</label>
            <input id="name" type="text" value="" name="name" />
        </div>
        <div>
            <label for="name">Username</label>
            <input id="name" type="text" value="" name="name" />
        </div>

        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <label style="font-weight:bold;">Content Type</label><br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                    <input type="checkbox" name="vehicle1" value="Bike"> <label>Lorem Ipsum</label> <br>
                </div>
                <div class="col-sm-6">
                    <label style="font-weight:bold;">If you invited, would you have items ready to upload right
                        away?</label>
                    <div class="radio-apply">
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Lorem Ipsum
                        </label><label class="radio-inline">
                            <input type="radio" name="optradio">Lorem Ipsum
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="optradio">Lorem Ipsum
                        </label><label class="radio-inline">
                            <input type="radio" name="optradio">Lorem Ipsum
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <button class="btn-cyan w-100 rounded-xs py-1 mt-3">Apply now</button>
    </div>
</div>