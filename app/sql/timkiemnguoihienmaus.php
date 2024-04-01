<?php
    namespace App\sql;

use Illuminate\Support\Facades\DB;

class timkiemnguoihienmaus {

        public function timkiemselect($diachi,$solanhien,$nhommau,$hovaten,$kieuhienthi,$checkbox){
            $nguoihienmaus=[];
            //!= null
            if($diachi != 'null' && $solanhien != 'null' && $nhommau != 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi null
            if($diachi == 'null' && $solanhien != 'null' && $nhommau != 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //solanhien null
if($diachi != 'null' && $solanhien == 'null' && $nhommau != 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
$nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //nhommau null
            if($diachi != 'null' && $solanhien != 'null' && $nhommau == 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
-> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
-> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //hovaten null
            if($diachi != 'null' && $solanhien != 'null' && $nhommau != 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
-> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,solanhien null
            if($diachi == 'null' && $solanhien == 'null' && $nhommau != 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
-> get();
                    }
                }
            }

            //diachi,nhommau null
            if($diachi == 'null' && $solanhien != 'null' && $nhommau == 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,hovaten null
            if($diachi == 'null' && $solanhien != 'null' && $nhommau != 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
$nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //solanhien,nhommau null
            if($diachi != 'null' && $solanhien == 'null' && $nhommau == 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();

}
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //solanhien,hovaten null
            if($diachi != 'null' && $solanhien == 'null' && $nhommau != 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )
->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //nhommau,hovaten null
            if($diachi != 'null' && $solanhien != 'null' && $nhommau == 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )


                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )


                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )
->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )


                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)
                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,solanhien,nhommau null
            if($diachi == 'null' && $solanhien == 'null' && $nhommau == 'null' && $hovaten != ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5','<>',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
->where('Muc_5',null )
                                                        ->where('hoten','like','%'.$hovaten.'%' )
                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,solanhien,hovaten null
            if($diachi == 'null' && $solanhien == 'null' && $nhommau != 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
->where('nhommau', $nhommau )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('nhommau', $nhommau )
                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,nhommau,hovaten null
            if($diachi == 'null' && $solanhien != 'null' && $nhommau == 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )


                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )
                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )


                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('solanhien', $solanhien )

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //solanhien,nhommau,hovaten null
            if($diachi != 'null' && $solanhien == 'null' && $nhommau == 'null' && $hovaten == ''){
                if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
->where('diachi', $diachi)

                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)


                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')
                                                        ->where('diachi', $diachi)

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            //diachi,solanhien,nhommau,hovaten null
            if($diachi == 'null' && $solanhien == 'null' && $nhommau == 'null' && $hovaten == ''){
if($kieuhienthi == 'const'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        -> get();

                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5','<>',null )

                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5',null )

                                                        -> get();
                    }
                }
                else if($kieuhienthi == 'AZ'){
                    $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','ASC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }else if($kieuhienthi == 'ZA'){
                    $nguoihienmaus = DB::table('nguoihienmaus')


                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    if($checkbox == 'tonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5','<>',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                    else if($checkbox == 'chuatonvinh')
                    {
                        $nguoihienmaus = DB::table('nguoihienmaus')

                                                        ->where('Muc_5',null )

                                                        ->orderBy('hoten','DESC')
                                                        -> get();
                    }
                }
            }

            return $nguoihienmaus;
        }
public function selectdistinct($cot){
            $data = DB::select("SELECT DISTINCT $cot FROM nguoihienmaus");
            return $data;
        }


    }
?>
