<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Daftar Akun AUTO2000 Drive</h4>                
            </div>
        </div>         
             <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12" >
                        <div class="alert alert-info text-center">
                          <h3> NOTIFIKASI</h3> 
                          <hr />
                            <i class="fa fa-warning fa-4x"></i>
                          <p>
                         Ini adalah halaman untuk membuat akun AUTO2000 Drive.
                        </p>
                        <hr />
    
                        </div>
                 </div>
              <div class="col-md-8 col-sm-8 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                           SIGNUP FORM
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url().'cont_user/daftar/1'?>">
                                 <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" type="text" name="nama" require/>
                                  </div>
                                  <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="rdp" value="Pria" checked="">Pria
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="jk" id="rdw" value="Wanita" >Wanita
                                                </label>
                                            </div>
                                        </div>  
                                  <div class="form-group">
                                            <label>Umur</label>
                                            <input class="form-control" type="number" name="umur" required />
                                  </div>
                                  <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" type="text" name="alamat" required />
                                  </div>
                                  <div class="form-group">
                                            <label>No. Telepon</label>
                                            <input class="form-control" type="text" name="notelp" required />
                                  </div>
                                  <div class="form-group">
                                            <label>ID WhatsApp </label>
                                            <input class="form-control" type="text" name="line" required />
                                  </div>      
                                 <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="email" name="email" required />
                                  </div>
                                  <div class="form-group">
                                            <label>Enter Password</label>
                                            <input class="form-control" type="password" name="password" required />
                                  </div>
                                  <div class="form-group">
                                            <label>Re Type Password </label>
                                            <input class="form-control"  type="password" name="password2" required />
                                  </div>
                                        <div class="right-div" style="padding-right: 0px;">
                                        <button type="submit" class="btn btn-primary" style="padding-left: 40px;padding-right: 40px;" name="daftar" >Daftar Sekarang</button>
                                        </div>
                                  </form>
                            </div>
                        </div>
              </div>
              </div>
             <!--END etunjuk Pemesanan -->
        </div>
    </div>