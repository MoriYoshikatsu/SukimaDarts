<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Parameter;
use App\Models\SpotCategory;

class ParameterController extends Controller
{
    public function parameters(SpotCategory $spot_category)
    {
        return view('input')->with(['spot_categories' => $spot_category->get()]);
    }
    
    public function parameters_input(Request $request)
    {
        $input = $request['parameter'];
        $parameter = new Parameter();
        $parameter->fill($input)->save();
        
        return redirect('/parameters/'. $parameter->id . '/dart');
    }
    
    public function dart(Parameter $parameter)
    {   
        $parameter = Parameter::latest("updated_at")->first();
        return view('dart')->with(['parameter' => $parameter]);
    }
    
    
    
/*綱川さんコード*/    
    public function show_darts()
    {
        $parameter = Parameter::where("user_id", Auth::id())->latest("updated_at")->first();
        return view("trip.darts")->with(["parameter" => $parameter]);
    }

    public function post_parameter(Request $request)
    {   
        $input = $request['parameter'];
        $parameter = new Parameter();
        $parameter->fill($input)->save();
        
        return redirect('users/' . Auth::id() . '/trip/darts');
    }

}