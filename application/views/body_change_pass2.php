<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Change Password</h4>                
            </div>
        </div>         
             <!-- <div class="row">
              <div class="col-md-4 col-sm-4 col-xs-12" >
                        <div class="alert alert-info text-center">
                          <h3> NOTIFIKASI</h3> 
                          <hr />
                            <i class="fa fa-warning fa-4x"></i>
                          <p>
                         Isilah data dengan benar dan menggunakan kontak yang dapat dihubungi. Jika memiliki kesulitan saat pengisian formulir anda bisa menghubungi kami.
                        </p>
                        <hr />
                           <a href="#" class="btn btn-info">Hubungi Kami</a> 
                        </div>
                 </div> -->
              <div class="col-md-8 col-sm-8 col-xs-12">
               <div class="panel panel-danger">
                        <div class="panel-heading">
                          Change Password Form
                        </div>
                        <div class="panel-body">
                            <form role="form" method="post" action="<?php echo base_url().'cont_user/viewChangePass/'.$uid ?> ">
                            
                                 <div class="form-group">
                                            <label>New Password</label>
                                            <input class="form-control" type="password" name="pass1" required />
                                  </div>
                                  <div class="form-group">
                                            <label>Re-Type Password</label>
                                            <input class="form-control" type="password" name="pass2" required />
                                  </div>
                                  
                                        <div class="right-div" style="padding-right: 0px;">
                                        <button type="submit" class="btn btn-success" style="padding-left: 40px;padding-right: 40px;" name="change" >Change</button>
                                        </div>
                                  </form>
                            </div>
                        </div>
              </div>
              </div>
             <!--END etunjuk Pemesanan -->
        </div>
    </div>