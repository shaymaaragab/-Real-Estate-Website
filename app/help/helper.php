<?php
function getSetting($settingname ='sitename')
{
  return \App\SiteSetting::where('namesetting',$settingname)->get()[0]->value;
}
function checkImageIsexist($imageName,$pathImage='/public/website/bu_images/',$url='/website/bu_images/')
{
  if($imageName !='')
  {
  $path=base_path().$pathImage.$imageName;
  if(file_exists($path))
  {
    return Request::root().$url.$imageName;
  }
}
  else{
   return  getSetting('no_image');
}
}
function uploadImage($request,$path='/public/website/bu_images/',$width='500',$height='362',$deletefileName='')
{
  $dim=getimagesize($request);
  $fileName=$request->getClientOriginalName();
  $request->move(
    base_path().$path,$fileName
  );

  if($deletefileName !='')
  {
     deleteimage(base_path().$path.'/'.$deletefileName);
  }
  return $fileName;
}
function deleteimage($deletefileName)
{
  if(file_exists($deletefileName))
  {
    \Illuminate\Support\Facades\File::delete($deletefileName);
  }
}

function bu_type()
{
  $array = [
    'شقة',
    'فيلا' ,
  'شاليه' ,

  ];
  return $array;
}

function bu_rent()
{
  $array = [
    'تمليك' ,
    'ايجار' ,

  ];
  return $array;
}

function bu_status()
{
  $array = [
    'غير مفعل' ,
      'مفعل' ,
  ];
  return $array;
}
function roomNumber()
{
  $array = [];
  for($i=0;$i<=50;$i++)
  {
    $array[$i]=$i;
  }
  return $array;
}

function place()
{
  return[
    "قنا",
    "اسوان",
    "الاقصر",
    "بنى سويف",
    "المنيا",
    "اسيوط",
    "القاهرة ",
  ];

}
