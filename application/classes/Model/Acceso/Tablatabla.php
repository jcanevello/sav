<?php defined('SYSPATH') or die('No direct script access.');

class Model_Acceso_Tablatabla extends Model {
	
	protected $_table_name = 'usuario_tabla_tabla';
	
	public function getNumLogeo()
	{
		$result = DB::select('tab_valor')
			->from($this->_table_name)
			->where('tab_tabla', 'LIKE', 'NUM_LOGEO')
			->execute()
			->as_array();
		
		return $result[0]['tab_valor'];
	}
	
}
