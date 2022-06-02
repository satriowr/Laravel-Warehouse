<?php

namespace App\Exports;

use App\Models\kib_a;
use Maatwebsite\Excel\Concerns\FromCollection;

class kib_aExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return kib_a::all();
    }
}
