<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\members;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Session;
use Carbon\Carbon;
use Uuid;

class MembersController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return View main page for members
	 */
	public function index()
	{
		//
		$data = 'list of all users';
		$users= members::where('active','<>',3)->get(); 
		//echo var_dump($users); exit;
		return view('admin.members.list')->with('users',$users);
	 
		  
	}

 

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//laoding View main page for members

            return Redirect::to('admin/members/');
		 

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{ 
		try {
		        $rules = array(
		            'username'       => 'required',
		            'email'      => 'required|email',
		            'phone' => 'required|numeric'
		        );
		        $validator = Validator::make(Input::all(), $rules);
		        // process the login
		        if ($validator->fails()) {
		            return Redirect::to('admin/members/')
		                ->withErrors($validator)
		                ->withInput(Input::except('password'));
		        } else {
		            // store
		            $member = new members;
		            $member->username       = Input::get('username');
		            $member->email      = Input::get('email');
		            $member->phone = Input::get('phone');
					$member->profilePic= "avatar.png";

		            $member->save();

		            // redirect
		            Session::flash('message', 'Successfully created Member!');
		            return Redirect::to('admin/members/');
		        }
        }catch (\Illuminate\Database\QueryException $e) { 
			     Session::flash('error', "SQL Error: " . $e->getMessage() . "\n");
		            return Redirect::to('admin/members/');

		}
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{ 
		$user= members::find($id)->toArray(); 
		//echo var_dump($users); exit;
		if($user['active']==3) {return Redirect::to('admin/members/');}
		return view('admin.members.profile')->with('user',$user);
	}
	
	public function listAll()
	{
		//
		$data = 'list of all users';
		$users= members::all()->toArray(); 
		//echo var_dump($users); exit;
		return view('admin.members.list')->with('users',$users);

	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		$users= members::find($id)->toArray(); 
		return view('admin.members.update')->with('user',$users);
		
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Redirect to page
	 */
	public function update($id, Request $request)
	{
		//
		try {
				$code = Uuid::generate(1);
				$user= members::findOrFail($id); 
				//dd ($code->time.' - '.$user->username .'_'. time() );
				

				if (is_null($request->file('image'))) {
					# code...
				}else {
					$imageName = $code->time . '.' . 
			        $request->file('image')->getClientOriginalExtension();
					$request->file('image')->move(
					        base_path() . '/public/images/users/', $imageName
					);
					$user->profilePic= $imageName;
				}

				if($request->ajax()) { 
					$user->active=$request->statuscode;
					 $user->update($request->all());
					 return;
		        }
				$user->update($request->all());
				return redirect('admin/members');
		 }catch (\Illuminate\Database\QueryException $e) { 
			     Session::flash('error', "SQL Error: " . $e->getMessage() . "\n");
		            return Redirect::to('admin/members/'.$id.'/edit');

		}
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id , Request $request)
	{

		if(!$request->ajax()) {
            return json_encode( array(
                'msg' => 'Unauthorized attempt to create setting'
            ) );
        }
		$user= members::find($id);
		$user->active=3;
		$user->save();
	}

}
