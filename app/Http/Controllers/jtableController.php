<?php namespace App\Http\Controllers;

use App\leerplan;
use App\Http\Requests;


use Illuminate\Http\Request;

class jtableController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        return view('jtable.index');
	}

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function data()
    {
        $leerplan = leerplan::all()->toArray();

        $result1 = array(
            'Result' => 'OK',
            'Records' => $leerplan
        );

//        //dd($result2);
//        $fp = fopen('results.json', 'w');
//        fwrite($fp, json_encode($result1));
//        fclose($fp);
//        return dd($result);
        // Show the page
        return json_encode($result1);
    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}



	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
