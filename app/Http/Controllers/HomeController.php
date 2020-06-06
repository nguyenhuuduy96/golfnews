<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $req){
  //   	$today = date('H,i,s');
  //   	echo $today;
  //   	echo "<pre>";
  //   	$ht=date('2010-07-25, 05:50:30');
  //   	$h=date('H',strtotime($ht));
  //   	$i=date('i',strtotime($ht));
  //   	$s=date('s',strtotime($ht));
    
  //   	$kq =  mktime (06-$h, date('i')-$i, date('s')-$s);
  //   	echo date('H:i:s',$kq);echo "<pre>";
    	
  //   	$date=date_create("2013-03-15");
		// echo "<pre>";
  //   	$datetime1 = date_create('2000-04-30, 02:50:30');
		// $datetime2 = date_create('2017-04-20, 01:2:50');
		// $h1=date("h:i:s");
		// $h2=date('02:0:0');
		
		// echo "<pre>";
		// echo $h1;
		// echo "<pre>";
		// echo $ht;
		// echo "<pre>";
		// $interval = date_diff($datetime1, $datetime2);
		// echo "<pre>";
		// $end = $interval->format('%H:%i:%s');
		// $endf=date($end);
		// echo $endf;
		// echo "<pre>";
		// if ($endf>$h2) {
		// 	# code...
		// 	echo "adasd";
		// } else {
		// 	# code...
		// 	echo "string";
		// }
		
		// echo $interval;
		// echo date_format($interval,'h:i:s');
		// dd($interval);
		return view('main');
    }
    
}
