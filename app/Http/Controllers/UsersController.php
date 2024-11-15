<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 5); // Default 5
        $totalUsers = User::count();

        if ($perPage == 'all') {
            $users = User::all();
            $isAll = true;
        } else {
            $users = User::paginate($perPage);
            $isAll = false;
        }

        return view('index', compact('users', 'perPage', 'isAll', 'totalUsers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $users = new User();
        $users->fill($data);
        $users->save();

        if ($users) {
            return redirect()->route('users')->with('status', 'success')->with('message', "Berhasil Menyimpan Data");
        } else {
            return back()->withInput()->with('status', 'error')->with('message', 'Gagal Menyimpan Data');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        return view('users.index', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        $user = User::findOrFail($id);
        if (!empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }
        $user->fill($data);
        $user->save();

        if ($user) {
            return redirect()->route('users')->with('status', 'success')->with('message', "Berhasil Mengupdate Data");
        } else {
            return back()->withInput()->with('status', 'error')->with('message', 'Gagal Mengupdate Data');
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        if ($user->delete()) {
            return redirect()->route('users')->with('status', 'success')->with('message', "Berhasil Menghapus Data");
        } else {
            return back()->withInput()->with('status', 'error')->with('message', 'Gagal Menghapus Data');
        }
    }
}
