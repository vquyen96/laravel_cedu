<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Code;
use Auth;
use Mail;
class OrderController extends Controller
{
    public function getList(){
    	$data['items'] = Order::orderBy('ord_id','desc')->paginate(10);

    	return view('backend.order',$data);
    }
    public function getDetail($id){
    	$data['order'] = Order::find($id);
    	$data['items'] = OrderDetail::where('orderDe_ord_id', $id)->paginate(5);

    	return view('backend.orderdetail',$data);
    }
    public function getShip($id){

    	$order = Order::find($id);
    	if($order->ord_status == 1){
    		$order->ord_status = 2;
    	}
    	else{
    		dd('error');
    	}
    	
    	$order->save();
    	return back();
    }
    public function getDone($id){
    	$order = Order::find($id);
    	if($order->ord_status == 2 || $order->ord_status == 1){
    		foreach ($order->orderDe as $orderDe) {
                while (true) {
                    $code_value   = mt_rand(100000, 999999);
                    $codeExit = Code::where('code_value',$code_value)->first();
                    if($codeExit == null){
                        $code = new Code;
                        $code->code_value = $code_value;
                        $code->code_acc_id = $order->acc->id;
                        $code->code_cou_id = $orderDe->course->cou_id;
                        $code->code_status = 0;
                        $code->save();
                        $email = $order->acc->email;
                        $data['code'] = $code;
                        
                        Mail::send('frontend.emailCode', $data, function($message) use ($email){
                            $message->from('vquyenaaa@gmail.com', 'Ceduvn');
                            $message->to($email, $email)->subject('Thank You!');
                            // $message->cc('thongminh.depzai@gmail.com', 'boss');
                            $message->subject('Mã code khóa học');
                        });
                        break;
                    }
                }
            }
            $order->ord_status = 0;
    	}
    	else{
    		dd('error');
    	}
    	
    	$order->save();
    	return back();
    }
    public function getDeny($id){
    	$order = Order::find($id);
    	if($order->ord_status == 2 || $order->ord_status == 1){
    		$order->ord_status = -1;
    	}
    	else{
    		dd('error');
    	}
    	
    	$order->save();
    	return back();
    }

}
