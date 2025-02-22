<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(){
        $cities = [
            "Casablanca", "Rabat", "Marrakech", "Fès", "Tanger", "Agadir",
            "Meknès", "Oujda", "Kenitra", "Tétouan", "Safi", "El Jadida",
            "Béni Mellal", "Nador", "Taza", "Khouribga", "Settat", "Larache",
            "Khemisset", "Mohammedia", "Berkane", "Errachidia", "Guelmim",
            "Ouarzazate", "Laâyoune", "Dakhla", "Tan-Tan", "Azilal", "Tiznit",
            "Al Hoceïma", "Ifrane", "Sidi Ifni", "Taourirt", "Essaouira",
            "Chefchaouen", "Boujdour"
        ];

        return response()->json($cities);
    }
    }

