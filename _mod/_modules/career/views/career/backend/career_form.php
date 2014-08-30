<?php defined('SYSPATH') or die('No direct script access.');?>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<?php echo Form::open(ADMIN.$class_name.'/'.$action.'/'.$param, array(
                                                    'enctype' => 'multipart/form-data', 
                                                    'method' => 'post', 
													'class' => 'general autovalid form_details',
                                                    'id' => 'create-career'
                                                    ));
?>
<fieldset>		
        <legend>Career</legend>
		
		<div class="ls6"></div>                    
		<?php echo sprintf($errors['subject'], 'Subject'); ?>
        <span><?php echo Form::label('subject','Subject'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('subject',$fields['subject'],array('id'=>'title', 'class'=>'required')); ?>
        <div class="ls5"></div>

		<div class="ls6"></div>                    
		<?php echo sprintf($errors['name'], 'Name'); ?>
		<span><?php echo Form::label('name','Name'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('name',$fields['name'],array('id'=>'name', 'class'=>'required')); ?>
        <div class="ls5"></div>
		
		<?php if (!empty($show_sentto) && $show_sentto) { ?>
		<div class="ls6"></div>                    		
		<?php echo sprintf($errors['sent_to'], 'Sent To'); ?>
		<span><?php echo Form::label('sent_to','Sent To'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('sent_to',$fields['sent_to'],array('id'=>'sent_to', 'class'=>'required')); ?>
        <div class="ls5"></div>
		<?php } ?>
		
		<?php if (!empty($show_refno) && $show_refno) { ?>
		<div class="ls6"></div>                    
		<?php echo sprintf($errors['ref_no'], 'Ref No'); ?>
		<span><?php echo Form::label('ref_no','Ref No'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('ref_no',$fields['ref_no'],array('id'=>'ref_no', 'class'=>'required')); ?>
        <div class="ls5"></div>
		<?php } ?>
		
		<?php if (!empty($show_reportto) && $show_reportto) { ?>
		<div class="ls6"></div>                    
		<?php echo sprintf($errors['report_to'], 'Report To'); ?>
		<span><?php echo Form::label('report_to','Report To'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('report_to',$fields['report_to'],array('id'=>'report_to', 'class'=>'required')); ?>
        <div class="ls5"></div>		
		<?php } ?>

		<?php if (!empty($show_jobpurpose) && $show_jobpurpose) { ?>
		<div class="ls6"></div>                    
		<?php echo sprintf($errors['job_purpose'], 'Job Purpose'); ?>
		<span><?php echo Form::label('job_purpose','Job Purpose'); ?></span>
        <div class="ls5"></div>	
		<?php echo Form::textarea('job_purpose',$fields['job_purpose'],array('id'=>'job_purpose', 'class'=>'required ckeditor')); ?>
        <div class="ls5"></div>
		<?php } ?>
		
		<?php if (!empty($show_responsibilities) && $show_responsibilities) { ?>		
        <div class="ls6"></div>                    
		<?php echo sprintf($errors['responsibilities'], 'Responsibilities'); ?>
        <span><?php echo Form::label('responsibilities','Responsibilities'); ?></span>
		<div class="ls5"></div>	
		<?php echo Form::textarea('responsibilities',$fields['responsibilities'],array('id'=>'responsibilities', 'class'=>'ckeditor')); ?>
        <div class="ls5"></div>
		<?php } ?>
		
		<div class="ls6"></div>            
        <?php echo sprintf($errors['requirements'], 'Requirements'); ?>
		<span><?php echo Form::label('requirements','Requirements'); ?></span>
        <div class="ls5"></div>
		<?php echo Form::textarea('requirements',$fields['requirements'],array('id'=>'requirements', 'class'=>'required ckeditor')); ?>
        <div class="ls5"></div>

		<?php if (!empty($show_division) && $show_division) { ?>
		<div class="ls6"></div> 
		<?php echo sprintf($errors['division_id'], 'Division'); ?>
        <div class="form_row">
            <label>Division</label>
            <select name="division_id" id="division_id" class="required">
                <option value="">&nbsp;</option>
                <?php foreach ($divisions as $row) : ?>
              <option value="<?php echo $row->id; ?>" class="division_<?php echo $row->id; ?>" <?php if ($fields['division_id'] == $row->id) echo 'selected="selected"';?> >
                <?php echo HTML::chars($row->subject, TRUE); ?></option>
				<?php endforeach; ?>
            </select>
        </div>
		<?php } ?>
		
		<?php if (!empty($show_location) && $show_location) { ?>	
		<div class="ls6"></div> 
		<?php echo sprintf($errors['location'], 'Location'); ?>
        <span><?php echo Form::label('location','Location'); ?></span>
        <div class="ls3"></div>
        <?php echo Form::input('location',$fields['location'],array('id'=>'location', 'class'=>'required')); ?>
		<?php } ?>
		
		<?php echo sprintf($errors['start_date'], 'Start Date'); ?>
        <div class="ls6"></div>
        <span><?php echo Form::label('start_date','Start Date'); ?><sup style="font-size: 90%;"><?php echo i18n::get('date_format');?></sup></span>
        <div class="ls3"></div>
        <?php echo Form::input('start_date',$fields['start_date'],array('id'=>'start_date', 'class'=>'required simpledate')); ?>

		<?php echo sprintf($errors['end_date'], 'End Date'); ?>
        <div class="ls6"></div>
        <span><?php echo Form::label('end_date','End Date'); ?><sup style="font-size: 90%;"><?php echo i18n::get('date_format');?></sup></span>
        <div class="ls3"></div>
        <?php echo Form::input('end_date',$fields['end_date'],array('id'=>'end_date', 'class'=>'required simpledate')); ?>
        
		<?php if (!empty($show_company) && $show_company) { ?>
		<?php echo sprintf($errors['company'], 'Company'); ?>
        <span><?php echo Form::label('company','Company'); ?></span>
        <div class="ls5"></div>
        <?php echo Form::input('company',$fields['company'],array('id'=>'company', 'class'=>'required')); ?>
        <div class="ls5"></div>
		<?php } ?>
		
		<?php if (!empty($fields['ext_link1'])) { ?>    
		<?php echo sprintf($errors['ext_link1'], 'Link 1'); ?>
         <div class="ls5"></div>
            <span><?php echo Form::label('ext_link1','Link 1'); ?></span>
			<?php echo Form::input('ext_link1',$fields['ext_link1'],array('id'=>'ext_link1', 'class'=>'required', 'size'=>'42')); ?>
			* JobStreet
         <div class="ls5"></div><div class="ls5"></div>
		<?php } ?>
		 
		 <?php if (!empty($fields['ext_link2'])) { ?>  
		<?php echo sprintf($errors['ext_link2'], 'Link 2'); ?>
         <div class="ls5"></div>
            <span><?php echo Form::label('ext_link2','Link 2'); ?></span>
			<?php echo Form::input('ext_link2',$fields['ext_link2'],array('id'=>'ext_link2', 'class'=>'required', 'size'=>'42')); ?>
            * JobsDB
         <div class="ls5"></div>
		<?php } ?>
		 
        <div class="ls5"></div>
		<?php echo sprintf($errors['status'], 'Status'); ?>
        <div class="form_row">
            <label>Status</label>
            <select name="status" id="status" class="required">
                <option value="">&nbsp;</option>
                <?php foreach ($statuses as $row) : ?>
                <option value="<?php echo $row; ?>" <?php echo ($fields['status'] == $row) ? 'selected="selected"' : ''; ?>><?php echo HTML::chars(ucfirst($row), TRUE); ?></option>
                <?php endforeach; ?>
            </select>
        </div>
		<div class="ls5"></div>
		
        <div class="clear ls10"></div>
</fieldset>
<div class="clear ls10"></div>        
<div class="bar"></div>
<div class="ls10"></div>
<?php echo Form::submit('submit', strtoupper($action), array('class' => 'btn btn-sm btn-primary')); ?>
<?php echo Form::close(); ?>
