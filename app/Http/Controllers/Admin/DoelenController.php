<?php namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\doelen;
use App\Http\Requests\Admin\DeleteRequest;
use App\Http\Requests\Admin\DoelenRequest;
use App\Http\Requests\Admin\DoelenEditRequest;

use Datatables;


class DoelenController extends AdminController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        // Show the page
        return view('admin.doelen.index', compact('doelen','id'));

	}

    public function doelitems($id){

      $doelen = doelen::where('lp_id', $id)->get();
      //  dd($doelen);
      return view('admin.doelen.index', compact('doelen','id'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function getCreate($id) {


        return view('admin.doelen.create_edit', compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */

    public function postCreate(DoelenRequest $request) {

        $doelen = new doelen();
        $doelen -> code = $request->code;
        $doelen -> competentie = $request->competentie;
        $doelen -> lp_id = $request->lpid;
        $doelen -> save();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $doelen
     * @return Response
     */
    public function getEdit($id) {

        $doelen = doelen::find($id);



        return view('admin.doelen.create_edit', compact('doelen'));
    }

    /**
     * Update the specified resource in storage.
     *

     */
    public function postEdit( DoelenEditRequest $request, $id) {

        $doelen = doelen::find($id);
        $doelen -> code = $request->code;
        $doelen -> competentie = $request->competentie;
        $doelen -> lp_id = $request->lp_id;


        $doelen -> save();
    }

    public function getDelete($id)
    {
        $doelen = doelen::find($id);

        //dd($leerplan);    ---> je kan in de popup de geven tonen die je gaat wissen

        // Show the page
        return view('admin.doelen.delete', compact('doelen'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $user
     * @return Response
     */
    public function postDelete(DeleteRequest $request,$id)
    {
        $doelen= doelen::find($id);
        $doelen->delete();
    }



    public function data($id)
    {

        $doelen = doelen::select(array('doelens.id', 'doelens.lp_id','doelens.code','doelens.competentie'));



        return Datatables::of($doelen)

            ->add_column('actions', '@if ($id !="0")

                    <a href="{{{ URL::to(\'admin/doelen/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a>
                    <a href="{{{ URL::to(\'admin/doelen/\' . $id . \'/delete\' ) }}}" class="btn btn-sm btn-danger iframe"><span class="glyphicon glyphicon-trash"></span> {{ trans("admin/modal.delete") }}</a>
                @endif')
            ->where('doelens.lp_id','=', $id)
            ->remove_column('id')
            ->remove_column('lp_id')

            ->make();
    }

}
