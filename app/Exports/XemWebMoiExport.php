<?php

namespace App\Exports;

use App\XemWebMoi;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
class XemWebMoiExport implements FromCollection, WithHeadings, WithMapping
{
    public function map($XemWebMoi): array
    {
        return [
            $XemWebMoi->user_id,
            $XemWebMoi->full_name,
            $XemWebMoi->email,
            $XemWebMoi->address,
            $XemWebMoi->phone,
            $XemWebMoi->facebook,
            $XemWebMoi->is_a1_correct ? 'Correct - '.$XemWebMoi->a1_text : 'Wrong - '.$XemWebMoi->a1_text,
            $XemWebMoi->is_a2_correct ? 'Correct - '.$XemWebMoi->a2_text : 'Wrong - '.$XemWebMoi->a2_text,
            $XemWebMoi->is_a3_correct ? 'Correct - '.$XemWebMoi->a3_text : 'Wrong - '.$XemWebMoi->a3_text,
            $XemWebMoi->is_a4_correct ? 'Correct - '.$XemWebMoi->a4_text : 'Wrong - '.$XemWebMoi->a4_text,
            $XemWebMoi->is_a5_correct ? 'Correct - '.$XemWebMoi->a5_text : 'Wrong - '.$XemWebMoi->a5_text,
            $XemWebMoi->lucky_number,
            $XemWebMoi->comment,
            $XemWebMoi->is_correct == 1 ? 'Yes' : 'No',
            date("H:i d-m-Y", $XemWebMoi->time_enter),
            date("H:i d-m-Y", $XemWebMoi->time_start),
            date("H:i d-m-Y", $XemWebMoi->time_submit),
            $XemWebMoi->ref
        ];
    }
    public function headings(): array
    {
        return [
            '#',
            'Full Name',
            'Email',
            'Address',
            'Phone',
            'Facebook',
            'Answer 1',
            'Answer 2',
            'Answer 3',
            'Answer 4',
            'Answer 5',
            'Lucky number',
            'Feed back',
            'Is correct?',
            'Entered time',
            'Started time',
            'Submited time',
            'Ref'
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
