<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<section id="middle">
   <section id="sectionFirst" class="wrapper data_slide" data-slide="1">
      <div class="section_skew">
         <div class="img_bg wow fadeIn animated">
			 <?php if (is_file($MenuPath.$MenuHomeFile->file_name)) {?>
				<img src="<?php echo URL::site($MenuUrl.str_replace('.', '_resize_1920x760.',$MenuHomeFile->file_name));?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="10"/>			
			 <?php } ?>
         </div>
      </div>
      <div class="wrapper">
         <ul class="axi_caption">
		<?php 
		$o = 0;
		foreach ($PageHome as $home) {
			echo '<li>';
			if ($o === 0) {
				$anim1 = sprintf('<div class="caption_1 wow flipInXTwice animated" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="2" data-scroll-reveal="enter after .5s">%s</div>', Text::limit_words($home->subject,8));
				$anim2 = sprintf('<div class="caption_2 wow fadeInUp flipInXTwice animated" data-wow-duration="1s" data-wow-delay="2s" data-wow-iteration="2" data-scroll-reveal="enter after .7s">%s</div>',Text::limit_words($home->text,18));
			} else {
				$anim1 = sprintf('<div class="caption_1 wow flipInXTwice animated">%s</div>',Text::limit_words($home->subject,8));
				$anim2 = sprintf('<div class="caption_2 wow flipInXTwice animated">%s</div>',Text::limit_words($home->text,18));
			}
			echo $anim1;
			echo $anim2;
			echo '</li>';
		$o++;
		} 
		?>
          </ul>
      </div><!--end wrapper-->
   </section><!--  -->
   <section id="sectionSecond" class="wrapper data_slide" data-slide="2">
		<div class="section_skew">
		   <div class="img_bg wow fadeInLeft animated">
			  <?php if (!empty($MenuHomeFile) && is_file($MenuPath.$MenuHomeFile->file_name)) {?>
				  <img src="<?php echo URL::site($MenuUrl.$MenuAxiFile->file_name);?>" alt="" data-stellar-ratio=".3" data-stellar-horizontal-offset="60"/>
			  <?php } ?>
		   </div>
		</div>
		<div class="wrapper_12">		 
			<h2 class="sc_title line_1 wow bounceIn animated" data-wow-delay="1.5s"><?php echo $PageAxi[0]->subject;?></h2>
			<div class="intro wow zoomInDown animated" data-wow-offset="200"><?php echo $PageAxi[0]->text;?></div>
		</div>
   </section><!--  -->
   <section id="sectionThird" class="wrapper data_slide" data-slide="3">
      <h2 class="general_title line_1 wow slideInLeft animated" data-wow-offset="260"><?php echo $PageAxi[1]->subject;?></h2>
      <div class="section_skew">
		<?php if (!empty($PageAxiFile) && is_file($PagePath.$PageAxiFile->file_name)) {?>
        <div class="img_bg wow fadeInDown animated" data-wow-duration="5s" data-wow-offset="200">
            <img src="<?php echo URL::site($PageUrl.$PageAxiFile->file_name);?>" alt="" data-stellar-ratio=".1" data-stellar-horizontal-offset="10"/>
        </div>
		<?php } ?>
      </div>
      <div class="wrapper_16">
		  <?php 
		  $i = 1;
		  $s = count($Management);
		  foreach($Management as $Man) { 
			  echo ($i % 3 == 0 && $i == 3 && $s > 5) ? '<div id="owl-demo" class="owl-theme">' : '';
		  ?>
		  	<div class="grid_<?php echo ($i > 2) ? 6 : 12;?>">
				<div class="center_manage <?php echo ($i == 1) ? 'right' : '';?>">
				   <div class="round wow bounceIn animated" data-wow-offset="250">
					   <?php if(!empty($ManFile->load_by_group($Man->id)->file_name)) { ?>
					   <img class="lazyOwl" data-src="<?php echo URL::site($ManUrl.$ManFile->load_by_group($Man->id)->file_name);?>" src="<?php echo URL::site($ManUrl.$ManFile->load_by_group($Man->id)->file_name);?>" alt=""/>
					   <?php } ?>
				   </div>
				   <div class="wow bounceIn<?php echo ($i == 1) ? 'Left' : 'Up';?> animated" data-wow-delay="1.5s">
					  <div class="semibold"><?php echo $Man->name;?></div>
					  <div class="light"><?php echo $Man->position;?></div>
				   </div>
				</div>
			</div>
		  <?php 
				echo ($i % $s == 0) ? '</div>' : '';
				echo ($i == 2) ? '<p class="clear"></p>' :'';			
		  $i++;
		  } ?>
      </div>
      <p class="clear"></p>
   </section><!--  -->
   <section id="sectionFourth" class="wrapper data_slide" data-slide="4">
      <div class="border_top">&nbsp;</div>
      <div class="section_skew">
         <div class="relative">
			<?php if (!empty($MenuXprinsFile) && is_file($MenuPath.$MenuXprinsFile->file_name)) { ?>               
            <!--div class="img_bg" style="background: url('<?php echo URL::site($MenuUrl.$MenuXprinsFile->file_name);?>') right top no-repeat"-->
			 <div class="img_bg"> 
			<img src="<?php echo URL::site($MenuUrl.$MenuXprinsFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="60"/>				
            </div>
			<?php } ?>
         </div>
      </div>
      <div class="bg_section">
         <div class="wrapper_20">
            <div class="left">
				<?php if (!empty($MenuXprinsLogo->file_name) && is_file($MenuPath.$MenuXprinsLogo->file_name)) { ?>					<div class="img wow bounceInLeft animated" data-wow-offset="200">
					<img src="<?php echo URL::site($MenuUrl.$MenuXprinsLogo->file_name);?>" alt=""/>
				</div>
				<?php } ?>
               <div class="section_content">				   
               <h2 class="general_title line_2 wow pulse animated" data-wow-offset="200"><?php echo $MenuXprins->name;?></h2>
                  <div class="intro wow slideInLeft animated" data-wow-offset="200">
                  <?php echo $MenuXprins->description;?>
               </div>
               </div>
				<?php if (!empty($MenuXprins->url)) { ?>
					<a class="more_1 more_a wow zoomInUp animated" data-wow-offset="100" target="_blank" href="<?php echo $MenuXprins->url;?>">Visit the site</a>
				<?php } ?>
			   <span>&nbsp;&nbsp;&nbsp;&nbsp;</span>
			   <?php if(!empty($MenuXprins->media) && is_file($MediaPath.$MenuXprins->media)) { ?> 
               <a class="btn_1 wow flipInXTwice animated" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="2" data-scroll-reveal="enter after .5s" href="<?php echo URL::site('download/'.base64_encode($MediaUrl.$MenuXprins->media));?>">Download brochure pdf
			   </a>
			   <?php } ?>
            </div>
            <p class="clear"></p>
         </div>
      </div>
   </section>
   <section id="sectionFifth" class="wrapper data_slide" data-slide="5">
      <div class="border_top">&nbsp;</div>
      <div class="section_skew">
         <div class="relative">
			 <?php if (!empty($MenuLGFile) && is_file($MenuPath.$MenuLGFile->file_name)) { ?>   
            <div class="img_bg">
               <img src=" <?php echo URL::site($MenuUrl.$MenuLGFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="60"/>			  
            </div>
			 <?php } ?>
         </div>
      </div>
      <div class="bg_section">
         <div class="wrapper_20">
            <div class="right">
				<?php if (!empty($MenuLGLogo) && is_file($MenuPath.$MenuLGLogo->file_name)) { ?>
				<div class="img right wow rubberBand animated" data-wow-offset="200">
					<img src="<?php echo URL::site($MenuUrl.$MenuLGLogo->file_name);?>" alt=""/>
				</div>
				<?php } ?>
               <div class="section_content">
               <h2 class="general_title line_2 clear wow shake animated" data-wow-offset="200"><?php echo $MenuLG->title;?></h2>
               <div class="wow tada animated" data-wow-offset="100">
                  <?php echo $MenuLG->description;?>
               </div>
               </div>
				<?php if (!empty($MenuLG->url)) { ?>
               <a class="more_1 more_a wow bounceInUp animated" data-wow-offset="100" target="_blank" href="<?php echo $MenuLG->url;?>">Visit the site</a>
               <?php } ?>
			   <p>&nbsp;</p>	
			   <?php if(!empty($MenuLG->media) && is_file($MediaPath.$MenuLG->media)) { ?>
               <a class="btn_2 wow flipInXTwice animated" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="2" data-scroll-reveal="enter after .5s" href="<?php echo URL::site('download/'.base64_encode($MediaUrl.$MenuLG->media));?>">Download brochure pdf</a>
			   <?php } ?>
            </div>
            <p class="clear"></p>
         </div>
      </div>
   </section>
   <section id="sectionSixth" class="wrapper data_slide" data-slide="6">
      <div class="border_top">&nbsp;</div>
      <div class="section_skew">
         <div class="relative">			 
			<?php if (!empty($MenuLGEFile) && is_file($MenuPath.$MenuLGEFile->file_name)) { ?>
			 <div class="img_bg">      								
			   <img src="<?php echo URL::site($MenuUrl.$MenuLGEFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="60"/>				 
			 </div>
			<?php } ?>
         </div>
      </div>
      <div class="bg_section">
         <div class="wrapper_20">
            <div class="left">				
				<?php if (!empty($MenuLGELogo) && is_file($MenuPath.$MenuLGELogo->file_name)) { ?>				
				<div class="img wow wobble animated" data-wow-offset="300">
					<img src="<?php echo URL::site($MenuUrl.$MenuLGELogo->file_name);?>" alt=""/>
				</div>
				<?php } ?>			   
               <h2 class="general_title line_2 wow zoomInRight animated" data-wow-offset="300"><?php echo $MenuLGE->title;?></h2>
               <div class="intro wow bounceIn animated" data-wow-offset="300">
                  <?php echo $MenuLGE->description;?>
               </div>
			   <?php if (!empty($MenuLGE->url)) { ?>
               <a class="more_1 more_a wow slideInRight animated" data-wow-offset="200" target="_blank" href="<?php echo $MenuLGE->url;?>">Visit the site</a>
			   <?php } ?>
			   <p>&nbsp;</p>
			   <?php if(!empty($MenuLGE->media) && is_file($MediaPath.$MenuLGE->media)) { ?>
               <a class="btn_3 wow flipInXTwice animated" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="2" data-wow-offset="300" data-scroll-reveal="enter after .5s" href="<?php echo URL::site('download/'.base64_encode($MediaUrl.$MenuLGE->media));?>">Download brochure pdf</a>
			   <?php } ?>
            </div>
            <p class="clear"></p>
         </div>
      </div>
   </section><!--  -->

   <section id="sectionSeventh" class="wrapper data_slide" data-slide="7">
      <div class="border_top">&nbsp;</div>
      <div class="section_skew">
         <div class="relative">			 
			<?php if (!empty($MenuNewsFile) && is_file($MenuPath.$MenuNewsFile->file_name)) { ?>
            <div class="img_bg">
			   <img src="<?php echo URL::site($MenuUrl.$MenuNewsFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="60"/>
			</div>
			<?php } ?> 
         </div>
      </div>
      <div class="section_title line_1 wow zoomIn animated" data-wow-offset="400">News & Event</div>
		<?php 
		$i=0;
		$g=count($News);
		?>
		<div id="<?php echo ($g > 2) ? 'basicCarousel' : 'single_news';?>" class="<?php echo ($g > 2) ? 'owl-carousel owl-theme' : '';?>">	
		<?php
		  foreach ($News as $Val) { ?>
		  <div class="owl-item wow bounceIn animated" data-wow-offset="500" data-wow-delay=".2s" data-scroll-reveal="enter ease">
            <div class="news_grid">			
			   <?php if (!empty($NewsFile->load_by_group($Val->id)->file_name) && is_file(@$news_upload_path.$NewsFile->load_by_group($Val->id)->file_name)) {?>
               <div class="img wow ">
				   <img src="<?php echo URL::site($news_upload_url.$NewsFile->load_by_group($Val->id)->file_name);?>" alt=""/>
               </div>
			   <?php } ?>				
               <div class="date"><?php echo date('d F Y', strtotime($Val->news_date));?></div>
               <div class="news_title_home line_1"><?php echo $Val->subject;?></div>
               <div class="intro_news wow "><?php echo $Val->text;?></div>
               <a class="more_1 fancybox" href="<?php echo URL::site('xhr/read_news/'.$Val->name);?>">Read more</a>			   
            </div>
         </div>
		  <?php 		  
		  $i++;
		  } 
		  ?>
      </div>
      <p class="clear">&nbsp;</p>      
   </section><!--  -->
   <section id="sectionEighth" class="wrapper data_slide" data-slide="8">
      <div class="border_top">&nbsp;</div>
      <div class="section_skew">
         <div class="img_bg">			 
			<?php if (!empty($MenuGrowWuFile) && is_file($MenuPath.$MenuGrowWuFile->file_name)) {?>         
            <img src="<?php echo URL::site($MenuUrl.$MenuGrowWuFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="60"/>
			 <?php } ?>
         </div>
      </div>
      <div class="wrapper_16">
         <div class="left">
            <div class="section_title line_1 wow fadeInLeftBig animated" data-wow-offset="300">
				<?php echo $MenuGrowWu->title;?>
			</div>
            <div class="intro wow slideInUp animated" data-wow-offset="200">
               <?php echo $MenuGrowWu->description;?>
            </div>
            <p>&nbsp;</p>
            <a class="more_2 wow zoomInRight animated read_vcncy" data-wow-offset="300" href="#jobListing">View job listing</a>
         </div>		  
		 <?php if (!empty($MenuGrowWuLogo) && is_file($MenuPath.$MenuGrowWuLogo->file_name)) {?>               
         <div class="img_group_people wow slideInRight animated" data-wow-offset="300">
            <img src="<?php echo URL::site($MenuUrl.$MenuGrowWuLogo->file_name);?>" alt="" />
         </div>
		 <?php } ?>
      </div>
	  <div class="hide">
		<div id="jobListing" class="popup">
		   <div class="scroll-pane">			   
			   <?php foreach($Career as $Key) {?>
			   <div class="append_bottom_3">
				 <div class="popup_title_2"><?php echo $Key->subject;?></div>
				 <div>Kualifikasi :</div>
				 <div><?php echo $Key->requirements;?></div>
			  </div>
			   <?php } ?>			    
		   </div>
		</div>
	 </div>	  
   </section><!--  -->

   <section id="sectionMap" class="wrapper data_slide clear" data-wow-offset="300" data-slide="9">
      <div id="axiMap" data-url="<?php echo $Gmaps;?>"></div>
   </section><!--  -->
   <section id="sectionContact" class="wrapper data_slide" data-slide="10">
      <div class="section_skew">
         <div class="img_bg">
			<?php if (!empty($MenuGrowWuFile) && is_file($MenuPath.$MenuGrowWuFile->file_name)) {?>            
            <img src="<?php echo URL::site($MenuUrl.$MenuContactFile->file_name);?>" alt="" data-stellar-ratio=".2" data-stellar-horizontal-offset="10"/>
			<?php } ?>
         </div>
      </div>
      <div class="wrapper_16">
         <div class="section_title line_1 wow slideInDown animated" data-wow-offset="200">Contact</div>
         <div class="grid_6 wow bounceInLeft animated" data-wow-offset="200">
			 <div class="address_data"><?php echo $Address->value;?></div>
         </div>
         <?php if (!empty($statusForm)) { echo '<div style="margin:0 0 20px 330px;"><div class="subject">', ucfirst($statusForm['status']),'</div><div class="message">',$statusForm['message'],'</div></div>'; } ?>
         <form id="contactForm" class="form" action="<?php echo $_SERVER['REQUEST_URI'];?>#contactForm" method="POST">
            <div class="grid_9">
               <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <input type="text" class="bg_input input_fluid required" value="<?php echo !empty($name) ? $name : '';?>" placeholder="Your name (required)" name="name" />
               </div>
               <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".5s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <input type="text" class="bg_input input_fluid required" value="<?php echo !empty($phone) ? $phone : '';?>" placeholder="Your phone number (required)" name="phone"  />
               </div>
               <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay=".2s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <input type="text" class="bg_input input_fluid required" value="<?php echo !empty($email) ? $email : '';?>" placeholder="Your email (required)" name="email"  />
               </div>
            </div>
            <div class="grid_9">
               <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay="1.2s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <textarea class="bg_input input_fluid required" placeholder="Your message (required)" name="message" ><?php echo !empty($message) ? $message : '';?></textarea>
               </div>
			   <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay="1.5s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <input type="text" class="bg_input input_fluid_half required" value="" placeholder="Captcha (required)" name="captcha" />
				  <a href="<?php echo URL::site('xhr/captcha_reload'); ?>" id="reload_captcha" title="<?php echo __('captcha_reload');?>" class="reload_captcha inpLogin"><?php echo $captcha->render(); ?></a>
               </div>
               <div class="fieldset wow flipInXTwice animated" data-wow-offset="200" data-wow-duration="1s" data-wow-delay="1.7s" data-wow-iteration="4" data-scroll-reveal="enter after .5s">
                  <input type="submit" class="btn_submit" value="submit" />
               </div>
            </div>
            <p class="clear">&nbsp;</p>
         </form>         
      </div>
   </section><!--  -->
</section><!-- end middle -->