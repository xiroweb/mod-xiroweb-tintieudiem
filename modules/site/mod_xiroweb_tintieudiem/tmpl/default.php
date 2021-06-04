<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_xiroweb_tintieudiem
 *
 * @copyright   Copyright (C) 2005 - 2020 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;

HTMLHelper::_('stylesheet', 'mod_xiroweb_tintieudiem/'.'bootstrap5-grid.css', array('version' => 'auto', 'relative' => true));
HTMLHelper::_('stylesheet', 'mod_xiroweb_tintieudiem/'.'default.css', array('version' => 'auto', 'relative' => true));
?>
<div class="module<?php echo $moduleclass_sfx; ?> mod-tintieudiem-none">
	<div class="bs5row g-10 bs5cols-<?php echo $mobile; ?> bs5cols-md-<?php echo $desktop; ?>">
		<?php foreach ($list as  $key => $item) { ?>
			<?php $images = json_decode($item->images); ?>
			<div>
				<?php require JModuleHelper::getLayoutPath('mod_xiroweb_tintieudiem', 'items_default'); ?>
			</div>
		<?php } ?>
	</div>
</div>

