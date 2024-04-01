<?php

namespace App\Http\Controllers;

use App\Imports\IPexceltonvinh1;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class UserController extends Controller
{
    public function index_taikhoan()
    {
        $users=User::paginate(10);
        return view('page.taikhoan',compact('users'));
    }

    public function getbyid($id)
    {
        $users=User::find($id);
        return response()->json($users);
    }
    public function delete($id)
    {
        $user = User::find($id);
       $user ->delete();
       return redirect()->route("taikhoan.index");
    }
    public function edit(Request $request)
    {
        $user=User::find($request->id);
        $user->Hoten=$request->Hoten;
        $user->sdt=$request->sdt;
        $user->email=$request->email;
        $user->save();
        return response()->json($user);

    }
    #region sơn đăng nhập
    public function login()
    {

        return view("dangnhap");
    }

    public function xulilogin(Request $request)
    {
        $username = $request-> username;
        $password = $request -> password;
        $user = DB::table('users')->where('tentk', $username) ->where('matkhau', $password )-> get();
        if(count($user)==0)
        {
            $err = "Tên đăng nhập hoặc mật khẩu không đúng!";
            return Redirect()->route('taikhoan.login',['err'=>$err]);

        }
        else{
            return Redirect()->route('trangchu');
        }

    }
    public function dangxuat()
    {
        return Redirect()->route('taikhoan.login');
    }
       #endregion

    // tuowngf

    public function show_register()
    {
        return view('taotaikhoan');
    }
    public function store(Request $request){
        if($request->isMethod('post')){
            $validator = validator::make($request->all(),[
                'tentk'=>'required|min:6|max:30|alpha',
                'email'=>'required|email',
                'matkhau'=>'required|confirmed|min:6|max:16',
                'Hoten'=>'required|min:6|max:30|alpha',
                'sdt'=>'required|size:10|numeric',

            ]);
        }
        $users = DB::table('users')->where('email',$request->email)->first();//first để lấy ra dòng đầu tiên
        if(!$users){
            $newUser = new User();
            $newUser -> tentk = $request->tentk;
            $newUser -> email  = $request->email;
            $newUser -> matkhau = bcrypt($request->password);
            $newUser -> Hoten = $request->Hoten;
            $newUser -> sdt = $request->sdt;
            $newUser -> Quyen = 0;
            $newUser -> save();
            return redirect()-> route('taikhoan.index');
        }else
        {
            return redirect()-> route('page.show_register') -> with('message','Tài khoản đã tồn tại, Mời bạn đăng nhập');
        }
    }
    public function quenmatkhau()
    {
        return view('quenmk');
    }
    public function test(Request $request)
    {
        //Nhúng file PHPExcel
    // require_once './Classes/PHPExcel.php';

            // Đường dẫn file
            // echo asset("Book1.xlsx");
            // die();
        //     $path="../public/data/Book1.xlsx";
        //  $a=   FacadesExcel::import(new IPexceltonvinh1, $path);
         $path=$_FILES['filetonvinh']['tmp_name'];
         print_r($path);
        //  die();
         FacadesExcel::import(new IPexceltonvinh1, $path);
        //  print_r($a);
         die();
            // $file ="../public/data/Book1.xlsx";

            // $data = FacadesExcel::import(null,$file)->get();
            // if($data->count() > 0){
            //     foreach($data->toArray() as $key => $value){
            //         foreach($value as $row){
            //             print_r($value);
            //         }
            //     }

            // }

    }
}
