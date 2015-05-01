<?php
/**
 * Eigenes xhtml style mit div tag nach dem h3 tag
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

function modChrome_xhtml_div($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="moduletable<?php echo $params->get('moduleclass_sfx'); ?>">
				<?php if ($module->showtitle != 0) : ?>
					<h3><?php echo $module->title; ?></h3>
				<?php endif; ?>
			<div>
				<?php echo $module->content; ?>
			</div>
		</div>
	<?php endif;
}