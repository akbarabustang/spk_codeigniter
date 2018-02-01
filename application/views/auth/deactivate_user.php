<div class="row">
  <div class="col-md-12">
    
    <div class="panel panel-primary" data-collapsed="0">
    
      <div class="panel-heading">
        <div class="panel-title">
        <h1><?php echo lang('deactivate_heading');?></h1>
        </div>
        
        <div class="panel-options">
            <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg"><i class="entypo-cog"></i></a>
            <a href="#" data-rel="collapse"><i class="entypo-down-open"></i></a>
            <a href="#" data-rel="reload"><i class="entypo-arrows-ccw"></i></a>
            <a href="#" data-rel="close"><i class="entypo-cancel"></i></a>
        </div>
      </div>
      
      <div class="panel-body">
      <?php echo form_open('admin/Auth/deactivate/'.$user->id, array('form'=>'form', 'class'=>'form-horizontal form-groups-bordered'));?>          <div class="form-group">
            <?php echo form_hidden($csrf); ?>
  			<?php echo form_hidden(array('id'=>$user->id)); ?>
            <label class="col-sm-3 control-label"></label>
            <div class="col-sm-5">
           		 <div class="form-group">
					  <?php echo sprintf(lang('deactivate_subheading'), $user->username);?>
	                  <div class="input-group minimal">
	            	<div class="radio radio-replace">
    				  <input type="radio" name="confirm" value="yes" id="optionsRadios1" checked="checked" />
    				  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?><br>
	                </div>
	                <div class="radio radio-replace">	    				
	                	<input type="radio" name="confirm" value="no" />
						<?php echo lang('deactivate_confirm_n_label', 'confirm');?>
	                </div>
	            </div>
                  <br>
                  </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-default">OK</button>
                    <?= anchor('admin/Auth', 'Batal', array('class'=>'btn btn-danger')) ?>
                 
                </div>
            </div>
        
        <?php echo form_close();?>
        
      </div>
      
    </div>
