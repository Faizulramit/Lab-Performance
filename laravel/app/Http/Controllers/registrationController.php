<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\employee;
use Validator;

class registrationController extends Controller
{

    function index(){
        return view('registration.add');
    }
    function add(Request $request){
        $employee = new employee();
        $employee->employeename = $request -> employeename;
        $employee->companyname = $request -> companyname;
        $employee->contactnumber = $request -> contactnumber;
        $employee->username = $request -> username;
        $employee->password = $request -> password;
 
    
    
      

        if($employee->save())
        {
            return redirect()->route('list.index');
        }else{
            return redirect()->route('registration.index');
        }
    }
function list(){
    echo "done';
}

}