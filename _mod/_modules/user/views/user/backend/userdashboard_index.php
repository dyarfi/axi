<?php defined('SYSPATH') or die('No direct script access.'); ?>
<script type="text/javascript">
$(document).ready(function(){
	$.jqplot.config.enablePlugins = true;
	<?php 
	$buffers = array();
	$i = 0;
	foreach ($download_top_ten as $val1) { 
		$buffers['download'][] = '"'.trim($val1->title).' | '.trim($val1->media).'"';
		$buffers['hits'][]	 = $val1->hits;
		$i++;
	};
	?>		
	var s1 = [<?php echo implode(',', $buffers['hits']); ?>];
	var ticks = [<?php echo implode(',', $buffers['download']); ?>];	
	plot1 = $.jqplot('chart1', [s1], {
            // Only animate if we're not using excanvas (not in IE 7 or IE 8)..
            animate: !$.jqplot.use_excanvas,
			sortData:true,
			grid: {
				drawBorder: false,
				drawGridlines: false,
				background: '#ffffff',
				shadow:false
			},
            seriesDefaults:{
				shadow:false,
                renderer:$.jqplot.BarRenderer,
                pointLabels: { show: true }
            },
			axesDefaults: {
				tickRenderer: $.jqplot.CanvasAxisTickRenderer ,
				tickOptions: {
					angle: -28,
					fontSize: '1.1em'
				}
			},
            axes: {
                xaxis: {
                    renderer: $.jqplot.CategoryAxisRenderer,
                    ticks: ticks
                }
            },
            highlighter: { show: true },
			//legend: { show:true, labels:'Article', location: 'w', rowSpacing:0, placement:"outsideGrid", border:"0px",fontSize:'1.0em' },
			title: { show:true, text:'Top 10 Download Hits' }
        });	
	<?php 
	$buffers = array();
	foreach ($news_top_ten as $val2) { 
		$buffers[] = json_encode(array('&nbsp;View ('. $val2->hits .') - ' . $val2->name, $val2->hits / 100));
	};
	?>	
	var data2 = [		
			<?php echo implode(',', $buffers); ?>
	];
	var plot2 = $.jqplot ('chart2', [data2],
		{
		sortData:true,
		grid: {
            drawBorder: false,
            drawGridlines: false,
            background: '#ffffff',
            shadow:false
        },
        axesDefaults: {
        },
		seriesDefaults: {
			shadow:false,
			// Make this a pie chart.
			renderer: $.jqplot.PieRenderer,
			rendererOptions: {
				sliceMargin: 4,
                // rotate the starting position of the pie around to 12 o'clock.
                startAngle: -90,
				// Put data labels on the pie slices.
				// By default, labels show the percentage of the slice.
				showDataLabels: true
			}
		},
		legend: { show:true, location: 'w', rowSpacing:0, placement:"outsideGrid", border:"0px",fontSize:'1.0em' },
		title: { show:true, text:'Top 10 News and Event View' }
		}
	);
});
</script>
<h2><?php echo $module_menu;?></h2>
<div class="ls10"></div>
<div class="bar"></div>
<?php 
echo Form::open(URL::site(ADMIN.$class_name.'/index/select_action'),array('method'=>'post','class'=>'form_details')); 
?>
<div class="ls10"></div>
<div class="container-fluid">
	<div class="row-fluid">
		<div style="float:left; position: relative; margin: 0px auto 20px auto; padding: 0 0 0 200px; clear:both;">
			<span class="hide">Top 10 Product</span>
			<div id="chart1" style="height:400px; width:640px; clear:both"></div>
		</div>
		<div style="float:left; position: relative; margin: 50px 0 20px 0; clear:both;">
			<span class="hide">Top 10 News and Event</span>
			<div id="chart2" style="height:340px; width:660px; clear:both"></div>
		</div>
	</div>
</div>	
<?php 
echo Form::close();
?>