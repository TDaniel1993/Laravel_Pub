<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;

class PackageController extends Controller
{
    public function getPackages() {

        $drinks = Package::get();

        return $drinks;
    }

    public function getPackage( Request $request ) {

        $drink = Package::where( "id", $request[ "id" ])->first();

        return $drink;
    }

    public function newPackage( Request $request ) {

        // $request->validated();
        $drink = new Package();
        $drink -> package = $request["package"];
        

        $drink->save();

        return $drink;
    }

    public function updateType( Request $request ) {

        $drink = $this->getType( $request );
        $drink->type = $request[ "type" ];

        $drink->save();

        return $this -> $drink;
    }

    public function destroyPackage( $id ) {

        $drink = Package::find( $id );

        $drink->delete();

        return $drink;
    }
}
