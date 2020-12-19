<?php

namespace App\Http\Controllers;

use App\Models\Exame;
use App\Http\Requests\ExamesRequest as Request;

class ExamesController extends Controller
{
    public function index()
    {
        // return Exame::all();
        return view('../../../../cliente-web/login.html');
    }

    // public function create()
    // {
    //     //
    // }

    public function store(Request $request)
    {
        // return Exame::create($request->all());
    }

    public function show(Exame $exame)
    {
        return 'teste2';
    }

    // public function edit(Request $request, Exame $exame)
    // {
    //     //
    // }

    public function update(Request $request, Exame $exame)
    {
        // $exame->update($request->all());
        // return $exame;
    }

    public function destroy(Exame $exame)
    {
        // $exame->delete();
        // return $exame;
    }
}
