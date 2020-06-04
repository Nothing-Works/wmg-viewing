<?php

namespace App\Http\Controllers;

use App\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ManagerController extends Controller
{
    public function index()
    {
        return view('managers.index', ['managers' => Manager::all()]);
    }

    public function create()
    {
        return view('managers.create');
    }

    public function store(Request $request)
    {
        Manager::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
        ]);

        return redirect('/managers');
    }

    public function edit(Manager $manager)
    {
        return view('managers.edit', ['manager' => $manager]);
    }

    public function update(Request $request, Manager $manager)
    {
        $attributes = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
        ];

        if ($request->filled('password')) {
            $attributes['password'] = Hash::make($request->input('password'));
        }

        $manager->update($attributes);

        return redirect('/managers');
    }

    public function destroy(Manager $manager)
    {
        $manager->delete();

        return redirect('/managers');
    }
}
