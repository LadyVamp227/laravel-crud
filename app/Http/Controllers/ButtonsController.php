<?php

namespace App\Http\Controllers;

use App\Button;
use App\Http\Services\BtnConfigService;
use App\Http\Services\DBStoreService;
use App\Http\Services\UpdateService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ButtonsController extends Controller
{
    public function insertDB(Request $request)
    {
        $db = new DBStoreService;
        return $db->store($request);

    }
    public function config(){
        $btn= new BtnConfigService;
        return $btn->btnconfig();

    }

    public function homeConfigButtons(Request $request)
    {
        $getConf = new BtnConfigService;
        return $getConf->getConfig($request);
    }
    public function edit(Request $request){
        $button = request('button_id');
        return view('edit',['button_id'=>$button]);
    }
    function update(Request $request){

        $up = new UpdateService;
        return $up->update($request);



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
