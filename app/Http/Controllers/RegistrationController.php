<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $httpClient = new Client();
        // $response = $httpClient->post(
        //     'https://countriesnow.space/api/v0.1/countries/cities',
        //     [
        //         RequestOptions::BODY => '{"country": "philippines"}',
        //         RequestOptions::HEADERS => [
        //             'Content-Type' => 'application/json',
        //         ],
        //     ]
        // );
        
        // dd(
        //     $response->getBody()->getContents()
        // );

        $nationalityPath = storage_path() . "/app/public/json/nationality.json"; // ie: /var/www/laravel/app/storage/json/filename.json
        $nationalityContent = json_decode(file_get_contents($nationalityPath), true); 

        $regionPath = storage_path() . "/app/public/json/philippines/refregion.json";
        $regionContent = json_decode(file_get_contents($regionPath), true);

        return view('website.pages.registration')
            ->withNationalityContent($nationalityContent)
            ->withRegionContent($regionContent);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getProvinces(Request $request) 
    {
        $provincePath = storage_path() . "/app/public/json/philippines/refprovince.json";
        $provinceContent = json_decode(file_get_contents($provincePath), true);
        foreach ($provinceContent['RECORDS'] as $province) {
            if ($province['regCode'] == $request->regCode) {
                $provinceFiltered[] = array(
                    'id' => $province['id'],
                    'provCode' => $province['provCode'],
                    'provDesc' => $province['provDesc'],
                );
            }
        }
        return $provinceFiltered;
    }

    public function getCities(Request $request) 
    {
        $cityPath = storage_path() . "/app/public/json/philippines/refcitymun.json";
        $cityContent = json_decode(file_get_contents($cityPath), true);
        foreach ($cityContent['RECORDS'] as $city) {
            if ($city['provCode'] == $request->provCode) {
                $cityFiltered[] = array(
                    'id' => $city['id'],
                    'citymunCode' => $city['citymunCode'],
                    'citymunDesc' => $city['citymunDesc'],
                );
            }
        }
        return $cityFiltered;
    }
    
    public function getBarangay(Request $request) 
    {
        $brgyPath = storage_path() . "/app/public/json/philippines/refbrgy.json";
        $brgyContent = json_decode(file_get_contents($brgyPath), true);
        foreach ($brgyContent['RECORDS'] as $brgy) {
            if ($brgy['citymunCode'] == $request->citymunCode) {
                $brgyFiltered[] = array(
                    'id' => $brgy['id'],
                    'brgyDesc' => $brgy['brgyDesc'],
                );
            }
        }
        return $brgyFiltered;
    }

}
