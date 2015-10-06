<?php

class Device extends Eloquent {
	
	protected $table = 'devices';
	
	protected $fillable = array('name');

	
	public function values()
	{
		return $this->hasMany('Value','device_id');
	}



}