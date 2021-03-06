<?php
/**
 * Kunena Component
* @package Kunena.Template.Crypsis
* @subpackage BBCode
*
* @copyright (C) 2008 - 2014 Kunena Team. All rights reserved.
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.org
**/
defined ( '_JEXEC' ) or die ();

/** @var KunenaAttachment $attachment */
$attachment = $this->attachment;

$config = KunenaConfig::getInstance();

$attributesLink = $attachment->isImage() && $config->lightbox ? ' rel="lightbox[thumb' . $attachment->mesid . ']"' : '';
$attributesImg = ' style="max-height: '. (int) $config->thumbheight . 'px;"';
?>
<a href="<?php echo $attachment->getUrl(); ?>" title="<?php echo $attachment->getFilename(); ?>"<?php echo $attributesLink; ?>>
	<img src="<?php echo $attachment->getUrl(true); ?>"<?php echo $attributesImg; ?> alt="" />
</a>
