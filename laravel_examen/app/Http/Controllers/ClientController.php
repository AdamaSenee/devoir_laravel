<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Http\Requests\StoreClientRequest;
use App\Http\Requests\UpdateClientRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use App\Exports\ClientExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ClientImport;


class ClientController extends Controller
{

   /* public function __construct()
    {
       $this->middleware('auth');
       $this->middleware('permission:create-client|edit-client|delete-client', ['only' => ['index','show']]);
       $this->middleware('permission:create-client', ['only' => ['create','store']]);
       $this->middleware('permission:edit-client', ['only' => ['edit','update']]);
       $this->middleware('permission:delete-client', ['only' => ['destroy']]);
    }
*/
    /**
     * Display a listing of the resource.
     * 
     */


// ...





// ...



// ...

public function showImportForm()
{
    return view('import');
}

public function importClients()
{
    request()->validate( [
        'file'=>'required|mimes:xlsx,xls',
    ]);
    $file=request()->file('file');
    Excel::import(new ClientImport,  $file);

    return redirect('/clients')->with('success', 'Importation des clients terminée avec succès.');
}

public function exportClients()
{
    return Excel::download(new ClientExport, 'clients.xlsx');
}



    public function index(): View
    {
        return view('clients.index', [
            'clients' => Client::latest()->paginate(3)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreClientRequest $request): RedirectResponse
    {
        Client::create($request->all());
        return redirect()->route('clients.index')
                ->withSuccess('New client is added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client): View
    {
        return view('clients.show', [
            'client' => $client
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client): View
    {
        return view('clients.edit', [
            'client' => $client
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->all());
        return redirect()->back()
                ->withSuccess('client  is updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client): RedirectResponse
    {
        $client->delete();
        return redirect()->route('clients.index')
                ->withSuccess('client is deleted successfully.');
    }
}
