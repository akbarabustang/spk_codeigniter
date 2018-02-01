<div class="row">
  <div class="col-md-12">
    
    <div class="panel panel-primary" data-collapsed="0">
    
      <div class="panel-heading">
        <div class="panel-title">
        <h1><?php echo lang('edit_user_heading');?></h1>
        <p><?php echo lang('edit_user_subheading');?></p>
        </div>
        
        <div class="panel-options">
            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
        </div>
      </div>
      
      <div class="panel-body">
      <?php echo form_open(uri_string(), array('form'=>'form', 'class'=>'form-horizontal form-groups-bordered'));?>
        <?php echo form_hidden('id', $user->id);?>
        <?php echo form_hidden($csrf); ?>
          <div class="form-group">
            <label class="col-sm-3 control-label"></label>
            
            <div class="col-sm-5">
                  <div id="infoMessage"><?php echo $message;?></div>
                  <?php echo lang('edit_user_fname_label', 'first_name');?> <br />
                  <div class="input-group minimal">
                    <?php echo form_input($first_name);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>
                  
                  <?php echo lang('edit_user_lname_label', 'last_name');?> <br />
                   <div class="input-group minimal">
                    <?php echo form_input($last_name);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br />
                  
                  <?php echo lang('edit_user_company_label', 'company');?> <br />
                  <div class="input-group minimal">
                    <?php echo form_input($company);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>

                  <?php echo lang('edit_user_phone_label', 'phone');?> <br />
                  <div class="input-group minimal">
                    <?php echo form_input($phone);?>
                    <span class="input-group-addon"><i class="entypo-user"></i></span>
                  </div>
                  <br>

                  <?php echo lang('edit_user_password_label', 'password');?> <br />
                  <div class="input-group minimal">
                     <?php echo form_input($password);?>
                    <span class="input-group-addon"><i class="entypo-lock"></i></span>
                  </div>
                  <br>

                  <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?><br />
                  <div class="input-group minimal">
                     <?php echo form_input($password_confirm);?>
                    <span class="input-group-addon"><i class="entypo-lock"></i></span>
                  </div>
                  <br>
                    <div class="form-group">
                  <?php if ($this->ion_auth->is_admin()): ?>
                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                  <?php foreach ($groups as $group):?>
                      <label class="checkbox">
                      <?php
                          $gID=$group['id'];
                          $checked = null;
                          $item = null;
                          foreach($currentGroups as $grp) {
                              if ($gID == $grp->id) {
                                  $checked= ' checked="checked"';
                              break;
                              }
                          }
                      ?>
                      <div class="checkbox checkbox-replace">
                        <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                        <?php echo htmlspecialchars($group['name'],ENT_QUOTES,'UTF-8');?>
                      </div>
                      </label>
                  <?php endforeach?>

                 <?php endif ?>
                </div>
                  <br>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-default">Edit Pengguna</button>
                    <?= anchor('admin/Auth', 'Batal', array('class'=>'btn btn-danger')) ?>
                 
                </div>
            </div>
        
        <?php echo form_close();?>
        
      </div>
      
    </div>
