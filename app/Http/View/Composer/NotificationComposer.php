<?php

namespace App\Http\View\Composer;

use App\Models\Notification;
use Illuminate\View\View;

class NotificationComposer
{
    public function compose(View $view)
    {
        $countNoti = count(Notification::all());
        $notification = Notification::orderBy('created_at','desc')->paginate(8);
        $newNoti =Notification::orderBy('created_at','desc')->first();
        $view->with(['notification' => $notification,'countNoti' => $countNoti,'newNoti' => $newNoti]);
    }
}
