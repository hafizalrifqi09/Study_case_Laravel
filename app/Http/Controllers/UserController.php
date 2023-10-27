<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Users = User::all();
        return view('user.index', compact('Users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //menampilkan layouting html pada folder resources-views
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);
        // atau jika seluruh data input akan dimasukan langsung ke db bisa dengan perintah User::create($request->all());

        return redirect()->back()->with('success', 'berhasil menambahkan data aku n!');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(User $User)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $User, $id)
    {
       $User = User::find($id);
       // atau $User = User::where('id', $id)->first()

       return view('user.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'role' => 'required',
        ]);

        User::where('id', $id)->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('user.home')->with('success', 'berhasil mengubah data!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $User, $id) 
    {
        User::where('id', $id)->delete();

        return redirect()->back()->with('deleted', 'berhasil ngahapus data!');
    }

}
