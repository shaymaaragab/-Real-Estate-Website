@extends('layouts.app')
@section('title')
العقار
{{$buinfo->bu_name}}
@endsection
@section('header')
<script async defer
     src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap">
   </script>
{!!Html::style('admin.cus.buall.css') !!}
@endsection
@section('content')

  <div class="container">
    <div class="row profile">

  <div class="col-lg-9">
        <ol class="breadcrumb">
          <li><a href="{{url('/')}}">الرئيسية </a></li>
          <li><a href="{{url('/showAllBullding')}}">كل العقارات </a></li>
          <li><a href="{{url('/singleBullding/'.$buinfo->id)}}">{{$buinfo->bu_name}}</a></li>
        </ol>
        <div class="profile-content">
     <h1>
       {{$buinfo->bu_name}}
     </h1>
     <hr>
     <div class="btn-group" role="group">

     <a href="{{url('/search?bu_price='.$buinfo->bu_price)}}" class="btn btn-default">
السعر
:
        {{$buinfo->bu_price}}
     </a>
     <a href="{{url('/search?bu_square='.$buinfo->bu_square)}}" class="btn btn-default">
المساحه
:
        {{$buinfo->bu_square}}
     </a>
     <a href="{{url('/search?bu_place='.$buinfo->bu_place)}}" class="btn btn-default">
المنطقة
:
        {{place()[$buinfo->bu_place]}}
     </a>
     <a href="{{url('/search.rooms='.$buinfo->rooms)}}" class="btn btn-default">
عدد الغرف
:
        {{$buinfo->rooms}}
     </a>
     <a href="{{url('/search?bu_rent='.$buinfo->bu_rent)}}" class="btn btn-default">
نوع العملية
:
        {{bu_rent()[$buinfo->bu_rent]}}
     </a>
     <a href="{{url('/search?bu_type='.$buinfo->bu_type)}}" class="btn btn-default">
نوع العقار
:
        {{bu_type()[$buinfo->bu_type]}}
     </a>
   </div>
     <hr>
     <img src="{{checkImageIsexist($buinfo->image)}}" class="img-resposive"/>
     <br>

     <p>
       {!!nl2br($buinfo->bu_small_dis)!!}
     </p>

   </div>
   <br>
   <div class="profile-content">
     @include('wesite.bu.sharefile',['bu'=>$same_rent])
     @include('wesite.bu.sharefile',['bu'=>$same_type])
   </div>
 </div>

 @include('wesite.bu.page')
</div>
</div>
<br>
<br>

@endsection
