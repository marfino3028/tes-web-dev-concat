<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alfa6661\RajaOngkir\RajaOngkir;

class OngkirController extends Controller
{
    protected $rajaOngkir;

    public function __construct(RajaOngkir $rajaOngkir)
    {
        $this->rajaOngkir = $rajaOngkir;
    }

    public function index()
    {
        return view('ongkir.index');
    }

    public function process(Request $request)
    {
        $origin = '501'; 
        $destination = $request->input('destination'); 

        $weight = 1000; 
        $courier = 'jne'; 

        $ongkir = $this->rajaOngkir->ongkosKirim($origin, $destination, $weight, $courier);

        return view('ongkir.result', compact('ongkir'));
    }
}
