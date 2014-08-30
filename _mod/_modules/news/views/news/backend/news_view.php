<?php defined('SYSPATH') or die('No direct script access.');

$arr_status = i18n::get('status_value');
$arr_lang = i18n::get('system_language');
?>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>

<?php if (!isset($news)) : ?>
    <div class="warning3"><?php echo i18n::get('error_no_news'); ?></div>
<?php else: ?>    
<form class="form_details" action="<?php echo url::site(ADMIN.$class_name.'/edit/'.$news->id); ?>" method="get" enctype="multipart/form-data">
<div class="form_details">
	
	<div class="form_row">
		<label><?php echo i18n::get('Subject');?></label>
		<div class="form_fields"><?php echo $news->subject; ?></div>
	</div>
	
	<div class="form_row">
		<label><?php echo i18n::get('name');?></label>
		<div class="form_fields"><?php echo ($news->name) ? $news->name : '-'; ?></div>
	</div>	
	
	<div class="form_row">
		<label><?php echo i18n::get('status');?></label>
		<div class="form_fields"><?php echo ucfirst($news->status);//echo $arr_status[$news->status]; ?></div>
	</div>	
			
	<div class="form_row">
		<label>Job Title</label>
		<div class="form_fields"><?php echo ($news->subject) ? $news->subject : '-'; ?></div>
	</div>
	
	<div class="form_row">
		<label>Synopsis</label>
		<div class="form_fields"><?php echo ($news->synopsis) ? $news->synopsis : '-'; ?></div>
	</div>

	<div class="form_row">
		<label>Text</label>
		<div class="form_fields"><?php echo ($news->text) ? $news->text : '-'; ?></div>
	</div>

	<div class="form_row">
		<label>News Date</label>
		<div class="form_fields"><?php echo $news->news_date; //echo $this->_reverse_date($news->start_date); ?></div>
	</div>
	
	<?php if (isset($show_upload) && $show_upload) : ?>
        <?php foreach ($uploads as $row_name => $row_params) : ?>
		<?php if (isset($files[$row_name]) && count($files[$row_name]) != 0) : ?>	
            <fieldset style="clear:both;">
                <legend><strong><?php echo $row_params['label']; ?></strong></legend>
				<?php if (!empty($files[$row_name])) : ?>
                <div class="form_row">
                    <label><?php echo $row_params['label']; ?></label>
                    <div class="form_fields">
                        <?php if (is_file($upload_path.$files[$row_name]->file_name) && in_array($files[$row_name]->file_type, $readable_mime)) : ?>
                        <div id="file_<?php echo $files[$row_name]->id; ?>">
                            <?php if (substr($files[$row_name]->file_type, 0, strlen('image/')) == 'image/') : ?>
                            <?php
                                $file_data	= pathinfo(URL::base().$upload_url.$files[$row_name]->file_name);
                                $thumb_ext	= isset($row_params['image_manipulation']['thumbnails'][0]) ? '_resize_'.$row_params['image_manipulation']['thumbnails'][0] : '';
                            ?>
                            <img src="<?php echo URL::base().$upload_url.$file_data['filename'].$thumb_ext.'.'.$file_data['extension']; ?>" alt="<?php echo URL::base().Lib::config($class_name.'.upload_url').$files[$row_name]->file_name; ?>" />
                            <?php elseif (substr($files[$row_name]->file_type, 0, strlen('audio/')) == 'audio/') : ?>
                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="20" id="FLVPlayer">
                                <param name="movie" value="<?php echo ASSETS; ?>flash/singlemp3player.swf" />
            
                                <param name="quality" value="high" />
                                <param name="wmode" value="opaque" />
                                <param name="scale" value="noscale" />
                                <param name="salign" value="lt" />
                                <param name="FlashVars" value="file=<?php echo URL::site(ADMIN.$class_name.'/download/'.$files[$row_name]->file_name); ?>&amp;backColor=c2c2c2&amp;frontColor=666666&amp;showDownload=false&amp;repeatPlay=false&songVolume=100" />
                                <param name="swfversion" value="8,0,0,0" />
                                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don?t want users to see the prompt. -->
                                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            
                                <!--[if !IE]>-->
                                <object type="application/x-shockwave-flash" data="<?php echo ASSETS; ?>flash/singlemp3player.swf" width="320" height="20">
                                <!--<![endif]-->
                                    <param name="quality" value="high" />
                                    <param name="wmode" value="opaque" />
                                    <param name="scale" value="noscale" />
                                    <param name="salign" value="lt" />
                                    <param name="FlashVars" value="file=<?php echo URL::site(ADMIN.$class_name.'/download/'.$files[$row_name]->file_name); ?>&amp;backColor=c2c2c2&amp;frontColor=666666&amp;showDownload=false&amp;repeatPlay=false&songVolume=100" />
                                    <param name="swfversion" value="8,0,0,0" />
            
                                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                                    <div>
                                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
                                    </div>
                                <!--[if !IE]>-->
                                </object>
            
                                <!--<![endif]-->
                            </object>
                            <?php else : ?>
                            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="320" height="240" id="FLVPlayer">
                                <param name="movie" value="<?php echo URL::base(); ?>flash/FLVPlayer_Progressive.swf" />
            
                                <param name="quality" value="high" />
                                <param name="wmode" value="opaque" />
                                <param name="scale" value="noscale" />
                                <param name="salign" value="lt" />
                                <param name="FlashVars" value="skinName=<?php echo URL::base(); ?>flash/Corona_Skin_2&amp;streamName=<?php echo URL::site(ADMIN.$class_name.'/download/'.$files[$row_name]->file_name); ?>&amp;autoPlay=false&amp;autoRewind=false" />
                                <param name="swfversion" value="8,0,0,0" />
                                <!-- This param tag prompts users with Flash Player 6.0 r65 and higher to download the latest version of Flash Player. Delete it if you don?t want users to see the prompt. -->
                                <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                <!-- Next object tag is for non-IE browsers. So hide it from IE using IECC. -->
            
                                <!--[if !IE]>-->
                                <object type="application/x-shockwave-flash" data="<?php echo URL::base(); ?>flash/FLVPlayer_Progressive.swf" width="320" height="240">
                                <!--<![endif]-->
                                    <param name="quality" value="high" />
                                    <param name="wmode" value="opaque" />
                                    <param name="scale" value="noscale" />
                                    <param name="salign" value="lt" />
                                    <param name="FlashVars" value="skinName=<?php echo URL::base(); ?>flash/Corona_Skin_2&amp;streamName=<?php echo URL::site(ADMIN.$class_name.'/download/'.$files[$row_name]->file_name); ?>&amp;autoPlay=false&amp;autoRewind=false" />
                                    <param name="swfversion" value="8,0,0,0" />
            
                                    <param name="expressinstall" value="Scripts/expressInstall.swf" />
                                    <!-- The browser displays the following alternative content for users with Flash Player 6.0 and older. -->
                                    <div>
                                    <h4>Content on this page requires a newer version of Adobe Flash Player.</h4>
                                    <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></p>
                                    </div>
                                <!--[if !IE]>-->
                                </object>
            
                                <!--<![endif]-->
                            </object>
                            <?php endif; ?>
                        </div>
                        <?php else: ?>
                        Cannot preview this file
                        <?php endif; ?>
                    </div>
                </div>
            
                <div class="form_row">
                    <!--label class="no_border">&nbsp;</label-->
                    <div class="form_field"><a href="<?php echo URL::site(ADMIN.$class_name.'/download/'.$files[$row_name]->file_name); ?>"><img src="<?php echo IMG ?>admin/disk.png" alt="<?php echo $files[$row_name]->file_name; ?>" /></a></div>
                </div>
            
                <?php if (isset($row_params['caption']) && $row_params['caption']) : ?>
                <div class="form_row">
                    <label>Caption</label>
                    <div class="form_field"><?php echo HTML::chars($files[$row_name]->caption, TRUE); ?></div>
                </div>
                <?php endif; ?>
            
                <?php endif; ?>
        	</fieldset>    
		<?php endif; ?>
        <?php endforeach; ?>
    <?php endif; ?>
	
	<?php /* if (!empty($news_files)) : ?>
		<fieldset>
			<legend><strong>Files</strong></legend>
			<div class="img_holder_xhr">				
			<?php foreach ($news_files as $files): ?>
				<div class="pull-left img-thumbnail">
					<a class="colorbox" rel="groupbox" href="<?php echo URL::site($files_upload_url . $files->file_name);?>">
						<img class="img-rounded" src="<?php echo URL::site($files_upload_url . str_replace('.', '_crop_80x80.', $files->file_name));?>"/>
					</a>	
					<div class="label-function hidden">
					<a href="<?php echo URL::site(ADMIN.$class_name.'/filedelete/' . $files->id); ?>" title="Delete" class="label label-default delete_function" onclick="javascript:void(0);">DELETE</a>
					<a href="<?php echo URL::site(ADMIN.$class_name.'/filechange/' . $files->id); ?>" title="Change" class="label label-default change_function ajax" onclick="javascript:void(0);">CHANGE</a>
					</div>
				</div>
			<?php endforeach; ?>	
			</div> 
			<div class="clear topBotDiv20"></div>
			<input id="fileupload" class="file" type="file" name="files" rel="<?php echo $news->id;?>" data-url="<?php echo URL::site(ADMIN.$class_name.'/fileupload/'.$news->id)?>" multiple/>				
			<div class="clear"></div>				
		</fieldset>		
		<?php else : ?>		
		<fieldset>
			<legend><strong>Files</strong></legend>						
			<div class="img_holder_xhr"></div>
			<div class="clear topBotDiv20"></div>
			<input id="fileupload" class="input-sm" type="file" name="files" rel="<?php echo $news->id;?>" data-url="<?php echo URL::site(ADMIN.$class_name.'/fileupload/'.$news->id)?>" multiple/>
			<div class="clear"></div>			
		</fieldset>	
		<?php endif; */ ?>
	
	<!-- The global progress bar -->
    <div id="progress" class="progress" style="display:none">
        <div class="progress-bar progress-bar-success"></div>
    </div>
	
	<div class="form_row">
		<label>Created</label>
		<div class="form_field"><?php echo ($news->added != 0) ? date(Lib::config('admin.date_format'), $news->added) : '-'; ?></div>
	</div>

	<div class="form_row">
		<label>Last Modified</label>
		<div class="form_field"><?php echo ($news->modified != 0) ? date(Lib::config('admin.date_format'), $news->modified) : '-'; ?></div>
	</div>
	<div class="ls10"></div>
<?php endif; ?>

<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>

	<div class="form_row">
		<?php echo Form::submit(NULL, '', array('class' => 'btn_edit btn-primary span2')); ?>
	</div>
<?php echo Form::close();?>

</div>
