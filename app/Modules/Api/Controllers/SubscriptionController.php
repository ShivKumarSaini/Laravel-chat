<?php

namespace App\Modules\Api\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Modules\Api\Models\Subscription;
use App\Helpers\Session as AppSession;
use App\Helpers\Helper as AppHelper;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function subscribe(Request $request)
    {
        $userData = AppSession::getLoginData();
        if (!$userData || $userData->role != 'member') {
        //   return Response()->json(['success' => false, 'message' => 'Please login.']);
            return redirect('login');
        }

        $subscription = new Subscription;
        $subscription->user_id = $userData->id;
        $subscription->model_id = $request->model_id;
        $subscription->start_date = Carbon::now();

        if ($subscription->save()) {
            return Response()->json(['success' => true, 'message' => 'Subscribe to model', 'subscription' => $subscription]);
        }
        
        return Response()->json(['success' => false, 'error' => 'System error.']);
        

    }
}
