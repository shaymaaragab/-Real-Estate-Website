@extends('layouts.app')
@section('title')
اهلا بك زائرنا الكريم
@endsection
@section('header')
<style>
.banner{
    background:url("{{checkImageIsexist(getSetting('main_slider'),'/public/website/slide/','/website/slide/')}}" ) no-repeat center;
    min-height: 500px;
    width: 100%;
    webkit-background-size:100%;
    background-size: cover;
    padding-bottom: 100px;
    background-size: 100%;
}
.hh{
  text-align: center;
  font-size:70px;
  margin-left:150px;
  color: red;
}
</style>

@endsection
@section('content')
<div class="banner text-center" >
  <div class="container">
  <div class="banner-info">
    <h1 class="hh">
      اهلا بك فى
      {{getSetting()}}
    </h1>
    <p>

         {!! Form::open(['url'=>'/search','method'=>'get']) !!}

             {!!Form::text("bu_price_from",null,['class'=>'form-Control','placeholder'=>'سعر العقار من'])!!}

             {!!Form::text("bu_price_to",null,['class'=>'form-Control','placeholder'=>'سعر العقار الى'])!!}

             {!!Form::select("rooms",roomNumber(),null,['class'=>'form-Control','placeholder'=>'عدد الغرف'])!!}

             {!!Form::select("bu_type",bu_type(),null,['class'=>'form-Control','placeholder'=>'نوع العقار '])!!}

             {!!Form::select("bu_rent",bu_rent(),null,['class'=>'form-Control','placeholder'=>'نوع العملية '])!!}

             {!!Form::text("bu_square",null,['class'=>'form-Control','placeholder'=>'المساحه'])!!}

             {!!Form::submit("ابحث",null,['class'=>'banner_btn'])!!}

        {!!Form::close()!!}

    </p>
    <a class="banner_btn" href="{{url('/showAllBullding')}}">المزيد </a>
  </div>
  </div>
</div>
@endsection
