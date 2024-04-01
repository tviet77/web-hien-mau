<?php

namespace App\Http\Controllers;
use App\Model\Vung;
use App\Traits\import;
use Illuminate\Http\Request;


class ExceltonvinhController extends Controller
{
    use import;
    public function index_tonvinh()
    {
        $vungs=Vung::all();
        return view('page.imprort_tonvinh',compact('vungs'));
    }
    public function xuly_tonvinh(Request $request)
    {
        $nguoitonvinhs=$this->importdl($request);
        $html=$this->XuatTableExcel($nguoitonvinhs);
        return response()->json($html);
    }
    public function xuat_tonvinh(Request $request)
    {

        // $path = $request->file('file')->getRealPath();
        // Excel::import(new IPexceltonvinh, $path,"hau");
        // return back();

    }

}
