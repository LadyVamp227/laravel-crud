<?php


namespace App\Http\Services;


use App\Button;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UpdateService
{
public function update(Request $request)
{

    $validate = $request->validate([
        'title' => 'required|max:255',
        'link' => 'required|url|max:255',
    ]);
    $userId = Auth::user()->id;
    $buttonn = request('button_id');
    $title = $request->get('title');
    $link = $request->get('link');
    $color = $request->get('color');
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

}
