<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nguoitonhvinh extends Model
{
    protected $table = 'nguoitonhvinhs';
    protected $primaryKey = 'id_nguoitonhvinh';
    protected $fillable=[
    'ID_exeltonvinh',
    'hoten',
    'ngaysinh',
    'sodienthoai',
    'diachi',
    'nhommau',
    'nhomRh' ,
    'muctonvinh',
    'solanhien',];

}
