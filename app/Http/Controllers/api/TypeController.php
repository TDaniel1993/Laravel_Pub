<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Http\Resources\Type as TypeResource;
use App\Http\Controllers\api\ResponseController;

class TypeController extends Controller
{
    
    public function getTypes() {

        $drinks = Type::get();

        return $this -> sendResponse(TypeResource::collection($drinks),"siker");
    }

    public function getType( Request $request ) {

        $drink = Type::where( "type", $request[ "type" ])->first();

        return $drink;
    }

    public function newType( Request $request ) {

        // $request->validated();
        $drink = new Type();
        $drink -> type = $request["type"];
        

        $drink->save();

        return $drink;
    }

    public function updateType( Request $request ) {

        $drink = $this->getType( $request );
        $drink->type = $request[ "type" ];

        $drink->save();

        return $this -> $drink;
    }

    public function destroyType( $id ) {

        $drink = Type::find( $id );

        $drink->delete();

        return $drink;
    }
}
