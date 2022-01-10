<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function paymentList()
    {
        $payments=Payment::with('user')->get();
        //dd($payments);
        return view('admin.pages.payment.payment-list',compact('payments'));
    }
    public function createpayment()
    {
        $users=User::all();
        // dd($users);
        return view('admin.pages.payment.createpayment-list',compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        Payment::create([

            'user'=>$request->user,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'type'=>$request->type,
            'p_status'=>$request->p_status

        ]);
       
        return redirect()->route('admin.payments');

    }
    public function payment_view($id)
    {
        $payment=Payment::find($id);
         return view('admin.pages.payment.payment-view',compact('payment'));
    }
    public function payment_delete($id)
    {
     Payment::find($id)->delete();
      return redirect()->back();
    }
    public function payment_edit($id)
    {
      // dd($id);
      
      $payment=Payment::find($id);
      $users=User::all();
      if($payment)
      {
       return view('admin.pages.payment.payment-edit',compact('payment','users'));
      }
    }
    public function payment_update(Request $request,$id)
    {
        $payment=Payment::find($id);
        if($payment)
      {
        $payment->update([
            'user'=>$request->user,
            'amount'=>$request->amount,
            'date'=>$request->date,
            'type'=>$request->type,
            'p_status'=>$request->p_status
        ]);
        return redirect()->back()->with('msg', 'Payment Updated Successfully.');
      }
    }

 
}
