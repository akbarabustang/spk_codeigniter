		<p><?php echo sprintf(lang('forgot_password_subheading'), $identity_label);?></p>
		<div id="infoMessage"><?php echo $message;?></div>
		<?php echo form_open("admin/auth/forgot_password", array("role"=>"form"));?>
			
			<div class="form-forgotpassword-success">
				<i class="entypo-check"></i>
				<h3>Reset email has been sent.</h3>
				<p>Please check your email, reset password link will expire in 24 hours.</p>
			</div>
			
			<div class="form-steps">
				
				<div class="step current" id="step-1">
				
					<div class="form-group">
						<!-- <label for="identity"><?php echo (($type=='email') ? sprintf(lang('forgot_password_email_label'), $identity_label) : sprintf(lang('forgot_password_identity_label'), $identity_label));?></label> <br /> -->
						<div class="input-group">
							<div class="input-group-addon">
								<i class="entypo-mail"></i>
							</div>
							<?php echo form_input($identity);?>
						</div>
					</div>
					
					<div class="form-group">
						<button type="submit" name="submit" class="btn btn-info btn-block btn-login">
							Kirim Email Konfirmasi
							<i class="entypo-right-open-mini"></i>
						</button>
					</div>
				
				</div>
				
				</div>
				
			<?php echo form_close();?>
			<div class="login-bottom-links">
				
				<a href=" <?php echo base_url() ?>admin/Auth/login " class="link">
					<i class="entypo-lock"></i>
					Halaman Login
				</a>
				
				<br />
				
				<a href="#">ToS</a>  - <a href="#">Privacy Policy</a>
				
			</div>
