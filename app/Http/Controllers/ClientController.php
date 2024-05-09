<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

use App\Models\Source;
use App\Models\Industry;
use App\Models\User;
use App\Models\TermReceive;
use App\Models\Salutation;
use GuzzleHttp\Client as GuzzleHttpClient;
use GuzzleHttp\RequestOptions;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.clients.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $sources = Source::all();
        $industries = Industry::all();
        $users = User::where('user_role_id', '=', '1')->get();
        $termReceives = TermReceive::all();
        $salutations = Salutation::all();

        $nationalityPath = storage_path() . "/app/public/json/nationality.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $nationalityContent = json_decode(file_get_contents($nationalityPath), true); 

        $regionPath = storage_path() . "/app/public/json/philippines/refregion.json";
        $regionContent = json_decode(file_get_contents($regionPath), true);

        return view('admin.pages.clients.addEdit')
            ->withSources($sources)
            ->withIndustries($industries)
            ->withUsers($users)
            ->withTermReceives($termReceives)
            ->withSalutations($salutations)
            ->withNationalityContent($nationalityContent)
            ->withRegionContent($regionContent);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'source'            => 'required',
            'companyName'       => 'required|string|max:255',
            'TA'                => 'required',
            'natureBusiness'    => 'required',
            'specialistArea'    => 'required',
            'industry'          => 'required',
            'address'           => 'required',
            'country'           => 'required',
            'region'            => 'required',
            'province'          => 'required',
            'city'              => 'required',
            'barangay'          => 'required',
            'zipCode'           => 'required',
            'telno'             => 'required',
            'alternateTelNo'    => 'required',
            'email'             => 'required',
            'website'           => 'required',
            'termSent'          => 'required',
            'termSentDate'      => 'required',
            'termReceive'       => 'required',
            'termReceivedDate'  => 'required',
            'salutation'        => 'required',
            'contactFirstName'  => 'required',
            'contactLastName'   => 'required',
            'contactPosition'   => 'required',
            'decisionMaker'     => 'required',
            'contactDirectDial' => 'required',
            'contactMobileNo'   => 'required',
            'contactEmail'      => 'required',
            'notes'             => 'required',
        ]);

        
    
        // $client = new Client;

        // $client->company_name = $request->company_name;

        // $client->save();

        // return redirect('/iris/clients');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        //
    }
}
