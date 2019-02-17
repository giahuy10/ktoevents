<?php

namespace App\Exports;

use App\XemWebMoi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
class UsersExport implements FromCollection
{
    public function headings(): array
    {
        return [
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            '#',
            'Date',
            'Date',
            'Date',
            'Date',
            'ok',
            'ok2'
        ];
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return XemWebMoi::all();
    }
}
