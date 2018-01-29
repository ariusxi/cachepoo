<?php
	function __autoload($classe){
		require_once("classes/$classe.class.php");
	}
	
	try{
		$cache = new Cache();
		if($cache->isCache('feed')){
			$cache->write('feed', 'Data Hora '.date('d-m-Y H:i:s'));
		}
		echo $cache->read('feed');
	}catch(CacheException $e){
		echo $e->getMessage();
	}