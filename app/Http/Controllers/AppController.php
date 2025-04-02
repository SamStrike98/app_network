<?php

namespace App\Http\Controllers;

use App\Models\App;
use App\Models\Collection;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index() {
        // route --> /apps/
        // fetch all records & pass into index view
        $apps = App::with('collection')->orderBy('created_at', 'desc')->paginate(10);

        return view('apps.index', ["apps" => $apps]);
    }

    public function show(App $app)
    {
        // route --> /apps/{id}
        // fetch a single record & pass into index view
        $app->load('collection');

        return view('apps.show', ["app" => $app]);
    }

    public function create()
    {
        // route --> /apps/create
        // render a create view (with web form) to users
        $collections = Collection::all();
        return view('apps.create', ["collections" => $collections]);
    }

    public function store(Request $request)
    {
        // route --> /apps/ (POST)
        // handle POST request to store a new App record in the table
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'rating' => 'required|integer|min:0|max:5',
            'description' => 'required|string|min:20|max:1000',
            'collection_id' => 'required|exists:collections,id'
        ]);

        App::create($validated);

        return redirect()->route('apps.index')->with('success','App Created!');

    }

    public function destroy(App $app)
    {
        // route --> /apps/{id} (DELETE)
        // handle delete request to delete an app record from the table

        // $app = App::findOrFail($id);
        $app->delete();

        return redirect()->route('apps.index')->with('success', 'App Deleted!');
    }
}
