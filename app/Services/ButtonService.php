<?php


namespace App\Services;


use App\Button;
use App\Http\Requests\ButtonRequest;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ButtonService

{
    private $request;

    /**
     * ButtonService constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function store(ButtonRequest $request)
    {
        $validated = $request->validated();
        $userId = Auth::user()->id;
        $buttonId = $request->get('button_id');
        $title = $request->get('title');
        $link = $request->get('link');
        $color = $request->get('color');
        $insertedData = DB::table('button')->insert(['user_id' => $userId, 'button_id'=>$buttonId, 'title' => $title, 'link' => $link, 'color' => $color]);

        return redirect('/home');


    }
    public function btnconfig()
    {
        $user = User::all();
        $currentUserId = Auth::user()->id;
        $buttonn = request('button_id');
        foreach ($user as $userId) {
            if ($userId['id'] == $currentUserId) {
                $dbResult = DB::table('button')->where('user_id', '=', $currentUserId)->get();
                foreach ($dbResult as $conf) {
                    if (empty($conf)) {
                        return view('btnconfig', ['link' => '/config', 'button_id' => $buttonn]);
                    }
                }
            }
        }
        return view('btnconfig', ['button_id' => $buttonn]);
    }
    public function getConfig()
    {
        $currentUserId = Auth::user()->id;
        $button = Button::where('user_id', $currentUserId)
            ->orderBy('button_id')
            ->get();
        if (!$button->count()) {
            return view('dashboard');
        }
        return view('home',compact('button'));
    }
    public function update(ButtonRequest $request)
    {
        $validated = $request->validated();
        $buttonn = request('button_id');
        $title = $this->request->get('title');
        $link = $this->request->get('link');
        $color = $this->request->get('color');
        $currentUserId = Auth::user()->id;
        $updateInfo = Button::where('user_id', $currentUserId)
            ->where('button_id', $buttonn)
            ->get();
        foreach ($updateInfo as $up) {
            $up->link = $link;
            $up->color = $color;
            $up->title = $title;
            $up->save();

        }
        return redirect('/home');
    }
    function delete(){
        $currentUserId = Auth::user()->id;
        $buttonn = request('button_id');
        $deletedInfo = Button::where('user_id',$currentUserId)
            ->where('button_id',$buttonn)
            ->delete();
        return redirect('/home');


    }

}
