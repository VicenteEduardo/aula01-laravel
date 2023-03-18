<?php

namespace App\Http\Controllers;

use App\Models\PratoDia;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $response['pratodias']=PratoDia::get();
        return view('home',$response);
    }
}
