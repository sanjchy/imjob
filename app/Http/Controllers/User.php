<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notifiable;

class User extends Controller
{
    use Notifiable;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(UserModel $user)
    {
        $user = Auth::user();
        if ($user->role == 'SuperAdmin') {
            $users = UserModel::all()->where("role", "user")->where("verified", 0);

            return view('user.list')->with("users", $users);
        }
        return view('user.index')->with('user', $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(UserModel $user)
    {
        return view('user.show')->with('user', $user);
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
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserModel $user)
    {
        $user->delete();
        return redirect()->back();
    }

    public function approve(UserModel $user)
    {
        $user->role = 'admin';
        $user->verified = 1;
        $user->save();
        return response()->json([
            "status" => true,
            "user" => $user->id,
            "message" => "User Approved!",
            "type" => "success"
        ]);
    }
}
