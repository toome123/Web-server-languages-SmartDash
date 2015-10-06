<?php
class DeviceController extends \BaseController {

	/**
	 * Връща JSON със данните от API-то
	 *
	 * @return Response
	 */
	public function index()
	{	
		$Settings = Settings::orderBy('created_at','desc')->first();
		if(count($Settings) == 0){
			return Response::json("Няма намерени ресурси, моля отидете на менюто: Настройки");
		}else{
			return Response::json(json_decode(file_get_contents($Settings['api'])));
		}
	}

	

}