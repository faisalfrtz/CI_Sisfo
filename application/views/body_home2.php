
<div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">File SHaring AUTO2000 Drive</h4>                
            </div>
        </div>  

         <!--   <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="alert alert-info text-center">
                          <h3> NOTIFIKASI</h3> 
                          <hr />
                            <i class="fa fa-warning fa-3x"></i>
                          <hr />
                          <p>
                         File yang di Upload harus berektensi .docx , .pdf , .ppt , .xls , serta maksimal Upload File berukuran 2 Mb.
                        </p>
                        <hr />
                           
                        </div> -->
    </div>
    <div class="col-md-8 col-sm-8 col-xs-12">
      <div class="page-content" id="file-content">
  <div class="portlet box col-md-12 portlet-trans">
    <div class="portlet-body">
      <form action="<?=base_url('file/addnew')?>" method="post" enctype="multipart/form-data" class="form-vertical table-form form-empty">
       
          <div class="control-group">
          <div class="row">
            <div class="col-md-2">
              <h5 class="form-comp">Nama File</h5>
            </div>
            <div class="col-md-1">
              <h5 class="form-comp text-center">:</h5>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                <?= form_input('file') ?>
              <h6>Gunakan '_' sebagai pengganti spasi</h6>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-2">
              <h5 class="form-comp">File</h5>
            </div>
            <div class="col-md-1">
              <h5 class="text-center form-comp">:</h5>
            </div>
            <div class="col-md-9">
              <div class="form-group">
                  <?= form_upload('file') ?>
              <h6>Allowed types : *.zip | *.rar | *.xlsx | *.docx </h6>
                </div>
            </div>
          </div>
        </div>
        <div class="control-group">
          <div class="row">
            <div class="col-md-10">
              <?php 
                $sub = array('name' => 'upload', 'class' => 'btn btn-primary btn-big-bima btn-primary pull-right', 'value' => 'Upload');

                /*$res = array('class' => 'btn btn-white btn-bima btn-big-bima pull-right', 'value' => 'Reset','style'=>'margin-right: 5px');*/
                echo form_submit($sub);
                /*echo form_reset($res);*/
              ?>    
            </div>
          </div>
        </div>
        </form>
    </div>
  </div>
</div>
</div>
<div class="col-md-12" style="margin-top:50px;">
<div class='box-body'>


        <table class="table table-bordered table-striped" id="mytable">

            <thead>
                <tr>
                    <th width="80px">No</th>
            
        <th>Nama File</th>
        <th>File</th>   
        <th>Aksi</th>
                </tr>
            </thead>

      <tbody>
            <?php
            $start = 0;
            foreach ($file_data as $file)
            {
                ?>
                <tr>
        <td><?php echo ++$start ?></td>
        <td><?php echo $file->file_nama ?></td>
        <td><?php echo $file->file_file ?></td>
        
        
        <td style="text-align:center" width="200px">
                            <a href="<?php echo base_url().'file/download/'.$file->file_id ?>">
                              <i class="fa fa-cloud-download" style="font-size:24px;color:#3c87c7"></i>        
                            </a>
                            
                          </td>
          </tr>
                <?php
            }
            ?>
            
            </tbody>

        </table>
        </div>
        <script src="<?php echo base_url('template/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('template/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('template/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div>
    </div>

    
