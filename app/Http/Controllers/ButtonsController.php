<?php

namespace App\Http\Controllers;

use App\Button;
use App\Http\Requests\ButtonRequest;
use App\Http\Services\BtnConfigService;
use App\Http\Services\DBStoreService;
use App\Http\Services\UpdateService;
use App\Services\ButtonService;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ButtonsController extends Controller
{
    public function insertDB(ButtonService $db, ButtonRequest $request)
    {
        return $db->store($request);

    }
    public function config(ButtonService $btn){
        return $btn->btnconfig();
    }

    public function homeConfigButtons(ButtonService $getConf)
    {
        return $getConf->getConfig();
    }
    public function edit(){
        $buttonn = new Hashids();
        $id = $buttonn->decode(request('button_id'));
        return view('edit',['button_id'=>$id]);
    }
    function update(ButtonService $up, ButtonRequest $request){
        return $up->update($request);
    }
    function delete(ButtonService $deletedInfo){
        return $deletedInfo->delete();
    }
}
