<?php

namespace App\Imports;

use App\Models\User;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;
use DateTime;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnError;
use Maatwebsite\Excel\Concerns\WithValidation;
use PhpOffice\PhpSpreadsheet\Shared\Date;


class UsersImport implements ToModel, WithHeadingRow,
// ,SkipsOnError,
 WithValidation
{
    use Importable;
    /**
    *@param array $row;
   
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    private $rows = 0;      
    public function model(array $row){        
        
        ++$this->rows;


        return new User([

            'documento' => $row['documento'],
            'nombre' => $row['nombre'],
            'fecha_nacimiento' => Date::excelToDateTimeObject($row['fecha_nacimiento'])->format('Y-m-d'),
            'fecha_ingreso' => Date::excelToDateTimeObject($row['fecha_ingreso'])->format('Y-m-d'),
            //'empresa_id' => $row['empresa_id'],
            //'email' => $row['email'],
            'cargo' => $row['cargo'],
            'password' => Hash::make('documento'),
            //"rol" => $row['rol'],  
            
        ]);
    }
    public function getRowCount(): int
    {
        return $this->rows;
    }
    public function rules(): array{
        
        return [
            '*.documento' => [
                'integer',
                'required'        
            ],
            'documento' => Rule::unique('Users', 'documento'),

            '*.nombre' => [
                'string',
                'required'        
            ],
            'nombre' => Rule::unique('Users', 'nombre')
            

        ];
        
    }
    public function customValidationMessages()
{
    return [
        'documento.unique' => 'documento',
    ];
}
	// /**
	//  * @param \Throwable $e
	//  * @return mixed
	//  */
	// public function onError(\Throwable $e) {
	// }
}
