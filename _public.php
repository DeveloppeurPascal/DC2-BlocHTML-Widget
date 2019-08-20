<?php
if (!defined('DC_RC_PATH')) { return; }
 
class publicBlocHTML
{
	public static function blocHTML(&$w)
	{
		return $w->code_html;
	}
}
?>