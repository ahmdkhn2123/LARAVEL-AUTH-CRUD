<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
class productC extends Controller
{
    public function addP(Request $request)
    {
        $data=new product();
        $data->name=$request->get('prod_name');
        $data->price=$request->get('prod_price');
        $data->category=$request->get('prod_category');
        $result=$data->save();
        if($result){
            return back()->with('success',"Products Add Successfully");
        }else{
            return back()->with('fail',"Somthing wrong");

        }
    }

    public function show()
    {
        $data=product::all();
        return view ('show',['data'=>$data]);
    }

    public function del($id)
    {
        $data=product::find($id);
        if($data){
            $data->delete();
            return redirect('show');
        }else{
            echo "Data Is Not Present";
        }
    }


    public function edit($id)
    {
        $data=product::find($id);
        return view ('edit',['data'=>$data]);

    }

    public function update(Request $request,$id)
    {
        $data=product::find($id);
        $data->name=$request->get('prod_name');
        $data->price=$request->get('prod_price');
        $data->category=$request->get('prod_category');
        $result=$data->save();
        if($result){
            return redirect('show');
        }
    }



}
