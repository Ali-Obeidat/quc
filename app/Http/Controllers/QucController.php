<?php

namespace App\Http\Controllers;

use App\Models\Quc;
use Illuminate\Http\Request;

class QucController extends Controller
{
    public function Step1()
    {
        
        return view('profail.Income');
    }

    public function createStep1(Request $request)
    {
        $validatedData = $request->validate([
            'Income' => 'required',
           
        ]);

        if(empty($request->session()->get('Quc'))){
            $Quc = new Quc();
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
        }else{
            $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
        }
        // return session()->get('Quc');
        return redirect('/quc/step2');

    }

    public function Step2(Request $request)
    {
        
        return view('profail.Investments');
    }

    public function CreateStep2(Request $request)
    {
        $validatedData = $request->validate([
            'Investments' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
            // return session()->get('Quc');
        return redirect('/quc/step3');

    }

    public function Step3(Request $request)
    {
        
        return view('profail.Available_Amount');
    }

    public function CreateStep3(Request $request)
    {
        $validatedData = $request->validate([
            'Available_Amount' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);
            $request->session()->put('Quc', $Quc);
            // return $validatedData;
            // return session()->get('Quc');
        return redirect('/quc/step4');

    }
    public function Step4(Request $request)
    {
        
        return view('profail.Status');
    }

    public function CreateStep4(Request $request)
    {
        $validatedData = $request->validate([
            'Status' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
            // return $validatedData['Status'];
            if ($validatedData['Status'] == 'Student') {
                return redirect('/quc/Student');
            }else{
                return redirect('/quc/EmploymentStatus');
            }
            // return session()->get('Quc');
        return redirect('/quc/step4');

    }
    public function Step5(Request $request)
    {
        
        return view('profail.last');
    }

    public function CreateStep5(Request $request)
    {
        $validatedData = $request->validate([
            'Status' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
            // return $validatedData['Status'];
            if ($validatedData['Status'] == 'Student') {
                return redirect('/quc/Student');
            }else{
                return redirect('/quc/EmploymentStatus');
            }
            // return session()->get('Quc');
        return redirect('/quc/step4');

    }
    public function Student(Request $request)
    {
        
        return view('profail.Student');
    }

    public function CreateStudent(Request $request)
    {
        $validatedData = $request->validate([
            'Student' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
          
            // return session()->get('Quc');
        return redirect('/quc/step5');

    }
    public function EmploymentStatus(Request $request)
    {
        
        return view('profail.Industry');
    }

    public function CreateEmploymentStatus(Request $request)
    {
        $validatedData = $request->validate([
            'Industry' => 'required',
            'Funds' => 'required',
           
        ]);
        $Quc = $request->session()->get('Quc');
            $Quc->fill($validatedData);

            $request->session()->put('Quc', $Quc);
          
            // return session()->get('Quc');
        return redirect('/quc/step5');

    }
}
