<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CI Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">
    
</head>
<body>
    <div class='container' style='margin-top: 40px;'>
        <div class='row'>
            <div class='col-md-4'>
            </div>
            <div class='col-md-4'>
                <div class='panel panel-default'>
                    <div class='panel-body'>
                        <!-- validation message for a successful registration
                        <?php if ($this->session->flashdata('success')) {?>
                            <div class="alert alert-success alert-dismissible" role="alert">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <?php echo $this->session->flashdata('success'); ?>
                            </div>
                          <?php  } ?>

                        <!-- validation messages for taking inputs -->
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>','</div>');
                        ?>

                        <?php echo form_open('Register/registerUser') ?>

                            <div class="form-group">
                                <label for="firsname">First name</label>  
                                <input type="text" class="form-control" nama="firstname" id="firstname" placeholder="Firs Name">
                            </div>

                            <div class="form-group">
                                <label for="firsname">Last Name</label>  
                                <input type="text" class="form-control" nama="lastname" id="lastname" placeholder="Last Name">
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
                            </div>
                            <br>
                            <span id="username_result"></span>
                           
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" name="password" id="password" onkeyup='check();' placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="password">Confirm Password</label>
                                <input type="password" class="form-control" name="cpassword" id="confirm_password"  onkeyup='check();' placeholder="Password">
                                <span id='message'>
                            </div>

                            <div class="form-group">
                                    <label for="nationality">Content type</label>
                                    <select class="form-control" id="nationality" name="nationality">
                                    <?php
                                    foreach($contenttype as $row){
                                    ?>
                                    <option value="<?= $row['content_type_id']; ?>"><?= $row['content_type_name']; ?></option>

                                    <?php } ?>
                                    </select>
                            </div>


                            <button class="btn btn-primary" name='reg'>REGISTER</button>
                           
                        <?php echo form_close() ?>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <script>
var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}

</script>
<script type="text/javascript">
        $(document).ready(function(){
        $('#username').change(function(){
        var username = $('#username').val();
        if(username != ''){
            $.ajax({
            url: "<?php echo base_url(); ?>index.php/Frontend/merchant/Merchant/checkUsername",
            method: "POST",
            data: {username:username},
            success: function(data){
                if(data==1){
                $('#username_result').html('<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true"></i> This user is already registered</span></label>');
                }else{
                    $('#username_result').html('<label class="text-success"><span><i class="fa fa-check-circle-o" aria-hidden="true"></i>Username is available</span></label>'); 
                }
            }
            });
        }
        });
        });
</script>
    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
  </body>
</html>

