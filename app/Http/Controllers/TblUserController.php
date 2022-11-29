<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repository\TblUserRepository;
use Maatwebsite\Excel\Facades\Excel;
use App\Lib\RandomUser;
use App\Models\TblUser;
use App\Jobs\ExportUsers;
use App\Exports\ExportUser;
use Illuminate\Support\Facades\Redirect;

class TblUserController extends Controller
{
    /**
     * $tblUserRepository
     */
    protected $tblUserRepository;

    public function __construct(TblUserRepository $tblUserRepository)
    {
        $this->tblUserRepository = $tblUserRepository;
    }
    /**
     * Function::importUser
     * @param::
     * Description:: insert the user details
     */
    public function importUser():void
    {
        $randomUser = new RandomUser();
        $userData = $randomUser->makeRequest();
        //(new TblUserRepository)->save($userData);
        //app(TblUserRepository::class)->save($userData);
        $this->tblUserRepository->save($userData);
    }

    public function showUsers($offset=0)
    {
        //$users = TblUser::skip($offset) ->take(10)->get()->toArray();
        $users = TblUser::all()->toArray();
        return view('users_list',['data' => $users]);
    }

    public function editUser($id)
    {
        $users = TblUser::where(['id' => $id])->first()->toArray();
        return view('edit_user',['data' => $users]);
    }

    /**
     * Function::getUsers
     * @param::
     * Description:: gettingUsers
     * @return:: json
     */
    public function getUsers($page=0)
    {
        // $users = $this->tblUserRepository->findAll()->toArray();
        $offset = $page*10;
        $users = TblUser::skip($offset) ->take(10)->get()->toArray();
        return response()->json($users, 200);
    }

    /**
     * Function::updateUser
     * @param:: $request
     * Description:: Updating the user information
     * @return:: json
     */
    public function updateUser(Request $request)
    {
        try {
            $result = ['result' => array(), 'errors' => array(), 'status' => 200];
            $userData = new TblUser();
            $user = $userData->find(['id' => $request->id])->first();
            $user->title = $request->title;
            $user->first_name = $request->first_name;
            $user->last_name = $request->last_name;
            $user->street = $request->street;
            $user->city = $request->city;
            $user->state = $request->state;
            $user->country = $request->country;
            $user->postcode = $request->postcode;
            $user->email = $request->email;
            $user->phone = $request->phone;
            $affected = $user->save();
            if ($affected) {
                 return redirect()->to('show-users')->with('message', 'Updated Successfully' );
            } else {
                $result['result'] = [];
                $result['errors'] = 'Something went wrong please try again later';
                $result['status'] = 403;
                return $result;
            }            
        } catch(Exception $e) {
            $result['result'] = [];
            $result['errors'] = $e->getMessage();
            $result['status'] = $e->getCode();
            return $result;
        }
    }

    public function exportUsers()
    {
        //return Excel::download(new ExportUser, 'users.xlsx');
        $this->dispatch(new ExportUsers([]));
        return redirect()->to('show-users')->with('message', 'Added in QUEUE' );
    }

}
