<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Bu;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Datatables;
use DB;
class BuController extends Controller
{
    public function index(Bu $bu)
    {
        $bu=$bu->all();
      return view('admin.bu.index',compact('bu'));
    }
    public function create()
    {
        return view('admin.bu.add');
    }

    public function store(Requests\BuRequest $buRequest )
    {

      if($buRequest->file('image'))
      {
        $fileName=uploadImage($buRequest->file('image'));
        if(!$fileName)
        {
      return Redirect::back()->withFlashMessage('من فضلك اختار صورة بمقياس اكبرمن 362*500 ');
      }
    }
      else
      {
        $image='';
      }
        $bu=new Bu();
        $user=Auth::user();
          $data=[
            'bu_name' =>$buRequest->bu_name,
            'bu_price'=>$buRequest->bu_price,
            'bu_rent' =>$buRequest->bu_rent,
            'bu_square'=>$buRequest->bu_square,
            'bu_type' =>$buRequest->bu_type,
            'bu_small_dis' =>$buRequest->bu_small_dis,
            'bu_meta' =>$buRequest->bu_meta,
            'bu_langtuide' =>$buRequest->bu_langtuide,
            'bu_latitude' =>$buRequest->bu_latitude,
            'bu_large_dis' =>$buRequest->bu_large_dis,
            'bu_status' =>$buRequest->bu_status,
            'user_id' =>$user->id,
            'rooms' =>$buRequest->rooms,
            'bu_place'=>$buRequest->bu_place,
            'image'=>$image

          ];
          $bu->create($data);
          return Redirect('/adminplane/bu')->withFlashMessage('تم اضافة العقار بنجاح  ');
    }
    public function edit($id)
    {
      $bu=new Bu();
      $bu=$bu->find($id);
      return view('admin.bu.edit',compact('bu'));
    }
    public function update(Request $request,$id)
    {

      $buupdate=Bu::find($id);
      $buupdate->fill(array_except($request->all(),['image']))->save();
      if($request->file('image'))
      {
        $fileName=uploadImage($request->file('image'),'/public/website/bu_images/','500','362',$buupdate->image);
        if (!$fileName) {
          return Redirect::back()->withFlashMessage('الصورة 500*362 ');
        }
        $buupdate->fill(['image'=>$fileName])->save();
      }
      return Redirect::back()->withFlashMessage('تم التعديل بنجاح ');
    }
    public function destroy($id)
    {
        Bu::find($id)->delete();
        return Redirect::back()->withFlashMessage('تم مسح العقار بنجاح  ');
    }
    public function showAllEnable(Bu $bu)
    {
      $buall=$bu->where('bu_status',1)->orderBy('id','desc')->paginate(1);
      return view('wesite.bu.all',compact('buall'));
    }
    public function forRent(Bu $bu)
    {
      $buall=$bu->where('bu_status',1)->where('bu_rent',1)->orderBy('id','desc')->paginate(1);
      return view('wesite.bu.all',compact('buall'));
    }
    public function forBuy(Bu $bu)
    {
      $buall=$bu->where('bu_status',1)->where('bu_rent',0)->orderBy('id','desc')->paginate(1);
      return view('wesite.bu.all',compact('buall'));
    }
    public function showByType($type,Bu $bu)
    {
      if(in_array($type,['0','1','2']))
      {
      $buall=$bu->where('bu_status',1)->where('bu_type',$type)->orderBy('id','desc')->paginate(1);
      return view('wesite.bu.all',compact('buall'));
    }
    else
      return Redirect::back();
  }
  public function search(Request $request,Bu $bu)
  {


    $requestAll=array_except($request->toArray(),['submit','_token','page']);
    $quary=DB::table('bu')->select('*');
    $array=[];
    $cout=count($requestAll);
    $i=0;
    foreach ($requestAll as $key => $req )
    {
      $i++;
      if($req !='')
      {
      if($key=='bu_price_from' && $request->bu_price_to=='')
      {
        $quary->where('bu_price','>=',$req);
      }
      elseif($key=='bu_price_to' && $request->bu_price_from=='')
        {
          $quary->where('bu_price','<=',$req);
        }
    else
    {
      if($key!='bu_price_to' && $key!='bu_price_from')
          {
            $quary->where($key,$req);
          }
        }
      $array[$key]=$req;
    }
    elseif($cout==$i && $request->bu_price_to!=''&& $request->bu_price_from)
      {
          $quary->whereBetween('bu_price',[$request->bu_price_from,$request->bu_price_to]);
          $array[$key]=$req;
      }
    }

    $buall=$quary->paginate(1);
    return view('wesite.bu.all',compact('buall','array'));
  }

 public function showSingle($id,Bu $bu)
 {
   $buinfo=$bu->findOrFail($id);
   $same_rent=$bu->where('bu_rent', $buinfo->bu_rent)->orderBy(DB::raw('RAND()'))->take(1)->get();
    $same_type=$bu->where('bu_type', $buinfo->bu_type)->orderBy(DB::raw('RAND()'))->take(1)->get();
   return view('wesite.bu.buInfo',compact('buinfo','same_rent','same_type'));

  }
}
