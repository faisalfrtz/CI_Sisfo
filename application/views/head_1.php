    <div class="navbar navbar-inverse set-radius-zero" >
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">

                    <img src="<?php echo base_url() ?>assets/img/auto2000.jpg" style="max-width: 30%" />
                </a>

            </div>

              <div class="right-div">
                
                  <a href="<?php echo base_url().'cont_user/keluar'?>" class="btn btn-danger pull-right " style="padding-left: 40px;padding-right: 40px; margin-left:10px">Logout</a>
                   <p>Selamat datang , <?php  echo $user->getNama() ?> </p> 
              </div>

        </div>
    </div>
    <!-- LOGO HEADER END-->
    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo base_url().'Home/index/'?>"></a></li>   
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>
     <!-- MENU SECTION END-->