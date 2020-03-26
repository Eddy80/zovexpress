<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Auth;
use Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fields){
        $this->fill($fields);
        $this->save();
    }

    public function edit2($fields){
        $this->fill($fields);
        $this->save();
    }


    public function update(Request $request, $id){
        $this->validate($request,[
            'usercode'=> 'required',
        ]);
        $user = User::find($id);
        $user->edit($request->all());
    }

    public function activateuser(Request $request){
        $user = User::findOrFail($request->userid);
        if($user->status == 1){
            $user->status = 0;
        } else {
            $user->status = 1;
        }
        return response()->json([
            'data' => [
                'success' => $user->save(),
            ]
        ]);
    }

    public  function adminuser(Request $request){
        $user = User::findOrFail($request->id);
        if($user->status != 999){
            $user->status = 999;
        } else {
            $user->status = 0;
        }
        $user->edit($request->all('status'));
        return view('root.users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id){
    }

    public static function getLastMembers(){
        return User::orderBy('id', 'desc')->take(5)->get();
    }

    public static function getMembers2(){
        return User::all();
    }

    public static function getMembers(){
        return DB::table('users')->paginate(5);
    }

    public static function getMembersNotApproved(){
        return User::where('status', '=', "0")->paginate(5);
    }

    public static function getMembersCount(){
        return User::count();
    }

    public static function getUserFLNames($userid){
        $user = User::where('id', $userid)->get();
        return $user;
    }

    public  function membersearch(Request $request){
        return response()->json([
            'data' => [
                'success' => 'OK',
            ]
        ]);
    }


    public function search(Request $request){
        $search = $request->input('search');
        if (  (!empty($search)) && ( strlen($search) > 0 ) && ( $search  != 'Axtar...' ) ){
            $members = User::where('firstname', 'like', "$search%")
                ->orWhere('lastname', 'like', "$search%")
                ->paginate(5);
            $members->setPath('/members');
            return view('cab.result')->with('members', $members);
        } else  {
            $members =  DB::table('users')->paginate(5);
            $members->setPath('/members');
            return view('cab.result')->with('members', $members);
        }
    }

    public function notapproved(){
        $notapproved_members_count = User::where('status', '=', "0")->count();
        return $notapproved_members_count;
    }

    public function approveall(){
        User::where('status', '=', 0)->update(['status' => 1]);
        return 0;
    }

    public function logout(){
        Auth::logout();
        return redirect('/home');
    }

    public static function getUsers(){
        return DB::table('users')->get(); //paginate(100);
    }

    public static function getNoUsers(){
        return DB::table('users')->where('status','=','555')->paginate(10);
    }

    public static function getAdmins(){
        return DB::table('users')->where('status','=','999')->paginate(10);
    }

    public function find(Request $request){
        $search = $request->input('firstname');
        $members = User::where('firstname', 'like', "$search%")
            ->orWhere('lastname', 'like', "$search%")
            ->paginate(5);
        return view('cab\searchresult')->with('members', $members);
    }

    public static function getList(){
        return User::all();
    }

    public function viewmember(Request $request, $id){
        $user = User::find($id);
        return view('root.userdetails')->with('user', $user);
    }

    public function storemydata(Request $request){
        $myid = Auth::user()->id;
        $user = User::find( $myid );
        $user->edit($request->all());
        return view('cab');
    }

    public function changemypassword(Request $request){
        $myid = Auth::user()->id;
        $mypassword =  Auth::user()->password;
        $oldpassword = $request->oldpassword;
        $newpassword = $request->password;
        $confirmpassword = $request->password2;

        if (Hash::check($oldpassword, $mypassword)) {
            if ($newpassword === $confirmpassword){
                $request->password =  bcrypt($newpassword);
                $user = User::find( $myid );
                //$user->edit($request->all());
                $user->edit(['password'=> bcrypt($newpassword)]);
                return redirect()->back()->with('status', 'Пароль успешно изменен!!!');
            }
            else {
                return redirect()->back()->with('status', 'Новые пароли не совпадают !!!');
            }
        }
        else {
            return redirect()->back()->with('status', 'Пароль не верный!!!');
        }

         //$2y$10$CDhf2BUBbkMLwWVjxENy3.LVkIPTs3Vu7nYLBBYhuc4G5WXXUvaDq
         //$2y$10$hAvmbSev984zfayFc86f2Oo/J/3bb6Y40RCI6l99qWaxJrC66VK8O
        // $2y$10$CDhf2BUBbkMLwWVjxENy3.LVkIPTs3Vu7nYLBBYhuc4G5WXXUvaDq
    }
}
