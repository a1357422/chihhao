<?php

namespace App\Http\Controllers;

use App\Models\Basesalary;
use Illuminate\Http\Request;

class BasesalaryController extends Controller
{
    //
    public function edit($id){
        $basesalary = Basesalary::where('id',$id)->first();
        $selectBasesalary = $basesalary->basesalary;

        return view('basesalary.edit',['basesalary'=>$basesalary,'selectBasesalary'=>$selectBasesalary]);
    }

    public function update($id,Request $request){
        $basesalary = Basesalary::findOrFail($id);
        $basesalary->basesalary = $request->input('basesalary');
        $basesalary->save();
        return redirect()->action([PunchController::class, 'index']);
    }
}
