<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class NotificationsController extends Controller
{
    public function index()
    {
        if (request()->wantsJson()) {
            return Auth::user()->notifications->toJson();
        }
        return view('admin.notifications.index', ['notifications' => Auth::user()->notifications]);
    }

    public function destroy(User $user, $notificationId)
    {
        Auth::user()->notifications()->findOrFail($notificationId)->markAsRead();

    }
}
