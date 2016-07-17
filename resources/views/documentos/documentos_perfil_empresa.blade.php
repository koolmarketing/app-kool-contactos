<?php

Use Carbon\carbon;


foreach ($docs as $doc) {
	$fecha = $doc->created_at;
	$tipo = $doc->tipo_archivo;
	switch ($tipo) {
		case 'pdf':
		$ico = '<i class="fa fa-circle fa-stack-2x red"></i>
		<i class="fa fa-file-pdf-o fa-stack-1x fa-inverse"></i>';
		
		break;
		case 'docx':
		$ico = '<i class="fa fa-circle fa-stack-2x green"></i>
		<i class="fa fa-file-word-o fa-stack-1x fa-inverse"></i>';
		
		break;
		case 'png':
		$ico = '<i class="fa fa-circle fa-stack-2x blue"></i>
		<i class="fa fa-file-image-o fa-stack-1x fa-inverse"></i>';
		
		break;
		case 'jpg':
		$ico = '
		<i class="fa fa-circle fa-stack-2x blue"></i><i class="fa fa-file-image-o fa-stack-1x fa-inverse"></i>';
		break;

		case 'xlsx':
		$ico = '<i class="fa fa-circle fa-stack-2x green"></i><i class="fa fa-file-excel-o fa-stack-1x fa-inverse"></i>';
		break;	

		case 'xls':
		$ico = '
		<i class="fa fa-circle fa-stack-2x green"></i><i class="fa fa-file-excel-o fa-stack-1x fa-inverse"></i>';
		break;	

		default: 
		$ico = '<i class="fa fa-circle fa-stack-2x green"></i><i class="fa fa-file-o fa-stack-1x fa-inverse"></i>';
		
		break;
	}
	
	echo ' 
	<div class="content-box small-box">
		<span class="fa-stack fa-2x block pull-left">
			
			'.$ico.'
		</span>
		<div class="pull-left info">
			<h4 class="text-uppercase zero-m">'.$doc->titulo.'</h4>
			<span title="'.$fecha.'" class="block"><i class="icon-clock-2"></i>'.$fecha->diffForHumans().'</span>
		</div>
		<div class="pull-right info">
			<a href="/uploads/comprobantes/'.$doc->ruta.'" target="_blank" class="btn-xs btn btn-default"><i class=" icon-download-5"></i>Descargar</a>
			<button class="btn-xs btn btn-default"><i class="icon-pencil"></i></button>
			<button class="btn-xs btn btn-default"><i class="icon-cancel"></i></button>
		</div>
		<div class="clearfix"></div>          
	</div>
	';

}


?>
