<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Board;
use App\User;

class BoardController extends Controller
{
    public function index(Board $board)
    {
        return view('boards/index')->with(['boards' => $board->getByLimit()]);
    }
    public function create(User $user)
    {
        return view('boards/create')->with(['users'=> $user->get()]);;
    }
    public function show(Board $board)
    {
        return view('boards/show')->with(['board' => $board]);
    }
    public function store(Request $request, Board $board)
    {
       $input = $request['board'];
       $input['user_id'] = Auth::id();
       $board->fill($input)->save();
       return redirect('/');
    }
    public function delete(Board $board)
    {
        $board->delete();
        return redirect('/');
    }
}
