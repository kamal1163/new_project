<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserContoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        return view('home');
     }
    public function contact()
    {
        $url = url("contact");
       return view('contact',compact('url'));
    }

    public function blog()
    {
       return view('blog');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $user_data = User::all();
        return view('index',compact('user_data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // show_data($request->all());
        // die;
        $request->validate([ 
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'message' => 'required',
        ]);

    
       $data = new User();
       $data->name = $request->name;
       $data->email = $request->email;
       $data->phone_no = $request->phone;
       $data->address = $request->address;
       $data->message = $request->message;
       $data->save();
       return redirect('/user/view');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $data = User::find($id);
      if(is_null($data)){
         return redirect('user/view');
      }else{
        $url = url('update') ."/" . $id;
        return view('contact',compact('data','url'));
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone_no = $request->phone;
        $data->address = $request->address;
        $data->message = $request->message;
        $data->save();
        return redirect('/user/view');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $data = User::find($id);
       if(!is_null( $data)){
        $data->delete();
       }
       return redirect('user/view');
    }
}
