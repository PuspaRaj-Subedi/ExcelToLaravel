<?php

namespace App\Imports;

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
    public function __construct($modelFdn)
    {
        $this->modelName=$modelFdn;
    }
    public function model(array $row)
    {
        // dd($row);
        $crsr=[];
        foreach ($row as $key => $value) {
            $crsr[$key]=$value;
        }

        dd($crsr);

        return new $this->modelName($crsr);
    }
    public function rules(): array
    {
        return [


             // Above is alias for as it always validates in batches
            // '*.phone' => ['phone','unique'],
        ];
    }


}
