<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\leerplan;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\LeerplanRequest;
use App\Http\Requests\Admin\LeerplanEditRequest;
use Datatables;
class LeerplanController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Show the page
        return view('admin.leerplan.index');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
    public function getCreate() {
        return view('admin.leerplan.create_edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function postCreate(LeerplanRequest $request) {

        $leerplan = new Leerplan ();
        $leerplan -> leerplannummer = $request->leerplannummer;
        $leerplan -> ingang = $request->ingang;

        $leerplan -> save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $user
     * @return Response
     */
    public function getEdit($id) {

        $leerplan = leerplan::find($id);
        return view('admin.leerplan.create_edit', compact('leerplan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param $user
     * @return Response
     */
    public function postEdit(LeerplanEditRequest $request, $id) {

        $leerplan = leerplan::find($id);
        $leerplan -> leerplannummer = $request->leerplannummer;
        $leerplan -> ingang = $request->ingang;


        $leerplan -> save();
    }
    public function getDelete($id)
    {
        $leerplan = leerplan::find($id);

        //dd($leerplan);    ---> je kan in de popup de geven tonen die je gaat wissen

        // Show the page
        return view('admin.leerplan.delete', compact('leerplan'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */
    public function postDelete(DeleteRequest $request,$id)
    {
        $leerplan= Leerplan::find($id);
        $leerplan->delete();
    }

    public function data()
    {

        $leerplan = Leerplan::select(array('leerplans.id', 'leerplans.leerplannummer','leerplans.ingang'));



        return Datatables::of($leerplan)

            ->add_column('actions', '@if ($id !="1")
                    <a href="{{{ URL::to(\'admin/doelen/\' . $id . \'/doelitems\' ) }}}" class="btn btn-info btn-sm" ><span class="glyphicon glyphicon-open"></span>  {{ trans("admin/modal.items") }}</a>
                    <a href="{{{ URL::to(\'admin/leerplan/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ URL::to(\'admin/leerplan/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                @endif')
            ->remove_column('id')

           ->make();
    }

}
