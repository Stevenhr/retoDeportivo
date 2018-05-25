<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tbl_actividades extends Model{
	protected $table = 'tbl_actividades';
	protected $primaryKey='i_pk_id';
	public $timestamps = false;
	
	public function acceso(){
		return $this->belongsToMany('App\tbl_acceso','tbl_pivote_actividades_accesos','tbl_actividades_i_pk_id','acceso_tbl_personas_i_pk_id');
	}
	public function modulos(){
		return $this->belongsTo('App\tbl_modulos','tbl_modulos_i_fk_id');
	}
}
