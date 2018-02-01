<div class="row">
  <div class="col-md-12">
    
    <div class="panel panel-primary" data-collapsed="0">
    
      <div class="panel-heading">
        <div class="panel-title">
        <h1><?php echo lang('create_user_heading');?></h1>
        <p><?php echo lang('create_user_subheading');?></p>
        </div>
        
        <div class="panel-options">
            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
        </div>
      </div>
      
      <div class="panel-body">
        <?= form_open('admin/auth/create_user', array('form'=>'form', 'class'=>'form-horizontal form-groups-bordered')); ?>
          
          <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            
            <div class="col-sm-5">
                  <div id="infoMessage"><?php echo $message;?></div>
                  <div class="input-group minimal">
                    <?php echo form_input($first_name);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>
                   <div class="input-group minimal">
                    <?php echo form_input($last_name);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>
                  <?php
                  if($identity_column!=='email') {
                      echo '<p>';
                      echo lang('create_user_identity_label', 'identity');
                      echo '<br />';
                      echo form_error('identity');
                      echo form_input($identity);
                      echo '</p>';
                  }
                  ?>
                  <div class="input-group minimal">
                    <?php echo form_input($email);?>
                    <span class="input-group-addon"><i class="entypo-mail"></i></span>
                  </div>
                  
                  <br />
                  
                  <div class="input-group minimal">
                    <?php echo form_input($company);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>

                  <div class="input-group minimal">
                    <?php echo form_input($phone);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>

                  <div class="input-group minimal">
                     <?php echo form_input($password);?>
                    <span class="input-group-addon"><i class="entypo-lock"></i></span>
                  </div>
                  <br>

                  <div class="input-group minimal">
                     <?php echo form_input($password_confirm);?>
                    <span class="input-group-addon"><i class="entypo-lock"></i></span>
                  </div>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-3 col-sm-5">
              <button type="submit" name="submit" class="btn btn-default">Buat Pengguna</button>
              <?= anchor('admin/Auth', 'Batal', array('class'=>'btn btn-danger')) ?>
            </div>
          </div>
        
        <?php echo form_close();?>
        
      </div>
      
    </div>
