<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<?php if ($News) { ?>
<div id="news_1" class="popup">
   <div class="scroll-pane">
	   <div class="date"><?php echo date('d F Y', strtotime($News->news_date));?></div>
	  <div class="news_title_home"><?php echo $News->subject;?></div>
	  <?php if (!empty($NewsFile) && is_file($upload_path.$NewsFile->file_name)) { ?>
	  <div class="img_popup_news"><img class="lazy" src="<?php echo URL::site($upload_url.$NewsFile->file_name);?>" alt="<?php echo $News->subject;?>"/></div>
	  <?php } ?>
	  <div style="color: black"><?php echo $News->text;?></div>
	  <p></p>
   </div>
</div>
<?php } ?>