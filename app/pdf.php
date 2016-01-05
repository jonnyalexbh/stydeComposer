<?php

class Pdf
{

	public static function configure()
	{
		define('DOMPDF_ENABLE_AUTOLOAD', false);
		require_once '../vendor/dompdf/dompdf/dompdf_config.inc.php';
	}

	public static function render($file, $html)
	{
		static::configure();
		$dompdf = new DOMPDF();
		$dompdf->load_html($html);
		$dompdf->render();
		$dompdf->stream("$file.pdf");
	}

}