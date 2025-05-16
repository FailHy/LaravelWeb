<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\ModelTeknisi;

class ControllerTeknisi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = ModelTeknisi::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:ModelTeknisis',
        ]);

        ModelTeknisi::create($request->all());
        return response()->json(['message' => 'ModelTeknisi berhasil dibuat']);
    }

    public function show($id)
    {
        $user = ModelTeknisi::find($id);
        return response()->json($user);
    }

    public function update(Request $request, $id)
    {
        $user = ModelTeknisi::findOrFail($id);
        $user->update($request->all());
        return response()->json(['message' => 'ModelTeknisi diperbarui']);
    }

    public function destroy($id)
    {
        ModelTeknisi::destroy($id);
        return response()->json(['message' => 'ModelTeknisi dihapus']);
    }

}
