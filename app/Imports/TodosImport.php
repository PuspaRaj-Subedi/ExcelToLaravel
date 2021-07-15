<?php

namespace App\Imports;

use App\Models\Todo;
use Illuminate\Validation\Rules\Unique;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsErrors;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;



class TodosImport implements ToModel,SkipsOnError, WithHeadingRow, WithValidation
{
    use Importable, SkipsErrors;    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);

        return new Todo([
            'name' => $row['name'],
            'address' => $row['address'],
            'phone' => $row['phone'],
        ]);
    }
    public function rules(): array
    {
        return [


             // Above is alias for as it always validates in batches
            // '*.phone' => ['phone','unique'],
        ];
    }


}
