<?php

namespace App\Exports;

use App\Models\Client;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\Exportable;

class ClientExport implements FromQuery
{
    use Exportable;

    public function query()
    {
        return Client::query(); // Vous pouvez appliquer des conditions ou des relations ici selon vos besoins
    }
}