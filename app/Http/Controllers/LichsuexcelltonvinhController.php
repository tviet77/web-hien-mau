<?php

namespace App\Http\Controllers;

use App\Model\dottonvinh;
use App\Model\nguoitonhvinh;
use App\Model\Vung;
use App\Traits\kiemduyet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LichsuexcelltonvinhController extends Controller
{
    use kiemduyet;
   public function index_kiemduyet()
   {
        $vungs=Vung::all();
        $dots= dottonvinh::all();
        $ds= DB::table('nguoitonhvinhs')->where('xetlan1',0)
        ->get()->toArray();
        $data = $this->formatdatatonvinh($ds);
        return view("page.kiemduyet",compact('vungs','dots','data'));
   }
   function getbyvungdot($id_vung,$id_dot)
   {
        $ds= $this->truyvanvungdot($id_dot,$id_vung);
        $data=$this->formatdatatonvinh($ds);
        $html=$this->htmltonvinh($data);
        return response()->json(['html'=>$html]);
   }
    public function xulyimport_one(Request $request)
    {
        DB::table('nguoitonhvinhs')->where('id',$request->id)
        ->update(['newmuctonvinh'=>$request->mucsetup,'xetlan1'=>1]);
        return response()->json(['id'=>$request->id]);
    }
    public function xulyimport_check(Request $request)
    {
        $arrcheckbox=explode(",",$request->arrcheckbox);
        $arropption=explode(",",$request->arropption);
        foreach ($arrcheckbox as $key => $value) {
            DB::table('nguoitonhvinhs')->where('id',$value)
            ->update(['newmuctonvinh'=>$arropption[$key],'xetlan1'=>1]);
        }
            return response()->json(['arrcheckbox'=>$arrcheckbox]);
    }
    public function xuatfileindex()
    {
        return view('xuatfiletonvinh');
    }

}
