<?php
namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;


class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /*
    public function index()
    {
        $users = User::all();
        return view('admin.users', [ 'users' => $users ]);
    }

    public function cab()
    {
        $users = User::all();
        return view('cab.main', [ 'users' => $users ]);
    }
*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    /*
    public function store(Request $request)
    {
        //dd($request->all());
        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required'
            //'avatar' => 'nullable|image'
        ]);

        $user = User::add($request->all());
        //$user->uploadAvatar($request->file('avatar'));


        //echo 'ok';

        //return redirect()->route('users.index');
        //return redirect()->route('users.cab'); // burda users -Controllerdi (UsersController)  cab - onun metodudur
        return redirect('/login');
    }

    public function storebyadmin(Request $request)
    {
        $this->validate($request,[
            'firstname'=> 'required',
            'lastname'=> 'required',
            'email'=> 'required|email|unique:users',
            'password'=> 'required'
        ]);
        $user = User::add($request->all());
        return redirect('/members');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    /*
    public function show($id)
    {
        //
    }
    */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function edit2($fields)
    {
        $this->fill($fields);
        $this->save();
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/home');
    }

    public static function getUsers()
    {
        return DB::table('users')->paginate(10);
    }



    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'usercode'=> 'required',
//            'lastname'=> 'required',
//            'email'=> 'required|email|unique:users',
//            'password'=> 'required'
//            //'avatar' => 'nullable|image'
        ]);

        $user = User::find($id);
        $user->edit($request->all());

        //return redirect()->route('cab.members');
    }

    public function activateuser(Request $request)
    {

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

    public function adminuser(Request $request)
    {

        $user = User::findOrFail($request->userid);

        if($user->is_admin == 1){
            $user->is_admin = 0;
        } else {
            $user->is_admin = 1;
        }

        return response()->json([
            'data' => [
                'success' => $user->save(),
            ]
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public static function getList()
    {
        return User::all();
    }


    public static function getLastMembers()
    {

        // return User::all();
        return User::orderBy('id', 'desc')->take(5)->get();
    }

    public static function getMembers2()
    {


        return User::all();


    }

    public static function getMembers()
    {

        // return User::all();
        //return User::orderBy('id', 'desc')->get();
        // return DB::table('users')->get();
        return DB::table('users')->paginate(5);
        //$users = DB::table('users')->paginate(10);
        // return view('members', ['users'=>$users]);

    }

    public static function getMembersNotApproved()
    {

        // return User::all();
        //return User::orderBy('id', 'desc')->get();
        // return DB::table('users')->get();
        return User::where('status', '=', "0")->paginate(5);
        //$users = DB::table('users')->paginate(10);
        // return view('members', ['users'=>$users]);

        // return DB::table('users')->paginate(5);

    }



    public static function getMembersCount()
    {

        // return User::all();
        return User::count();
    }

    public static function getUserFLNames($userid)
    {

        // return "Hello World!";
        $user = User::where('id', $userid)->get();
        return $user;
        // return User::where('id', $request->get('user_id'));
    }

    public  function membersearch(Request $request)
    {
        /*
        if ($request->ajax())
        {
            $data = User::search($request->get('firstname'))->get();
            return response()->json($data);
        }

        */
        // $user = User::findOrFail($postdata->userid);



        return response()->json([
            'data' => [
                'success' => 'OK',
            ]
        ]);

        // return User::all();
        //return User::orderBy('id', 'desc')->get();
        // return DB::table('users')->get();
        // return DB::table('users')->paginate(5);
        //$users = DB::table('users')->paginate(10);
        // return view('members', ['users'=>$users]);
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
            //return view('cab.members');
            //return back();
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
    /*
        $keyword = Input::get('search');
            if(!empty($keyword)){
                $allX = News::with('kateler')->where('lang',Lang::getLocale())->where('derc_et', 1)->where('latin_xeber', 'LIKE', "%$keyword%")->orWhere('xeber_ad', 'LIKE', "%$keyword%")->paginate(10);
                $allX->setPath('/search?search='.$keyword);

            }else{
                return back();
            }
    */
    public function find(Request $request){
        $search = $request->input('firstname');

        $members = User::where('firstname', 'like', "$search%")
            ->orWhere('lastname', 'like', "$search%")
            ->paginate(5);

        return view('cab\searchresult')->with('members', $members);
    }

    public function viewmember(Request $request, $id){



        $user = User::find($id);
        //return $member->firstname;

        return view('root.userdetails')->with('user', $user);
    }


    public function storemydata(Request $request){

       //  dd($request->all());
        $myid = Auth::user()->id;
        /*
                $this->validate($request,[
                    'firstname'=> 'required',
                    'lastname'=> 'required',
                    'email'=> 'required|email|unique:users',
                    'password'=> 'required'
                    //'avatar' => 'nullable|image'
                ]);
        */
        $user = User::find( $myid );
        $user->edit($request->all());

        // return redirect()->route('cab.profil');
        return view('cab');


        // $member = User::find($id);
        //return $member->firstname;

        // return view('cab.memberdetails')->with('member', $member);
    }
}
