<?php 

namespace App\Exports;
use Illuminate\Support\Facades\Schema;
use Maatwebsite\Excel\Concerns\FromArray;

class XlsExport implements FromArray
{
    public function __construct($modelFqn)
    {
        [$this->modelFQN,$this->modelName]=explode(":",$modelFqn);
    }

    public function array(): array
    {
        $flds=[Schema::getColumnListing($this->modelName)];
        return $flds;
    }
}