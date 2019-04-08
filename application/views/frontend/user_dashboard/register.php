<link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/font-awesome/css/font-awesome.css">

  <link href="<?= base_url() ?>assets/admin/css/sb-admin.css" rel="stylesheet">

  <link href="<?= base_url() ?>assets/admin/css/style.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/admin/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url( )?>assets/admin/css/bootstrap-switch.min.css">
  <link rel="stylesheet" href="<?= base_url( )?>assets/admin/css/loadimg.min.css">
  <link rel="stylesheet" href="<?= base_url( )?>assets/admin/css/jquery.paginate.css">
  <link rel="stylesheet" href="<?= base_url( )?>assets/admin/css/chartist.min.css">
  <link rel="stylesheet" href="<?= base_url( )?>assets/admin/css/chartist-plugin-tooltip.css">
<div class="row">
  <div class="col-lg-12">
    <?php if(isset($error)) { ?>
      <div class="alert alert-danger"><?= $error ?></div>
    <?php } ?>
    <div class="row">
      <!-- panel left -->
      <div class="col-lg-8">
        <div class="panel panel-default">
          <div class="panel-heading">
            <b>Register</b>
          </div>
          <form class="" action="<?= base_url().'index.php/Frontend/user_dasboard/Register/insert' ?>" method="post" enctype="multipart/form-data">
            <div class="panel-body">
              <div class="form-group">
                <input type="text" name="FirstName" class="form-control" placeholder="First Name">
              </div>
              <div class="form-group">
                <input type="text" name="LastName" class="form-control" placeholder="Last Name">
              </div>
              
              <div class="form-group">
                    <label for="nationality">Nationality</label>
                    <select class="form-control" id="nationality" name="nationality">
                    <?php
                    foreach($nationality as $row){
                    ?>
                    <option value="<?= $row['id_nationality']; ?>"><?= $row['nationality_name']; ?></option>

                    <?php } ?>
                    </select>
              </div>

              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Example@email.com">
              </div>
              <div class="form-group">
                <input type="text" name="phone" class="form-control" placeholder="08XXXXXXXXXX">
              </div>
              <div class="form-group">
                <input type="text" name="organization" class="form-control" placeholder="Organization">
              </div> 
              <div class="form-group">
                <input type="password" name="password" class="form-control" placeholder="Password">
              </div>

              <div class="form-group">
                    <label for="nationality">Tipe akun</label>
                    <select class="form-control" id="tipeakun" name="tipeakun">
                    <?php
                    foreach($tipeakun as $row){
                    ?>
                    <option value="<?= $row['id_type_account']; ?>"><?= $row['type_account_name']; ?></option>

                    <?php } ?>
                    </select>
              </div>


              <input type="submit" value="Submit" name="submit" class="btn btn-primary">
              <a href="<?= base_url() ?>index.php/Frontend/user_dasboard/Register" class="btn btn-danger">Cancel</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
