<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Illuminate\Support\Facades\Log;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        Log::info(gettype($row));

        return new User([
            Log::info($row),
            'documento' => $row[0],
            'nombre' => $row['nombre'],
            //'fecha_nacimiento' => $row['fecha_nacimiento'],
            // "empresa_id" => $row['empresa_id'],
            // "cargo" => $row['cargo'],
            // "fecha_ingreso" => $row['fecha_ingreso'],
            'password' => Hash::make('password'),
            // "rol" => $row['rol'],
            // "role_id" => 2, // User Type User
            // "status" => 1,
            
        ]);
    }
}
