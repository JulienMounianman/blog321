<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use App\Category as CategoryModel;

class Category extends Controller
{
    public function index()
    {
        $categories = DB::table('categories')->get();
        return view('category.index', ['categories' => $categories]);
    }

    public function add()
    {
        return view('category.add');
    }


    public function delete($id)
    {
        $category = CategoryModel::findOrFail($id);
        $category->delete();
        Session::flash('message', 'categorie supprimée');
        return redirect()->route('CatIndex');
    }

    public function create(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|string',

        ]);

        $data = $request->all();

        $category = \App\Category::create($data);

        if ($category->exists) {

            Session()->flash('message', 'Nouvelle catégorie crée');
            return redirect()->route('CatIndex');
        } else {
            Session()->flash('message', 'une erreur est survenue');

            return redirect()->route('NewCat');

        }
    }

    public function edit($id)
    {
        $record = CategoryModel::findOrFail($id);
        return view('category.edit', ['category' => $record]);
    }

    public function update(Request $request , $id)
    {

        $this->validate($request, [
            'name' => 'required|string',

        ]);
        $record = CategoryModel::findOrFail($id);

        $lesnouvellesvaleurs = $request->all();

        $etatdurecord = $record->update($lesnouvellesvaleurs);

        if ($etatdurecord) {

            Session()->flash('message', ' catégorie maj');
            return redirect()->route('CatIndex');
        } else {
            Session()->flash('message', 'une erreur est survenue');

            return redirect()->route('EditCat', ['id' => $id]);

        }

    }
    public function show($id)
    {

    }
}
