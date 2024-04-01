<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class nguoihiennmau_benhvien extends Model
{
    protected $table = 'nguoihiennmau_benhviens';
    protected $primaryKey = 'id_nguoihiennmau_benhvien';
    protected $fillable=['hoten',
    'ngaysinh',
    'noilamviec',
    'sodienthoai',
    'diachi',
    'solanhien',
    'nhommau',
    'nhomRh',
    'ID_exelbenhvien' ];
}
