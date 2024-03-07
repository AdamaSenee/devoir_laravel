<?php

namespace App\Imports;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Models\Client;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class ClientImport implements ToModel
{
    public function model(array $row)
    {
        return new Client([
            'first_name' => $row[0], // Remplacez 'nom' par le nom de vos colonnes
            'last_name' => $row[1],
            'number_phone' => $row[2],
            'adress' => $row[3],
            // Ajoutez d'autres colonnes selon votre structure de base de données
        ]);
    }
}
  




