<?php
if (!defined('DC_CONTEXT_ADMIN')) { return; }
 
$core->addBehavior('initWidgets',
	array('blocHTML','initWidgets'));
 
class blocHTML
{
	public static function initWidgets(&$w)
	{
		$w->create('BlocHTML',__('Bloc HTML'),
			array('publicBlocHTML','blocHTML'));
 
		$w->BlocHTML->setting('code_html',__('Code HTML:'),
			'','textarea');
	}
}
?>