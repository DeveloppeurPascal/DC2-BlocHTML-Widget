<?php
if (!defined('DC_RC_PATH')) { return; }
 
$core->addBehavior('initWidgets',
	array('blocHTML','initWidgets'));
 
class blocHTML
{
	public static function initWidgets(&$w)
	{
		$w->create('BlocHTML',__('Bloc HTML'),
			array('publicBlocHTML','blocHTML'));
	}
}
?>