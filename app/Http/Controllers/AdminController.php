<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Carbon\Carbon;
use Shetabit\Visitor\Models\Visit;
use Illuminate\Http\Request;
use DB;
use App\Models\Service;
use App\Models\Testimonial;
use App\Models\ClientMessage;
use App\Models\Team;
use App\Models\Blog;
use App\Models\Gallery;

class AdminController extends Controller
{
    public function index(){

        // $total    = Visit::whereIn('browser', ['IE', 'Firefox', 'Chrome', 'Safari', 'Opera'])->whereDate('created_at', '>', Carbon::now()->subDays(28))->get();
        // $chrome   = $total->where('browser', 'Chrome')->count();
        // $firefox  = $total->where('browser', 'Firefox')->count();
        // $internet = $total->where('browser', 'IE')->count();
        // $safari   = $total->where('browser', 'Safari')->count();
        // $opera    = $total->where('browser', 'Opera')->count();

        // $total   = $total->count();
        // $browser = [];

        // $browser['chrome']   = round(($chrome /  $total) * 100);
        // $browser['firefox']  = round(($firefox /  $total) * 100);
        // $browser['internet'] = round(($internet /  $total) * 100);
        // $browser['safari']   = round(($safari /  $total) * 100);
        // $browser['opera']    = round(($opera /  $total) * 100);

        // $today_page_views = Visit::whereDate('created_at', '=', Carbon::today())->count();

        // $unique_users = User::count();


        // $top_pages = Visit::select('url')
        //     ->selectRaw('COUNT(*) AS count')
        //     ->groupBy('url')
        //     ->orderByDesc('count')
        //     ->limit(10)
        //     ->get();
        //     $subs = Subscriber::select(array(DB::raw('DATE(created_at) AS date')), DB::raw('COUNT(code) AS count'))->groupBy('date')->get();

        //     $total = [];
        //     $date  = [];

        //     foreach($subs as $w){

        //         $total[] = Subscriber::whereDate('created_at', Carbon::parse($w->date))->get()->count();
        //         $date[] = Carbon::parse($w->date)->format('d M');

        //     }

        // return view('admin.index',compact('browser', 'today_page_views', 'unique_users', 'top_pages', 'total', 'date','subs'));


        return view('admin.index',[
            'service'       => Service::all(),
            'testimonial'   => Testimonial::all(),
            'message'   => ClientMessage::all(),
            'team'   => Team::all(),
            'blog'   => Blog::all(),
            'gallery'   => Gallery::all(),
        ]);

    // End    
    }

    // User List
    public function userList(){

        $users = User::orderBy('name', 'asc')->get();

        return view('admin.users.index', compact('users'));
    }

    // User Create
    public function userCreate(){

        return view('admin.users.create');
    }

    // user store function for create new user
    public function userStore(Request $request){
        $request->validate([
            'name'   => 'required',
            'email'  => "required|unique:users|email",
            'password'  => 'required',
        ]);

        $user_name = $request->name;
        $user_email = $request->email;
        $user_password = $request->password;

        User::insert([
            'name' => $user_name,
            'email' => $user_email,
            'password' => bcrypt($user_password),
        ]);

        return redirect()->route('users.index')->with('success', 'User Created Successfully!');

    }

    public function userEdit($id){
        $single_user = User::find($id);
        return view('admin/users/edit', compact('single_user'));
    }

    public function userUpdate(Request $request, $id){
        $request->validate([
            'name'   => 'required',
            'email'  => "email",
        ]);

        $user_name = $request->name;
        $user_email = $request->email;

        User::find($id)->update([
            'name' => $user_name,
            'email' => $user_email,
        ]);

        return redirect()->route('users.index')->with('success', 'User Update Successfully!');
    }


    
     // User Delete
    public function userDestroy($id){

        $user = User::find($id);

        $user->delete();

        return back()->withSuccess('User deleted');
    }
    
}
