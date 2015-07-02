<?php // no direct access
defined('_JEXEC') or die('Restricted access');
$col= 1 ;
?>

<div class="vmgroup<?php echo $params->get( 'moduleclass_sfx' ) ?>">

<?php if ($headerText) : ?>
	<div class="vmheader"><?php echo $headerText ?></div>
<?php endif;
if ($display_style =="div") { ?>
	<div class="vmmanufacturer<?php echo $params->get('moduleclass_sfx'); ?>">
	<?php foreach ($manufacturers as $manufacturer) {
		$link = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_manufacturer_id=' . $manufacturer->virtuemart_manufacturer_id, FALSE);
		
		?>
		<div style="float:left;">
			<a href="<?php echo $link; ?>">
		<?php
		if ($manufacturer->images && ($show == 'image' or $show == 'all' )) { ?>
			<?php echo $manufacturer->images[0]->displayMediaThumb('',false);?>
		<?php
		}
		if ($show == 'text' or $show == 'all' ) { ?>
		 <div><?php echo $manufacturer->mf_name; ?></div>
		<?php
		} ?>
			</a>
		</div>
		<?php
		if ($col == $manufacturers_per_row) {
			echo "</div><div style='clear:both;'>";
			$col= 1 ;
		} else {
			$col++;
		}
	} ?>
	</div>
	<br style='clear:both;' />

<?php
} else {
	$last = count($manufacturers)-1;
?>
<script>
$(function() {
    $('.jcarousel').jcarousel({
        // Configuration goes here
    });
});
</script>
<div class="jcarousel-wrapper">
                <div class="jcarousel" data-jcarousel="true">
                    <ul style="left: 0px; top: 0px;" class="vmmanufacturer<?php echo $params->get('moduleclass_sfx'); ?>">
					<?php
						foreach ($manufacturers as $manufacturer) {
							//index.php?option=com_virtuemart&view=category&virtuemart_category_id=0&categorylayout=0&Itemid=101
							$link = JRoute::_('index.php?option=com_virtuemart&view=category&virtuemart_manufacturer_id=' . $manufacturer->virtuemart_manufacturer_id . '&Itemid=188', FALSE);
							?>
							<li>
							<a href="<?php echo $link; ?>">
								<?php
								if ($manufacturer->images && ($show == 'image' or $show == 'all' )) { ?>
									<?php echo $manufacturer->images[0]->displayMediaThumb('',false);?>
								<?php
								}
								if ($show == 'text' or $show == 'all' ) { ?>
								 <div><?php echo $manufacturer->mf_name; ?></div>
								<?php
								}
								?>
								</a>
							</li>
							<?php
							if ($col == $manufacturers_per_row && $manufacturers_per_row && $last) {
								//echo '</ul><ul class="vmmanufacturer'.$params->get('moduleclass_sfx').'">';
								$col= 1 ;
							} else {
								$col++;
							}
							$last--;
						} ?>
                    </ul>
                </div>

                <a href="#" class="jcarousel-control-prev" data-jcarouselcontrol="true"><i class="fa fa-chevron-left fa-2"></i></a>
                <a href="#" class="jcarousel-control-next" data-jcarouselcontrol="true"><i class="fa fa-chevron-right fa-2"></i></a>

                <p class="jcarousel-pagination hide" data-jcarouselpagination="true"><a href="#1" class="active">1</a><a href="#2">2</a><a href="#3">3</a><a href="#4">4</a><a href="#5">5</a><a href="#6">6</a></p>
            </div>
<?php }
	if ($footerText) : ?>
	<div class="vmfooter<?php echo $params->get( 'moduleclass_sfx' ) ?>">
		 <?php echo $footerText ?>
	</div>
<?php endif; ?>
</div>
