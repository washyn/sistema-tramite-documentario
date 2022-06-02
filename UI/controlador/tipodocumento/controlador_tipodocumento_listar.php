<?php
    require '../../modelo/modelo_tipodocumento.php';
	$tipoDocAppService = new TipoDocumentoAppService();
	$consulta = $tipoDocAppServiceT->getAll();
	if ($consulta) {
		echo json_encode($consulta);
	}else{
		echo '{
		    "sEcho": 1,
		    "iTotalRecords": "0",
		    "iTotalDisplayRecords": "0",
		    "aaData": []
		}';
	}
?>
