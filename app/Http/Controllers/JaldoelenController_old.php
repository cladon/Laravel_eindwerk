<?php namespace App\Http\Controllers;


use App\doelen;
use App\Http\Requests\DoelenEditRequest;

use Datatables;

class JaldoelenController extends Controller {

    public function index($id)
    {
        // Show the page
        return view('doelen.index', compact('doelen', 'id'));

    }


        /**
         * Show the form for editing the specified resource.
         *
         * @param $doelen
         * @return Response
         */
        public function getEdit($id) {

        $doelen = doelen::find($id);

//dd($doelen);

        return view('doelen.edit', compact('doelen'));
    }

        /**
         * Update the specified resource in storage.
         *

         */
        public function postEdit(DoelenEditRequest $request, $id) {

dd($id);
        $doelen = doelen::find($id);
        $doelen -> code = $request->code;
        $doelen -> competentie = $request->competentie;
        $doelen -> lp_id = $request->lp_id;

        $doelen -> graad_j1 = $request->graad_j1;
        $doelen -> graad_j2 = $request->graad_j2;

        $doelen -> waar_ip = $request->waar_ip;
        $doelen -> waar_ep = $request->waar_ep;
//        $doelen -> hoe_ood = $request->hoe_ood;
//        $doelen -> hoe_doe = $request->hoe_doe;
//        $doelen -> hoe_project = $request->hoe_project;
//        $doelen -> wie_pav = $request->wie_pav;
//        $doelen -> wie_ned = $request->wie_ned;
//        $doelen -> wie_mavo = $request->wie_mavo;
//        $doelen -> wie_wisk = $request->wie_wisk;
//        $doelen -> wie_lo = $request->wie_lo;
//        $doelen -> wie_zaco = $request->wie_zaco;
//        $doelen -> wanneer_vw = $request->wanneer_vw;
//        $doelen -> wanneer_wm = $request->wanneer_wm;
//        $doelen -> eva_instru = $request->eva_instru;
//        $doelen -> eva_dat = $request->eva_dat;

//            dd($doelen);


        $doelen -> save();
    }

    public function data($id)
    {

        $doelen = doelen::select(array('doelens.id', 'doelens.lp_id','doelens.code','doelens.competentie'));



        return Datatables::of($doelen)

            ->add_column('actions', '@if ($id !="0")

 <a href="{{{ URL::to(\'jaldoelen/\' . $id . \'/edit\' ) }}}" class="btn btn-success btn-sm iframe" ><span class="glyphicon glyphicon-pencil"></span>  {{ trans("admin/modal.edit") }}</a> @endif')


            ->where('doelens.lp_id','=', $id)
            ->remove_column('id')
            ->remove_column('lp_id')

            ->make();
    }


}
