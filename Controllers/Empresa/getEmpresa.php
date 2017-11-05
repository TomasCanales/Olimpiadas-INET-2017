<?php  

	function getEmpN(){
		$query = new Queries();
		$datas = $query->getEmpresa();
		echo $datas['EmpresaName'];
	}

    function getEmpFC(){
		$query = new Queries();
		$datas = $query->getEmpresa();
		echo $datas['EmpresaFCode'];
	}

?>