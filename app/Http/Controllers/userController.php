<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Users;

use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Users::all();
        return view('userView.index', compact('data'));
    }

    // public function thongke()
    // {
    //     return view('userView.index', ["showUser" => User::all()]);

    // }

    public function danh_sach(){
        // return response()->json(User::all());
    }

    // public function index() {
    //     // Hiển thị view Thống kê
    //     return view('userView.index');
    // }

    // public function viewInformation(){
    //   return view('userView.account_information',["showUsers" => User::all()]);
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('userView.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email',
        //     'password' => 'required|min:5|max:12',
        // ]);

        // $userInfo = new User;

        // $userInfo->name = $request->name;
        // $userInfo->email = $request->email;
        // $userInfo->password = Hash::make($request->password);

        // $userInfo->save();

        // return redirect()->route('user.index')->with('thongbao', 'Thêm tài khoản thành công');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::findOrFail($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $userInfo = User::find($id);
        // return view('userView.edit', ["data" => $userInfo]);
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
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email'
        // ]);


        // $userInfo = User::find($id);
        // $userInfo->name = $request->name;
        // $userInfo->email = $request->email;

        // $userInfo->save();

//        return view('userView.edit', ["data" => $userInfo]);
        return redirect()->route('defaultPage');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // User::find($id)->delete();
        // return redirect()->route('user.index')->with('thongbao','xóa tài khoản thành công !');
    }
}
