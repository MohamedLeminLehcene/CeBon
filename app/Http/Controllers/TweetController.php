<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{


    public function index()
    {
        $tweets = Tweet::all();
        return $tweets;
    }

    public function store(Request $request)
    {
        Tweet::create($request->all());
    }


    public function show($id)
    {
        return Tweet::findOrfail($id);
    }



    public function update(Request $request, $id)
    {
        $tweet = Tweet::findOrfail($id);
        return $tweet->update($request->all());
    }


    public function destroy($id)
    {
        $tweet = Tweet::findOrfail($id);
        return $tweet->delete();
    }
}
