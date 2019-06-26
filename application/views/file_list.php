
        <!-- Main content -->
        <section class='content'>
          <div class='row'>
            <div class='col-md-12'>
              <div class='box'>
                <div class='box-header'>
                  <h3 class='box-title'>DAFTAR FILE 
                  </h3>

                </div><!-- /.box-header -->
                <div class='box-body'>

        <table class="table table-bordered table-striped" id="mytable">

            <thead>
                <tr>
                    <th width="80px">No</th>
            
		    <th>Nama File</th>
		    <th>File</th>   
		    <th>Action</th>
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
			 <?php 
			     echo anchor(site_url('file/read/'.$file->file_id),'<i class="fa fa-eye"></i>','Unduh',array('title'=>'detail','class'=>'btn btn-danger btn-sm')); 
			         echo '  '; 
			     echo anchor(site_url('file/update/'.$file->file_id),'<i class="fa fa-pencil-square-o"></i>','Ubah',array('title'=>'edit','class'=>'btn btn-danger btn-sm')); 
			         echo '  '; 
			     echo anchor(site_url('file/delete/'.$file->file_id),'<i class="fa fa-trash-o"></i>','Hapus','title="delete" class="btn btn-danger btn-sm" onclick="javasciprt: return confirm(\'Are You Sure to Delete ?\')"'); 
            
			 ?>
		    </td>
	        </tr>
                <?php
            }
            ?>
            
            </tbody>

        </table>
        <div style="margin-top:20px"></div>
                <form action="<?php echo base_url(). 'file/uploadd' ?>" method="post" enctype="multipart/form-data">
                    <input type="file" name="file"/>
                    <input type="submit" value="Upload file"/>
                </form>
        <script src="<?php echo base_url('template/js/jquery-1.11.2.min.js') ?>"></script>
        <script src="<?php echo base_url('template/datatables/jquery.dataTables.js') ?>"></script>
        <script src="<?php echo base_url('template/datatables/dataTables.bootstrap.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $("#mytable").dataTable();
            });
        </script>
                    </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        <!-- 10.14.211.121 -->