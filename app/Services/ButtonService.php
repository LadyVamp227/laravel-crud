<?php


namespace App\Services;


use App\Button;
use App\Http\Requests\ButtonRequest;
use App\User;
use Hashids\Hashids;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

/**
 * Class ButtonService
 * @package App\Services
 */
class ButtonService

{
    /**
     * @var Request
     */
    private $request;

    /**
     * ButtonService constructor.
     * @param $request
     */
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    /**
     * @param ButtonRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(ButtonRequest $request)
    {
        if(isset(Auth::user()->id)){
            $validated = $request->validated();
            $userId = Auth::user()->id;
            $buttonId = $request->get('button_id');
            $title = $request->get('title');
            $link = $request->get('link');
            $color = $request->get('color');
            $insertedData = DB::table('button')->insert(['user_id' => $userId, 'button_id'=>$buttonId, 'title' => $title, 'link' => $link, 'color' => $color]);

            return redirect('/home');
        }
       abort(404,'Please log in');


    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function btnconfig()
    {

        if (isset(Auth::user()->id)){
            $user = User::all();
            $currentUserId = Auth::user()->id;
            $buttonn = new Hashids();

            $id = $buttonn->decode(request('button_id'));
            foreach ($user as $userId) {
                if ($userId['id'] == $currentUserId) {
                    $dbResult = DB::table('button')->where('user_id', '=', $currentUserId)->get();
                    foreach ($dbResult as $conf) {
                        if (empty($conf)) {
                            return view('btnconfig', ['link' => '/config', 'button_id' => $id]);
                        }
                    }
                }
            }
            return view('btnconfig', ['button_id' => $id]);

        }
        abort(404,"Please log in");

    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getConfig()
    {
        if (isset(Auth::user()->id)){
            $currentUserId = Auth::user()->id;
            $button = Button::where('user_id', $currentUserId)
                ->orderBy('button_id')
                ->get();
            if (!$button->count()) {
                return view('dashboard');
            }
            return view('home',compact('button'));
        }
        abort(404,"Please log in");

    }

    /**
     * @param ButtonRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(ButtonRequest $request)
    {
        if(isset(Auth::user()->id)){
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
        abort(404,"Please log in");

    }

    /**
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    function delete(){
        if (isset(Auth::user()->id)){
            $currentUserId = Auth::user()->id;
            $buttonn = new Hashids();

            $id = $buttonn->decode(request('button_id'));
            $buttonn = request('button_id');
            $deletedInfo = Button::where('user_id',$currentUserId)
                ->where('button_id',$id)
                ->delete();
            return redirect('/home');
        }
        abort(404,"Please log in");
    }

}
