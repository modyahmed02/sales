<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\job;
use Illuminate\Routing\ViewController;
use PhpParser\Node\Stmt\Return_;
use App\Http\request\createjobsrequst;
use App\Http\Requests\UpdateJobRequest;
use App\Http\Requests\createjobsrequst as RequestsCreatejobsrequst;

class jobscontroller extends Controller
{
    //
    public function index(){

$data=job::select( "*")->orderby("id","ABC")->paginate(1);
return view('index',['data'=>$data]);
    }
public function create(){
Return view('create');

}
public function store(RequestsCreatejobsrequst $request){

$datatoinsert['name']=$request->job_name;
$datatoinsert['active']=$request->job_active;
$datatoinsert['created_at']=date("Y-m-d H:i:s");
job::create($datatoinsert);

return redirect()->route('jobindex')->with(['success'=>'add successfully']);

}
public function edit($id){
$data=job:: select("*")->find($id);
return view('edit',['data'=>$data]);
}
public function update($id ,UpdateJobRequest $request){

    $datatoupdate['name']=$request->job_name;
    $datatoupdate['active']=$request->job_active;
    $datatoupdate['updated_at']=date("Y-m-d H:i:s");
    job::where(['id'=>$id])->update($datatoupdate);

    return redirect()->route('jobindex')->with(['success'=>'updated successfully']);

}
public function delete($id){
    job::where(['id'=>$id])->delete;
    return redirect()->route('jobindex')->with(['success'=>'delete successfully']);


}
public function ajax_search(request $request){
    if($request->ajax()){
        $searchbyjobname=$request->searchbyjobname;
        $data=job::where("name","like","%{$searchbyjobname}%")->orderby("id","ASC")->paginate(1);
        Return view('ajax_search',['data'=>$data]);
    }
}
     
}
