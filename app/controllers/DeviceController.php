<?php
use Carbon\Carbon;
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
			return Response::json("Няма намерени ресурси, моля отидете на менюто: Настройки, за да добавите ресурси");
		}else{
					$result = json_decode(file_get_contents($Settings->api));
					$this->processNewData($result);
					$resultArray = array('result' => $result);
					return Response::json($resultArray);
		}
	}

	public function getValues($value) {
			$deviceID = Device::where('name','=',$value)->first();
			$values = Value::where('device_id','=',$deviceID->id)->orderBy('created_at','desc')->get();
			return Response::json($values);
	}

	public function processNewData($result){
				for ($i=0; $i < count($result->devices); $i++) { 
					if (Device::where('name','=',$result->devices[$i]->name)->count()) {
						$deviceTemp = Device::where('name','=',$result->devices[$i]->name)->first();
						$newValue = new Value(array('value' => $result->devices[$i]->value));
						$save = $deviceTemp->values()->save($newValue);
					}
				}
	}

	public function deleteDevice($value) {
			$device = Device::where('name','=',$value)->first();
			$result = $device->delete();
			return Response::json($result);
	}

	

}