<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use App\Models\User;
use Exception;

class UsersController extends Controller
{
    public $objectName;
    public $folderView;

    public function __construct(User $model)
    {
//        $this->middleware(['permission:employees']);
        $this->objectName = $model;
        $this->folderView = 'admin.users.';
    }

    public function index()
    {
        $users = $this->objectName::where('id', '!=', 1)->orderBy('created_at', 'desc')->get();
        return view($this->folderView . 'users', compact('users'));
    }

    public function create()
    {

        return view($this->folderView . 'create_user');
    }

    public function store(Request $request)
    {
        $data = $this->validate(\request(),
            [
                'name' => 'required|unique:users,name',
                'email' => 'required|unique:users,email',
                'password' => 'required|min:8|confirmed',
                'password_confirmation' => 'required|min:6',
            ]);
        if ($request['password'] != null && $request['password_confirmation'] != null) {
            $data['password'] = bcrypt(request('password'));
            User::create($data);
            session()->flash('success', 'user added successfully');
            return redirect(url('users/create'));

        }
    }


    public function get_collage_by_role_id(Request $request, $id)
    {
        if ($id == 3 || $id == 9 || $id == 10 || $id == 11) {
            //مدير مجمع
            $data = College::where('type', 'college')->where('deleted', '0')->get();
            return view('admin.users.parts.collage', compact('data'));
        } else if ($id == 5 || $id == 12 || $id == 13 || $id == 14) {
            //مدير دار
            $data = College::where('type', 'dorr')->where('deleted', '0')->get();
            return view('admin.users.parts.dorr', compact('data'));
        } else {
            return 1;
        }
    }

    public function edit($id)
    {
        $data = $this->objectName::where('id', $id)->first();
        return view($this->folderView . 'edit', \compact('data'));
    }

    public function update(Request $request, $id)
    {
        if ($request['password'] != null) {
            $data = $this->validate(\request(),
                [
                    'name' => 'required',
                    'email' => 'required|unique:users,email,' . $id,
                    'password' => 'required|min:8|confirmed',
                ]);
        } else {
            $data = $this->validate(\request(),
                [
                    'name' => 'required',
                    'email' => 'required|unique:users,email,' . $id,
                ]);
        }
        if ($request['password'] != null && $request['password_confirmation'] != null) {
            $data['password'] = bcrypt(request('password'));
            $newData['name'] = $request['name'];
            User::where('id', $id)->update($data);
        } else {
            unset($data['password']);
            unset($data['password_confirmation']);
            User::where('id', $id)->update($data);
        }
        session()->flash('success', 'updated');
        return redirect(url('users'));
    }

    public function update_Actived(Request $request)
    {
        $data['status'] = $request->status;
        $user = User::where('id', $request->id)->update($data);
        return 1;
    }

    public function destroy($id)
    {
        $user = $this->objectName::where('id', $id)->first();
        try {
            $user->delete();
            session()->flash('success', 'deleted');
        } catch (Exception $exception) {
            session()->flash('danger', trans('admin.emp_no_delete'));
        }
        return back();
    }
}
