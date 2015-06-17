<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\leerplan;
use Illuminate\Http\Request;

class DashboardhomeController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $title = "Dashbord gebruiker";

        $leerplan = leerplan::all();

        return view('dsbrdhome.index',  compact('title', 'leerplan' ));
	}



}
