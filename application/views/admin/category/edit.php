
 <?php $this->load->view('include/admin_header');?>
 <?php $this->load->view('include/sidebar');?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-offset-3 col-md-6">

          <div class="box box-danger">
            <div class="box-header">
              <h3 class="box-title">Category Update</h3>
            </div>
            <form name="frm" action="<?php echo base_url('admin/category/cat_update');?>" method="post">
            <div class="box-body">
              <div class="form-group">
                <label>Category ID</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Category_ID" value="<?php echo $category[0]->Category_ID;?>" >
                </div>
              </div>

              <div class="form-group">
                <label>Engine_Classification</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" name="Category_Name" value="<?php echo $category[0]->Category_Name;?>">
                  <input type="hidden" class="form-control" name="cat_id" value="<?php echo $category[0]->cat_id;?>">
                </div>
              </div>
               <div class="form-group">
                <div class="input-group">
                 
                  <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                </div>
              </div>
            </div>
            </form>
          </div>
        </div>
       
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
<?php $this->load->view('include/admin_footer');?>