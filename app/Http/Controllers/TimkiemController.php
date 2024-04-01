<?php

namespace App\Http\Controllers;

use App\sql\timkiemnguoihienmaus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class TimkiemController extends Controller
{
    public function timkiemnguoi()
    {
        $timkiem = new timkiemnguoihienmaus();
        $datadiachi = $timkiem->selectdistinct('diachi');
        $datasolanhien = $timkiem->selectdistinct('solanhien');
        $datanhommau = $timkiem->selectdistinct('nhommau');
        $nguoihienmaus  = DB::table('nguoihienmaus')->get();
        return view('page.timkiem',compact('datadiachi','datasolanhien','datanhommau','nguoihienmaus'));
    }
    public function xulitimkiem(Request $request)
    {

        $diachi = $request-> diachi;
        $solanhien = $request -> solanhien;
        $nhommau = $request -> nhommau;
        $hovaten = $request-> hovaten;
        $kieuhienthi = $request-> kieuhienthi;
        $checkbox = $request->checkbox;
        $timkiem = new timkiemnguoihienmaus();
        $nguoihienmaus = $timkiem->timkiemselect($diachi,$solanhien,$nhommau,$hovaten,$kieuhienthi,$checkbox);
        $datadiachi = $timkiem->selectdistinct('diachi');
        $datasolanhien = $timkiem->selectdistinct('solanhien');
        $datanhommau = $timkiem->selectdistinct('nhommau');
        return view('page.timkiem',compact('datadiachi','datasolanhien','datanhommau','nguoihienmaus'));
    }
    public function timkiemedit(Request $request, $id)
    {

        $nguoihienmaus = DB::table('nguoihienmaus')->where('id', $id)->get()->toArray();
        //print_r($nguoihienmaus);


        return view('page.suatimkiem', compact('nguoihienmaus'));
    }
    public function xulysuatimkiem(Request $request)
    {

         DB::table('nguoihienmaus')->where('id', $request->id)->update(['hoten'=>$request->hoten,'ngaysinh'=>$request->ngaysinh, 'noilamviec'=>$request->noilamviec, 'sodienthoai'=>$request->sodienthoai, 'diachi'=>$request->diachi, 'solanhien'=>$request->solanhien, 'nhommau'=>$request->nhommau, 'nhomRh'=>$request->nhomRh]);
        return redirect()->route('timkiem.timkiemnguoi');




    }
}
