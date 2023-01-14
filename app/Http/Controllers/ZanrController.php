<?php

namespace App\Http\Controllers;

use App\Http\Resources\ZanrResurs;
use App\Models\Zanr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ZanrController extends HandleController
{
    public function index()
    {
        $svi = Zanr::all();
        return $this->success(ZanrResurs::collection($svi), 'Vraceni su svi zanrovi.');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        $validator = Validator::make($input, [
            'zanr' => 'required',
        ]);
        if($validator->fails()){
            return $this->error($validator->errors());
        }

        $zanr = Zanr::create($input);

        return $this->success(new ZanrResurs($zanr), 'Novi zanr je kreiran.');
    }


    public function show($id)
    {
        $zanr = Zanr::find($id);
        if (is_null($zanr)) {
            return $this->error('Zanr sa zadatim id-em ne postoji.');
        }
        return $this->success(new ZanrResurs($zanr), 'Zanr sa zadatim id-em je vracen.');
    }


    public function update(Request $request, $id)
    {
        $zanr = Zanr::find($id);
        if (is_null($zanr)) {
            return $this->error('Zanr sa zadatim id-em ne postoji.');
        }

        $input = $request->all();

        $validator = Validator::make($input, [
            'zanr' => 'required',
        ]);

        if($validator->fails()){
            return $this->error($validator->errors());
        }

        $zanr->zanr = $input['zanr'];
        $zanr->save();

        return $this->success(new ZanrResurs($zanr), 'Zanr je azuriran.');
    }

    public function destroy($id)
    {
        $zanr = Zanr::find($id);
        if (is_null($zanr)) {
            return $this->error('Zanr sa zadatim id-em ne postoji.');
        }

        $zanr->delete();
        return $this->success([], 'Zanr je obrisan.');
    }
}
