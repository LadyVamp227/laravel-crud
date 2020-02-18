<?php


namespace App\Http\Services;


use App\Button;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BtnConfigService
{
    public function btnconfig()
    {
        $user = User::all();
        $currentUserId = Auth::user()->id;
        $buttonId = 1;
        $buttonn = request('button_id');
        foreach ($user as $userId) {
            if ($userId['id'] == (string)($currentUserId)) {
                $dbResult = DB::table('button')->where('user_id', '=', (string)($currentUserId))->get();
                $config = ((array)$dbResult);
                foreach ($config as $conf) {
                    if (empty($conf)) {
                        return view('btnconfig', ['link' => '/config', 'button_id' => $buttonn]);
                    }
                }
            }
        }
        return view('btnconfig', ['button_id' => $buttonn]);
    }

    public function getConfig(Request $request)
    {

        $user = User::all();
        $currentUserId = Auth::user()->id;
        $button = Button::where('user_id', $currentUserId)
            ->orderBy('button_id')
            ->get();
        if (!$button->count()) {
            return view('dashboard');
        }
        else {
                return view('home',compact('button'));
        }
        }
}
