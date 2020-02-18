<?php


namespace App\Http\Services;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DBStoreService
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required|max:255',
            'link' => 'required|max:255',
        ]);
        $userId = Auth::user()->id;
        $buttonId = $request->get('button_id');
        $title = $request->get('title');
        $link = $request->get('link');
        $color = $request->get('color');
        $insertedData = DB::table('button')->insert(['user_id' => $userId, 'button_id'=>$buttonId, 'title' => $title, 'link' => $link, 'color' => $color]);

        return redirect('/home');


    }

}
