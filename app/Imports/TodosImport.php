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
    public function __construct($modelFqn)
    {
        $this->track=0;
        [$this->modelFQN,$this->modelName]=explode(":",$modelFqn);
    }
    public function model(array $row)
    {
        // dd($row);
        $crsr=[];

        // Getting schema for field validation
        $flds=\Schema::getColumnListing($this->modelName);
        $flds_lower=array_map("strtolower",$flds);
        foreach ($row as $key => $value) {
            if(!(false===$tmp=array_search($key,$flds_lower))){
                $crsr[$flds[$tmp]]=$value;
            }
        }
        $this->track++;
        return new $this->modelFQN($crsr);
    }
    public function rules(): array
    {
        return [


             // Above is alias for as it always validates in batches
            // '*.phone' => ['phone','unique'],
        ];
    }


}
