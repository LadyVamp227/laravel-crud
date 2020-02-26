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

/**
 * Class ButtonsController
 * @package App\Http\Controllers
 */
class ButtonsController extends Controller
{
    /**
     * @param ButtonService $db
     * @param ButtonRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function insertDB(ButtonService $db, ButtonRequest $request)
    {
        return $db->store($request);

    }

    /**
     * @param ButtonService $btn
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function config(ButtonService $btn){
        return $btn->btnconfig();
    }

    /**
     * @param ButtonService $getConf
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function homeConfigButtons(ButtonService $getConf)
    {
        return $getConf->getConfig();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit(){
        $buttonn = new Hashids();
        $id = $buttonn->decode(request('button_id'));
        return view('edit',['button_id'=>$id]);
    }

    /**
     * @param ButtonService $up
     * @param ButtonRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function update(ButtonService $up, ButtonRequest $request){
        return $up->update($request);
    }

    /**
     * @param ButtonService $deletedInfo
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function delete(ButtonService $deletedInfo){
        return $deletedInfo->delete();
    }
}
