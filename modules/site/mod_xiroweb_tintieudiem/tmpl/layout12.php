<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tintieudiem
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
	<?php
	$introcount = count($list);
	$counter = 0;
	$columns = 2;
	?>
<div class="module<?php echo $moduleclass_sfx; ?> mod-tintieudiem-<?php echo $stylecss; ?>">
	<?php foreach ($list as  $key => $item) : ?>
				<?php $images = json_decode($item->images);
				 ?>
			<?php $rowcount = ((int) $key % (int) $columns) + 1; ?>
			<?php if ($rowcount === 1) : ?>
				<?php $row = $counter / $columns; ?>
				<div class="<?php echo 'row-' . $row; ?> bs4row no-gutters bs4align-items-stretch bs4justify-content-md-around">
			<?php endif; ?>

					<div class="bs4col-12 bs4col-md-<?php echo round((12 / $columns)); ?>">
						<?php require JModuleHelper::getLayoutPath('mod_xiroweb_tintieudiem', 'items_default'); ?>
				<!-- end item -->
				<?php $counter++; ?>
					</div><!-- end col-sm-* -->
			<?php if (($rowcount == $columns) or ($counter == $introcount)) : ?>
				</div><!-- end row -->
			<?php endif; ?>
		<?php endforeach; ?>
</div>
