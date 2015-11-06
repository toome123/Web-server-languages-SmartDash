<?php

class Value extends Eloquent {


	protected $table = 'values';
	
	protected $fillable = array('value');

	public function device()
	{
		return $this->belongsTo('Device');
	}


}