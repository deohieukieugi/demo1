<?php 
/**
 * 
 */
class Menu extends Database
{
	
	function __construct()
	{
		parent::__construct();
		$table->name = $this->TableName('menu');
		echo $table->name;
	}
}
 ?>