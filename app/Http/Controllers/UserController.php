<?php

namespace App\Http\Controllers;

use App\Models\LevelPengguna;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = User::with('level')->get();
        $level = [];
        foreach ($data as $item) {
            $level[] = $item->level();
        }

//        dd($level);
        return view('users.index', compact('data', 'level'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $level = LevelPengguna::pluck('level', 'id');
        return view('users.create', compact('level'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->post()) {
//            $request->validate([
//                'name' => 'unique:users',
//                'email' => 'email',
//            ]);

            $input = $request->all();
//            dd($input);
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->is_admin = $request->is_admin;

            if ($user->save($input)) {
                return redirect()->route('pengguna.create')->with('Success', 'Data pengguna berhasil disimpan');
            }

            return redirect()->route('pengguna.create')->with('Error', 'Data pengguna gagal disimpan');

        }

        return back()->with('Warning', 'Permintaan tidak sah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
