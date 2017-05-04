<?php
class RenderTemplate
{
	function render_template($path, array $args, array $args2, array $args3 )
	{
		extract($args);	
                extract($args2);
                extract($args3);
		ob_start();
		include $path;
		$html = ob_get_clean();
		return $html;
	}
}
?>