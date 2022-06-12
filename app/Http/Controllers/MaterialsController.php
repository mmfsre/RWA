<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateValidationRequest; // Ako koristimo svoju validaciju
use App\Rules\Uppercase; // Ako koristimo vlastito pravilo za validaciju
use App\Models\Direction;
use App\Models\Faculty;
use Illuminate\Http\Request;
use App\Models\Material;
use App\Models\User;
use Validator;

class MaterialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $materials = Material::all();

        return view('posts.materials', [
            'materials' => $materials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lecturer' => 'required|string|max:255',
            'drive_link' => 'required|url|active_url',
            'image_path' => 'required|mimes:jpg,png,jpeg|max:5048',
            'year' => 'required|integer',
        ]);

        $newImageName = time() . '-' . $request->name . '.' . $request->image_path->extension();
        $ImageNameString = str_replace(' ', '', $newImageName); // Sve razmake uklanjamo zbog validacije slike
        $request->image_path->move(public_path('images'), $ImageNameString);

        $material = Material::create([
            'name' => $request->input('name'),
            'lecturer' => $request->input('lecturer'),
            'drive_link' => $request->input('drive_link'),
            'image_path' => $ImageNameString,
            'year' => $request->input('year'),
            'description' => $request->input('description'),
        ]);


        return redirect('/materials');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $material = Material::find($id);

        $user = User::find($id);

        // return view('posts.show')->with('material', $material);
        return view('posts.show', [
            'material' => $material,
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $material = Material::find($id);

        return view('posts.edit')->with('material', $material);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'lecturer' => 'required|string|max:255',
            'drive_link' => 'required|url|active_url',
            'year' => 'required|integer'
        ]);


        Material::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'lecturer' => $request->input('lecturer'),
                'drive_link' => $request->input('drive_link'),
                'year' => $request->input('year'),
                'description' => $request->input('description')
            ]);

        // Validacija slike - za UPDATE (NEPOTREBNO)

        // if ($request->hasFile('image_path')) {

        //     $destination = 'images/' . $material->image_path;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('image_path');
        //     $extention = $file->getClientOriginalExtension();
        //     $filaname = time() . '.' . $extention;
        //     $file->move('images/', $filaname);
        //     $material->image_path = $filaname;
        // }
        // $material->update();

        return redirect('/materials');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $material = Material::find($id);

        $material->delete();

        return redirect('/materials');
    }
}
