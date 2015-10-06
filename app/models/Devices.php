<?php

class Devices extends Eloquent {
    protected $table = 'devices';
	protected $fillable = array('name','value');
}