<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    private $user;
    public function __construct(User $user){
        $this->user = $user;
        //$this->middleware('jwt-auth', ['only' => ['show', 'index']]);
        $this->middleware('jwt-auth', ['except' => ['show']]);

    }
    public function index(){
        $user = $this->user->all();

        return response()->json(['data' => $user], 200);
    }

    public function show($id){
        $user = $this->user->findOrFail($id);

        return response()->json(['data' => $user], 200);
    }
}
