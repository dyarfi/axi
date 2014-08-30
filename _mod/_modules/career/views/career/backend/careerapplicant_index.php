<?php defined('SYSPATH') OR die('No direct access allowed.'); ?>
<script type="text/javascript"></script>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<div class="ls10"></div>
<?php echo Form::open(ADMIN.$class_name.'/index',array('method'=>'post','autocomplete'=>"off")); ?>
<div class="col-xs-5">
	<div class="row"><?php echo Form::select('field', $search_keys, $field, array('class'=>'form-control'));?></div>
</div>
<div class="col-xs-5">
	<div class="input-group">
		<?php echo Form::input('keyword',$keyword,array(
				'id'=>'keyword',
				'class'=>'typeahead form-control',
				'placeholder'=>'',	
				'data-provide'=>'typeahead',
				'data-source'=>''
				));					
		?>
		<span class="input-group-btn">
			<?php echo Form::button('find','<span class="glyphicon glyphicon-search"></span> Search',
					array('class'=>'btn btn-primary btn','id'=>'find')); ?>
		</span>
	</div>
</div>			
<?php echo HTML::anchor(ADMIN.$class_name.'/add', '<span class="glyphicon glyphicon-plus-sign"></span> Add',
							array('class'=>'btn btn-primary','id'=>'listing_add'));?>		
<?php echo Form::close(); ?> 
<div class="clear ls5"></div>	
	<?php if (count($listings) != 0): ?>
	<span style="float:right;margin-right:10px;vertical-align: middle;">
		<a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/exportdata');?>" title="Export to XLS">
			<img style="vertical-align: bottom;" src="<?php echo url::base(); ?>images/cms/button/export.png" alt="Export to XLS"/>
		</a>
	</span>
	<?php endif; ?> 
	
    <?php if (count($listings) == 0) :?>
    <h3>There is not available data to display</h3>
    <?php else : ?>
