<?php
/**
 * @version		3.0.1
 * @package		Simple Image Gallery (plugin)
 * @author    	JoomlaWorks - http://www.joomlaworks.net
 * @copyright	Copyright (c) 2006 - 2014 JoomlaWorks Ltd. All rights reserved.
 * @license		GNU/GPL license: http://www.gnu.org/copyleft/gpl.html
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

?>

<ul id="jpgalleryId<?php echo $gal_id; ?>" class="jpgalleryContainer jpgalleryClassic<?php echo $extraWrapperClass; ?>">
	<?php foreach($gallery as $count=>$photo): ?>
	<li class="jpgalleryThumb">
		<a href="<?php echo $photo->sourceImageFilePath; ?>" class="jpgalleryLink<?php echo $extraClass; ?>" style="width:<?php echo $photo->width; ?>px;height:<?php echo $photo->height; ?>px;" rel="<?php echo $relName; ?>[gallery<?php echo $gal_id; ?>]" title="<?php echo JText::_('JP_PLG_GALLERY_YOU_ARE_VIEWING').' '.$photo->filename; ?>" target="_blank"<?php echo $customLinkAttributes; ?>>
			<img class="jpgalleryImg" src="<?php echo $transparent; ?>" alt="<?php echo JText::_('JP_PLG_GALLERY_CLICK_TO_ENLARGE_IMAGE').' '.$photo->filename; ?>" title="<?php echo JText::_('JP_PLG_GALLERY_CLICK_TO_ENLARGE_IMAGE').' '.$photo->filename; ?>" style="width:<?php echo $photo->width; ?>px;height:<?php echo $photo->height; ?>px;background-image:url(<?php echo $photo->thumbImageFilePath; ?>);" />
		</a>
	</li>
	<?php endforeach; ?>
	<li class="jpgalleryClear">&nbsp;</li>
</ul>

<?php if($itemPrintURL): ?>
<div class="jpgalleryPrintMessage">
	<?php echo JText::_('JP_PLG_GALLERY_PRINT_MESSAGE'); ?>:
	<br />
	<a title="<?php echo $row->title; ?>" href="<?php echo $itemPrintURL; ?>"><?php echo $itemPrintURL; ?></a>
</div>
<?php endif; ?>
