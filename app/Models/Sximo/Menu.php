<?php namespace App\Models\Sximo;

use App\Models\Sximo;

class Menu extends Sximo {

	protected $table = 'tb_menu';
	protected $primaryKey = 'menu_id';

	public function __construct()
	{
		parent::__construct ();


	}

}