<?php		
echo Form::open(ADMIN.$class_name.'/change',array('method'=>'post','class'=>'form_details')); 
//echo Form::hidden('page',$page_index);
//echo Form::hidden('order',$order);
//echo Form::hidden('sort',$sort);
?> 
        <input type="hidden" name="page" value="<?php echo $page_index; ?>" />
        <input type="hidden" name="order" value="<?php echo $order; ?>" />
        <input type="hidden" name="sort" value="<?php echo $sort; ?>" />
    
        <table class="listing_data">
            <thead>
                <tr>
                    <th><input type="checkbox" name="check_all" id="check_all" /></th>
                    <th><strong>#</strong></th>
                    <?php foreach ($table_headers as $key => $value) : ?>
                    <?php
                        if ($sort == $key) :
                            if ($order == 'asc') :
                                $order = 'desc';
                                $order_sign	= '&nbsp;<img src="'.url::base().'images/cms/icon/order-asc.gif" alt="&or;" />';
                            else :
                                $order = 'asc';
                                $order_sign	= '&nbsp;<img src="'.url::base().'images/cms/icon/order-desc.gif" alt="&and;" />';
                            endif;
                    ?>
                    <th><a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/index/sort/'.$key.'/order/'.$order.$page_url); ?>" id="active_col"><?php echo $value . $order_sign; ?></a></th>
                    <?php else : ?>
                    <th><a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/index/sort/'.$key.'/order/asc/'.$page_url); ?>"><?php echo $value; ?></a></th>
                    <?php endif; ?>
                    <?php endforeach; ?>
					<th>Functions</th>
                </tr>
            </thead>
    
            <tbody>
                <?php
                    $i				= $page_index + 1;
    
                    foreach ($listings as $row) :
                ?>
                    <tr id="row_<?php echo $row->id; ?>" class="<?php echo ($i % 2) ? 'even_row' : 'odd_row'; ?> <?php echo ($row->status != $statuses[0]) ? 'red_row' : ''; ?>">
                        <td align="center"><input type="checkbox" name="check[]" id="check_<?php echo $row->id; ?>" value="<?php echo $row->id; ?>" /></td>
                        <td><?php echo $i; ?></td>
                        <td><strong><a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/view/' . $row->id); ?>"><?php echo text::limit_chars(strip_tags($row->name),26,''); ?></a></strong>
						</td>
                        <td>
							<?php echo !empty($career[$row->career_id]->id) ? text::limit_chars(strip_tags($career[$row->career_id]->subject),21,'') : ''; ?>
						</td>
						<td><?php echo html_Core::mailto(strip_tags($row->email)); ?></td>
                        <td><?php echo($gender[$row->gender]); ?></td>
                        <td><?php echo($marital_status[$row->marital_status]); ?></td>
						<td><?php echo($row->phone); ?></td>
						<!--td><?php echo text_Core::limit_chars(ucfirst(strip_tags($row->address)),40,''); ?></td-->
						<td align="center">
							<?php //2012-07-24 echo date(Kohana::config('admin.date_format'), $row->birth_date); ?>
							<?php echo !empty($row->birth_date) ? $row->birth_date : '-'; ?>
						</td>
                        <td><?php echo($grade[$row->education_grade]); ?></td>
						<td>
							<?php if(!empty($row->cv_file) && is_file(Kohana::config('career.upload_path_cv'). $row->cv_file)):?>
								<a href="<?php echo url::site('admin-cp/'.$this->uri->segment(2).'/download/'.$row->cv_file); ?>" target="_blank">
									<?php echo html::image(url::base().'images/cms/icon/disk.png'); ?>
								</a>
							<?php else: ?>
								No CV
							<?php endif; ?>
						</td>
						<td>
						<?php if (!empty($row->photo) && is_file(Kohana::config('career.upload_path_cv'). $row->photo)):?>
							<a href="#file_<?php echo $row->id; ?>" class="zoom">
								<img src="<?php echo url::base(); ?>images/cms/icon/picture.png" alt="picture.png" />
							</a>	
							<div id="file_<?php echo $row->id; ?>" class="hide">
								<img src="<?php echo url::site().Kohana::config('career.upload_url_cv').$row->photo;?>" alt="<?php echo $row->photo;?>"/>
							</div>	
						<?php else: ?>
								No Photo
						<?php endif; ?>
						</td>
                        <td align="center"><?php echo ucfirst($row->status); ?></td>
                        <td align="center"><?php echo date(Kohana::config('admin.date_format'), $row->added); ?></td>
                        <!--td align="center"><?php echo ($row->modified != 0) ? date(Kohana::config('admin.date_format'), $row->modified) : '-'; ?></td-->
                         <td class="function_td">
							<a class="btn btn-primary btn-xs functions" title="View" href="<?php echo URL::site(ADMIN.$class_name.'/view/' . $row->id); ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
							<a class="btn btn-primary btn-xs functions" title="Edit" href="<?php echo URL::site(ADMIN.$class_name.'/edit/'.$row->id); ?>"><span class="glyphicon glyphicon-edit"></span></a>
							<a class="btn btn-primary btn-xs functions delete_function" title="Delete" href="<?php echo URL::site(ADMIN.$class_name.'/delete/' . $row->id); ?>"><span class="glyphicon glyphicon-trash"></span></a>		
						</td>
                    </tr>
                <?php
                        $i++;
                    endforeach;
                ?>
            </tbody>
    
            <tfoot>
                <tr>
                    <td id="corner"><img src="<?php echo url::base(); ?>images/cms/icon/list-corner.gif" alt="&nbsp;" /></td>
                    <td colspan="<?php echo (count($table_headers) + 2); ?>">
                        <div id="selection">
                            Change status :
                            <select name="select_action" id="select_action">
                                <option value="">&nbsp;</option>
                                <?php foreach ($statuses as $row) : ?>
                                <option value="<?php echo $row; ?>"><?php echo ucfirst($row); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div id="table_pagination"><?php echo $pagination->render('digg'); ?></div>
                    </td>
                </tr>
            </tfoot>
        </table>
<?php 
echo Form::close();
?>
<div class="ls10"></div>
<div class="label label-default">Total Records : <?php echo $total_record;?></div>
<div class="ls5"></div>
<?php endif; ?>
