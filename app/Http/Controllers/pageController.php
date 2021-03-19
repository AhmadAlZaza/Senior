<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\useres;
use App\Models\consultant;
use App\Models\contractor;
use App\Models\designer;
use App\Models\projects;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class pageController extends Controller
{
    public function i()
    {
        return view('pages.index');
    }
    public function projectInfo()
    {
        $info = projects::select('projects.ID','projects.name as projectName','location','employee','consultant.name as ConsuName','contractor.name as ContraName','designer.name as DesignName','contact_number','start_date','duration','finish_date','Sum','kick_of_meeting','description')
        ->join('consultant','projects.consultant','=','consultant.ID')
        ->join('contractor','projects.contractor','=','contractor.ID')
        ->join('designer','projects.designer','=','designer.ID')
        ->get();
        return view('pages.projectInfo',['data'=>$info]);
    }
    public function newproject()
    {
        $consaltant = DB::table('consultant')->get();
        $contractor = DB::table('contractor')->get();
        $designer = DB::table('designer')->get();
        return view('pages.newProject',['cons'=>$consaltant,'contr'=>$contractor,'des'=>$designer]);
    }
    public function sign_in()
    {
        return view('pages.sign_in');
    }
    public function sign_up()
    {
        return view('pages.sign_up');
    }
    public function AddProject(Request $req)
    {
         $project = new projects;
         $project->name = $req->name;
         $project->location = $req->location;
         $project->employee = $req->employee;
         $project->consultant = $req->consaltant;
         $project->contractor = $req->contractor;
         $project->designer = $req->designer;
         $project->contact_number = $req->contact;
         $project->start_date = $req->start;
         $project->duration = $req->duration;
         $project->finish_date = $req->end;
         $project->Sum = $req->sum;
         $project->kick_of_meeting = $req->kick;
         $project->description = $req->desc;
         $project->save();
         return redirect()->intended('index');

    }
    public function signupp(Request $req)
    {
        $user = new useres;
        $user->name = $req->{'name'};
        $user->Email = $req->{'email'};
        $user->phone_number = $req->{'phone'};
        $user->username = $req->{'username'};
        $passworde = $req->{'password'};
        $req->validate([$req->{'repeat'}=>'same:password']);
        $hashpaswword = Hash::make($passworde);
        $user->password = $hashpaswword;
        $user->save();
        return redirect()->intended('index');
    }
    public function signinn(Request $req)
    {
     $username = $req->{'username'};
        $password = $req->{'password'};
        $x = useres::select('password')->where('username',$username)->get();
        $rep = Hash::make($password);
        return view('pages.index');
        /*if(Hash::check($value, $hashedValue))
        {
            return redirect()->intended('index');
        }
        else
        {
            return redirect()->back()->withInput()->withErrors(['us' => 'incorrect username or password!!']);
        }*/
    }

}
