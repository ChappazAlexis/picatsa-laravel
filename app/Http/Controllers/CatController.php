<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('gestionChat',[
            "cats" => Cat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('createCat', [
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'legend' => 'required|max:50',
            'description' => 'required|max:250',
            'url' => 'required',
            'statut' => 'required',
        ]);


        $cat = new Cat;
        $cat->legend = $request->input('legend');
        $cat->description = $request->input('description');
        $cat->url = $request->input('url');
        $cat->statut = $request->input('statut');
        $cat->save();
        return redirect('cats');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function show(Cat $cat)
    {
        return view ('showCat', [
            "cat" => $cat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        {
            return view ('updateCat', [
                "cat" => $cat
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cat $cat)
    {
        $validated = $request->validate([
            'legend' => 'required|max:50',
            'description' => 'required|max:250',
            'url' => 'required',
            'statut' => 'required',
        ]);

        $cat->legend = $request->input('legend');
        $cat->description = $request->input('description');
        $cat->url = $request->input('url');
        $cat->statut = $request->input('statut');
        $cat->save();
        return redirect('cats');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        {
            $cat->delete();
            return redirect('cats');
        }
    }
}
