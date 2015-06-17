<?php namespace App\Http\Controllers\Admin;

use App\Doelen;
use App\Http\Controllers\AdminController;

use App\User;
use App\Leerplan;


class DashboardController extends AdminController {

    public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
        $title = "Dashbord";

        // tellers opvragen voor gebruikers, leerplan en jaldoelen
        $users = User::count();
        $leerplan = Leerplan::count();
        $doelen = Doelen::count();


		return view('admin.dashboard.index',  compact('title','users', 'leerplan', 'doelen'));
	}
}