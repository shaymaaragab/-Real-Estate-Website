<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\AddUserRequestAdmin;
use App\User;
class UserController extends Controller
{
    //
    public function index(User $user)
    {
      $user=$user->all();
      return view('admin.user.index',compact('user'));
    }
    public function create()
    {
      return view('admin.user.add');
    }
    public function store(AddUserRequestAdmin $request,User $user)
    {
       $user->create([
          'name' => $request->name,
          'email' =>$request->email,
          'password' => bcrypt($request->password),
      ]);
      return redirect('/adminplane/users')->withFlashMessage('تم اضافة العضو بنجاح');
    }
    public function edit(User $user)
    {
    //  $user=$user->find($id);

      return view('admin.user.edit',compact('user'));
    }
 public function update($id,Request $request)
    {
       $user=new User();
       $userUpdate=$user->Find($id);
       $userUpdate->fill($request->all())->save();
        return Redirect::back()->withFlashMessage('تم تعديل العضو بنجاح ');
    }
    public function updatePassword(User $user,Request $request)
    {
       $userUpdate=$user->Find($request->user_id);
       $password=bcrypt($request->password);
       $userUpdate->fill(['password'=> $password])->save();
       return Redirect::back()->withFlashMessage('تم تغير الباسورد بنجاح');
    }
    public function destroy($id,User $user)
       {
         if($id!=1)
         {
           $userUpdate=$user->Find($id)->delete();
           Bu::where('user_id',$id)->delete();
           return redirect('/adminplane/users')->withFlashMessage('تم حذف العضو بنجاح ');
         }
          return redirect('/adminplane/users')->withFlashMessage('لا يمكن حذف العضو رقم واحد ');
       }

}
