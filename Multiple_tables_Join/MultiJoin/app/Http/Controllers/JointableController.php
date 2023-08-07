<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class JointableController extends Controller
{
    function index(){
        $data = Country::join('states','states.country_id','=','countries.id')
                ->join('cities','cities.state_id','=','states.id')
                ->select('countries.name','states.state_name','cities.city_name')->get();

        
                $countryData = [];

                foreach ($data as $entry) {
                    $countryName = $entry["name"];
                    $stateName = $entry["state_name"];
                    $cityName = $entry["city_name"];
            
                    if (!array_key_exists($countryName, $countryData)) {
                        $countryData[$countryName] = [
                            "num_states" => 0,
                            "num_cities" => 0
                        ];
                    }
            
                    if (!array_key_exists($stateName, $countryData[$countryName])) {
                        $countryData[$countryName][$stateName] = ["cities" => []];
                        $countryData[$countryName]["num_states"]++;
                    }
            
                    if (!in_array($cityName, $countryData[$countryName][$stateName]["cities"])) {
                        $countryData[$countryName][$stateName]["cities"][] = $cityName;
                        $countryData[$countryName]["num_cities"]++;
                    }
                }
            


     return view('join_table',["countryData"=>  $countryData]);
            }


}

