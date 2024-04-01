<?php

use App\Model\nguoihienmau;
use Illuminate\Database\Seeder;

class nguoihienmauSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        nguoihienmau::create(
            [
                'hoten'=>'Tran Quoc Viet',
                'ngaysinh'=>'25/12/2000',
                'noilamviec'=>'Quy Nhon',
                'sodienthoai'=>'1234567789',
                'diachi'=>'Quy Nhon',
                'solanhien'=>'5',
                'nhommau'=>'A',
                'nhomRh'=>"Rh Am",

            ]
            );
            nguoihienmau::create(
                [
                    'hoten'=>'Nguyễn Văn A',
                    'ngaysinh'=>'25/12/2000',
                    'noilamviec'=>'Quy Nhon',
                    'sodienthoai'=>'123456789',
                    'diachi'=>'Quy Nhon',
                    'solanhien'=>'15',
                    'nhommau'=>'A',
                    'nhomRh'=>"Âm",
                ]
                );
                nguoihienmau::create(
                    [
                        'hoten'=>'Nguyễn Văn B',
                        'ngaysinh'=>'25/12/2000',
                        'noilamviec'=>'Quy Nhon',
                        'sodienthoai'=>'123456789',
                        'diachi'=>'Quy Nhon',
                        'solanhien'=>'15',
                        'nhommau'=>'A',
                        'nhomRh'=>"Âm",
                    ]
                    );
                    nguoihienmau::create(
                        [
                            'hoten'=>'Nguyễn Văn c',
                            'ngaysinh'=>'25/12/2000',
                            'noilamviec'=>'Quy Nhon',
                            'sodienthoai'=>'123456789',
                            'diachi'=>'Quy Nhon',
                            'solanhien'=>'15',
                            'nhommau'=>'A',
                            'nhomRh'=>"Âm",
                        ]
                        );
                        nguoihienmau::create(
                            [
                                'hoten'=>'Nguyễn Văn H',
                                'ngaysinh'=>'25/12/2000',
                                'noilamviec'=>'Quy Nhon',
                                'sodienthoai'=>'123456789',
                                'diachi'=>'Quy Nhon',
                                'solanhien'=>'15',
                                'nhommau'=>'A',
                                'nhomRh'=>"Âm",
                            ]
                            );
    }
}
