<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Builder\Use_;

class UserController extends Controller
{
    
    public function store(Request $request)
    {
        User::create($request->all());
    }

    public function update(Request $request, $id)
    {
        $tweet = User::findOrfail($id);
        return $tweet->update($request->all());
    }


    public function destroy($id)
    {
        $tweet = User::findOrfail($id);
        return $tweet->delete();
    }
}
