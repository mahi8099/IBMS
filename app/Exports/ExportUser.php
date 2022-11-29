<?php

namespace App\Exports;

use App\Models\TblUser;
use Maatwebsite\Excel\Concerns\FromCollection;

class ExportUser implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return TblUser::all();
    }
}
