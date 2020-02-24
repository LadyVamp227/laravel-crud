<?php

namespace App\Http\Controllers;

use App\Button;
use App\Http\Services\BtnConfigService;
use App\Http\Services\DBStoreService;
use App\Http\Services\UpdateService;
use App\Services\ButtonService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ButtonsController extends Controller
{
    public function insertDB(ButtonService $db)
    {
        return $db->store();

    }
    public function config(ButtonService $btn){
        return $btn->btnconfig();
    }

    public function homeConfigButtons(ButtonService $getConf)
    {
        return $getConf->getConfig();
    }
    public function edit(Request $request){
        $button = request('button_id');
        return view('edit',['button_id'=>$button]);
    }
    function update(ButtonService $up){
        return $up->update();
    }
    function delete(Request $request){
        $currentUserId = Auth::user()->id;
        $buttonn = request('button_id');
        $updateInfo = Button::where('user_id',$currentUserId)
            ->where('button_id',$buttonn)
            ->delete();
        return redirect('/home');


    }
}
