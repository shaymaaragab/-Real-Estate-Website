<?php

namespace App\Http\Controllers;
use App\SiteSetting;
use Illuminate\Http\Request;
use DB;

class SiteSettingController extends Controller
{
    //
    public function index(SiteSetting $siteSetting)
    {
      $siteSetting=$siteSetting->all();
      return view('admin.sitesetting.index',compact('siteSetting'));
    }
    public function store(Request $request,SiteSetting $sitesetting)
    {
      // dd($request->toArray());
      foreach (array_except($request->toArray(),['_token','submit']) as $key=>$req) {
        $sitesettingUpdate=$sitesetting->where('namesetting',$key)->get()->first();
        // dd($sitesettingUpdate,$key);
        if($sitesettingUpdate->type !=3)
        {
          $sitesettingUpdate->fill(['value'=>$req])->save();
        }  else {
          // dd($req);
            $fileName=uploadImage($req,'/public/website/slide/' ,'1600','500',$sitesettingUpdate->value);
            if($fileName)
            {
              $sitesettingUpdate->fill(['value'=>$fileName])->save();
            }
          }
      }
      return redirect()->back()->withFlashMessage('تم التعديل ع الاعدادات بنجاح ');
    }
}
