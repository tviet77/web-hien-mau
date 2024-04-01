<?php

namespace App\Exports;

use App\Model\Exceltonvinh;
use Maatwebsite\Excel\Concerns\FromCollection;

class EPexceltonvinh implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Exceltonvinh::all();
    }
}
