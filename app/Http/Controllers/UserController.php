<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use App\Profile;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('admin');
    }

    
    public function index()
    {    $user = User::all();

        
        return view('blog/admin/users/index')->with('users' , $user);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blog/admin/users/create');



    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email'

        ]);
       $user = User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => bcrypt('password'),
          'admin' => 0
        ]);

        $avatar = $request->avatar;
       
        $avatar_new_name = time().$avatar->getClientOriginalName();
      
        $avatar->move('uploads/avatar', $avatar_new_name);

        $profile = Profile::create([
        'user_id' => $user->id,
        'avatar' => 'uploads/avatar/'.$avatar_new_name
        ]);
        Session::flash('app_info','User Added Successfully');
        return redirect()->back();
    }
    public function makeAdmin($id){
        $user = User::find($id);
        $user->admin = 1;
        $user->save();
        Session::flash('app_info','Admin is Created Successfully');
        return redirect()->back();

    }
    
    public function notAdmin($id){
        $user = User::find($id);
        $user->admin = 0;
        $user->save();
        Session::flash('app_info','Admin is Removed Successfully');
        return redirect()->back();

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->profile->delete();

        $user->delete();

        Session::flash('app_warning','User Deleted Successfully');

        return redirect()->back();
    }
}
