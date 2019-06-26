    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">
                  <!-- <form method="post" action="<?php echo base_url().'index.php'?>"> -->
                    <img src="<?php echo base_url() ?>assets/img/auto2000.jpg" style="max-width: 30%" />
                  <!-- </form> -->
                </a>

            </div>

              <div class="right-div">
                <form method="post" action="<?php echo base_url().'cont_user/masuk'?>">
                  <button type="submit" class="btn btn-danger pull-right " style="padding-left: 40px;padding-right: 40px; margin-left:10px">Log In</button>
                  <input type="email" name="email" style="border: 1px solid #ccc; padding-left: 8px; padding-right: 8px;" placeholder="Email">
                  <input type="password" name="password" style="border: 1px solid #ccc; padding-left: 8px; padding-right: 8px;" placeholder="Password">
                  <div>
                    <a href="<?php echo base_url().'cont_user/viewDaftar'?>">Create New Account</a>
                    <a href="<?php echo base_url().'cont_user/viewChange'?>">Forgot Account?</a>
                  </div>
                </form>
              </div>

        </div>
    </div>
    <!-- LOGO HEADER END-->
     <!-- MENU SECTION END-->
