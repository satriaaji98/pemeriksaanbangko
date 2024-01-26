<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="" rel="icon">
  <title>Pemeriksaan 333 - Login</title>
  <link href="<?= base_url('assets/')  ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/')  ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="<?= base_url('assets/')  ?>css/ruang-admin.min.css" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
 
  <!--Sweet Alert -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/plugins/sweetalert/sweetalert.css')  ?>">
  <section>
  
</head>

<body class="bg-gradient-login">
  <!-- Login Content -->
 
  <div class="container-login">
  
    <div class="row justify-content-center">
      <div class="col-xl-6 col-lg-12 col-md-9">
        <div class="card shadow-sm my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="login-form">
                  <div class="text-center">
                    <h1 class="h4 text-gray-700 mb-4">Selamat Datang 333!</h1>
                  </div>
                  <form class="user" onsubmit="ajax_login(); return false; ">
                    <div class="form-group">
                      <input type="text" class="form-control" id="username" placeholder="Username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        
                      </div>
                    </div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-block">Login</a>
                    </div>


                  </form>
                  <hr>
        
                  <div class="text-center">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Login Content -->
  <script src="<?= base_url('assets/')  ?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/')  ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url('assets/')  ?>vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?= base_url('assets/')  ?>js/ruang-admin.min.js"></script>
  <script src="<?= base_url('assets/plugins/sweetalert/sweetalert.min.js') ?>"></script>
  <script src="<?= base_url('assets/plugins/sweetalert/sweetshow.js') ?>"></script>
  <script type="text/javascript">

    function ajax_login(){
        var username = $('#username').val();
        var password = $('#password').val();


        if (username.length > 0 && password.length > 0)
        {
            $.ajax({
                url: "<?= base_url('login/dologin') ?>",
                type: "post",
                data: {
                    username: username,
                    password: password
                },
                success:function(result){
                    var hasil = JSON.parse(result);
                    swal_show(hasil);

                    if(hasil['status_code'] == 200)
                       setTimeout("window.open(self.location, '_self');", 750);
                       
                } 
            });

        }
        
    } 
  </script>
  
</body>

</html>