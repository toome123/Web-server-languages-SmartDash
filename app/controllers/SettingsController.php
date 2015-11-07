<?php
class SettingsController extends \BaseController {

	/**
	 * Send back all comments as JSON
	 *
	 * @return Response
	 */
	public function index()
	{
		return Response::json(Settings::orderBy('created_at','desc')->get());
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		Settings::create(array(
			'api' => ("http://".Input::get('api')),
			'frequency' => Input::get('frequency')
		));
		return Response::json(array('success' => true));
	}
	/**
	 * Return the specified resource using JSON
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return Response::json(Settings::find($id));
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Settings::destroy($id);
		return Response::json(array('success' => true));
	}


}