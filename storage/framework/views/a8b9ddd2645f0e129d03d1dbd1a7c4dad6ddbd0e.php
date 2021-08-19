<?php
$title = "Log In / Sign Up";
$ph = true;
$no_header = true;
$pcClass = "";
?>
<script>let ccndn = 338;</script>


<?php $__env->startSection('content'); ?>
<script>
$(document).ready(() => {
	$('.register-div').hide();
});
</script>
				<div class="container pt-1">
					<form action="<?php echo e(url('login')); ?>" id="login-form" method="post" class="form mt-5">	
						<?php echo csrf_field(); ?>		
                        <input type="hidden" name="rdr" value="<?php echo e($rdr); ?>">
                      <!--  <p class="mb-2">
						Don't have an account? <a href="<?php echo e(url('register').'?rdr='.$rdr); ?>" class="text-secondary">Register</a>
					</p>	-->					
									<label>Email to log in / sign up <span class="req">*</span></label>
									<input type="email" class="form-control" name="id" id="login-email" required="">
									
									<h4 class="text-uppercase">Have a Password? </h4>
									<select id="login-has-pass" name="lhp" class="form-control">
										<option value="none">Select an option</option>
										<option value="yes" selected="selected">Yes</option>
										<option value="no">No</option>
									</select>
									
									<div class="row register-div">
									  <div class="col-md-6">
										<label>First Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-fname" name="fname" class="form-control" placeholder="Your first name">
									  </div>
									  <div class="col-md-6">
									   <label>Last Name <span class="req">*</span></label>
									    <input type="text" id="login-pass-lname" name="lname" class="form-control" placeholder="Your last name">
									  </div>
									</div>
									
									<label>Password <span class="req">*</span></label>
									<input type="password" class="form-control" name="pass" id="login-pass" placeholder="Your password">
										
									<div class="login-div">
                                       <a href="<?php echo e(url('forgot-password')); ?>" class="text-primary">Forgot Password? </a>   
                                    </div>
										
                                    <div class="register-div">
                                       <label>Re-enter Password <span class="req">*</span></label>
				      <input type="password" class="form-control" name="pass_confirmation" id="login-pass-2" placeholder="Confirm password">
				      
				      <div style="margin-bottom: 5px; padding: 10px; border: 1px dashed skyblue;">
				        <p class="mb-2">TIP: Passwords must be at least 8 characters.</p>
					<p>We suggest using a combination of uppercase letters, lowercase letters, numbers and symbols to protect your password.</p>
				      </div>
				      
				      <div style="margin-bottom: 5px;">
				        <h4 class="text-uppercase">How would you like to hear from us?</h4>
					<ul>
					 <li><input type="checkbox" id="mp-email">Email</li>
					 <li><input type="checkbox" id="mp-mail">Direct mail</li>
					 <li><input type="checkbox" id="mp-call">Phone</li>
					 <li><input type="checkbox" id="mp-sms">SMS</li>
					</ul>
					
					<p>
					 We use a market leading third party Company (Sendgrid) to manage our newsletters which gathers statistics around email opening & clicks to help us monitor and improve our services for all. This involves the collection of IP addresses & device information when you open our newsletter. Once signed up you can change your mind at any time by clicking the unsubscribe link in the footer of any email you receive from us. You can contact us at support@mobilebuzzonline.co.uk. View our <a class="text-primary" href="<?php echo e(url('privacy')); ?>">Privacy Policy</a>. By clicking below, you agree that we may process your information in accordance with these terms.
					</p>
				      </div>
                                    </div>
                                    
									<button id="login-submit" class="btn btn-primary btn-reveal-right">SUBMIT <i class="d-icon-arrow-right"></i></button>
								</form>
				</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\bkupp\lokl\repo\ch-store-2\resources\views/login.blade.php ENDPATH**/ ?>