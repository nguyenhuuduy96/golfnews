<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\Notification;
class NotificationController extends Controller
{
    public function index(Request $req){
    	
    	$notifications = Notification::paginate(10);
  
    	return view('admin.list',['notifications'=>$notifications]);
    }
    public function getUpdate(Request $req){
    	$notification = Notification::find($req->id);
    	return response()->json(['notification'=>$notification]);
    }
    public function delete(Request $req){
    	$time_expired=date('22:00:00');
    	$today=date("Y-m-d");
    	$h=date('H',strtotime($time_expired));
    	$i=date('i',strtotime($time_expired));
    	$s=date('s',strtotime($time_expired));
    	//$kq là thời gian hết hạn chừ thời gian hiện tại
    	$kq =  mktime ($h-date('H'), $i-date('i'), $s - date('s'));
	    $KqFormat= date('H:i:s',$kq);
	    if ($time_expired>date('H:i:s')) {
	    	
	    		$notification = Notification::find($req->id);
	    		if (date('Y-m-d',strtotime($notification->created_at))!==date('Y-m-d')) {
	    			$notification->delete();
	    			return response()->json(['error'=>'']);
	    		} else {
	    			return response()->json(['error'=>'chỉ xóa được khi đúng ngày đăng tin và trước 20h!']);
	    		}
	    		
	    	
	    }else{
	    	return response()->json(['error'=>'hết giờ xóa']);
	    }
    }
    public function save(Request $req){
    	$time_expired=date('20:00:00');
    	$today=date("Y-m-d");
    	$h=date('H',strtotime($time_expired));
    	$i=date('i',strtotime($time_expired));
    	$s=date('s',strtotime($time_expired));
    	//$kq là thời gian hết hạn chừ thời gian hiện tại
    	$kq =  mktime ($h-date('H'), $i-date('i'), $s - date('s'));
	    $KqFormat= date('H:i:s',$kq);
    	$Notification = Notification::whereDate('created_at',$today)->first();
    	if ($time_expired>date('H:i:s')) {
	    	if (!empty($req->id)) {
	    		if ($KqFormat>date('01:00:00')) {
	    			$update=Notification::find($req->id);
	    			
	    			if (date('Y-m-d',strtotime($update->created_at))!==date('Y-m-d')) {
		    			$update->fill($req->all());
	    				$update->save();
	    				return response()->json(['notification'=>$update,'error'=>'']);
		    		} else {
		    			return response()->json(['error'=>'chỉ được update vào khi đúng ngày đăng tin và trước 20h!','notification'=>'']);
		    		}
	    			
	    			
	    		} else {
	    			return response()->json(['error'=>'hết thời gian sửa tin']);
	    		}
	    		
	    	} else {
	    		if (!empty($Notification)) {
	    		
	    		return response()->json(['error'=>'Ngày hôm nay đã tin rồi đăng!','notification'=>'']);
		    	}
		    	if ($KqFormat>date('02:00:00')) {

	    			$newNotification = New Notification();
	    			$newNotification->author= Auth::user()->name;
	    			$newNotification->day_add=date('Y-m-d');

	    			$newNotification->fill($req->all());
	    			
	    			$newNotification->save();
	    			return response()->json(['notification'=>$newNotification,'error'=>'']);

	    		}else{
	    			return response()->json(['error'=>'hết thời gian đăng tin']);
	    		}
		    		
	    	}		    	
	    }else{
	    		return response()->json(['error'=>'hết thời gian đăng tin hoặc sửa']);
	    }
    	
    	
    }
}
