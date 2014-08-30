<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>

<!-- form forgot password -->
<div class="column">
	<h4 class="head">Put your email to reset password</h4>
	<?php echo Form::open('', array('class'=>'navbar-form','method'=>'POST','role'=>'form','id'=>'forgot_password')); ?>
	<div class="form-group">
		<?php echo Form::label('email'); ?>
		<?php echo Form::input('email', $fields['email'], array('class'=>'form-control','placeholder'=>'Email..'));?> 
	</div>
	<div class="form-group">
		<div class="pull-left">
			<?php echo Form::button('submit', 'Submit', array('class'=>'btn btn-primary')); ?>
		</div>
		<div class="pull-left col-xs-8">
			<div id="result" class="hide"><img src="<?php echo ASSETS;?>images/system/ajax-loader.gif" alt="Loading"/></div>
		</div>
	</div>
	<?php echo Form::close(); ?>	
</div>