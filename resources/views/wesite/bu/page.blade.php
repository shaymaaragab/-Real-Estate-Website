<div class="col-md-3">
  <div class="profile-sidebar">
    <h2 style="margin-right:10px;">
      خيارات العقارات
    </h2>
    <div class="profile-usermenu">
      <ul class="nav">
        <li class="active">
          <a href="{{url('/showAllBullding')}}">
          <i class="glyphicon glyphicon-home"></i>
          كل العقارات </a>
        </li>
        <li>
          <a href="{{url('/forRent')}}">
          <i class="glyphicon glyphicon-user"></i>
        ايجار</a>
        </li>
        <li>
          <a href="{{url('/forBuy')}}">
          <i class="glyphicon glyphicon-user"></i>
        تمليك</a>
        </li>
        <li>
          <a href="{{url('/type/0')}}">
          <i class="glyphicon glyphicon-user"></i>
          الشقق </a>
        </li>
        <li>
          <a href="{{url('/type/1')}}">
          <i class="glyphicon glyphicon-user"></i>
        الفيلال </a>
        </li>
        <li>
          <a href="{{url('/type/2')}}">
          <i class="glyphicon glyphicon-user"></i>
        الشاليهات </a>
        </li>
      </ul>
    </div>
    <!-- END MENU -->
  </div>

  <div class="profile-sidebar">
    <h2 style="margin-right:10px;">
      البحث المتقدم
    </h2>
    <div class="profile-usermenu">
       {!! Form::open(['url'=>'/search','method'=>'get']) !!}
      <ul class="nav" style="margin-right:0px;padding-Right:0px;">
        <li class="active">
           {!!Form::text("bu_price_from",null,['class'=>'form-Control','placeholder'=>'سعر العقار من'])!!}
        </li>
        <li class="active">
           {!!Form::text("bu_price_to",null,['class'=>'form-Control','placeholder'=>'سعر العقار الى'])!!}
        </li>
        <li class="active">
           {!!Form::select("rooms",roomNumber(),null,['class'=>'form-Control','placeholder'=>'عدد الغرف'])!!}
        </li>
        <li class="active">
           {!!Form::select("bu_type",bu_type(),null,['class'=>'form-Control','placeholder'=>'نوع العقار '])!!}
        </li>
        <li class="active">
           {!!Form::select("bu_rent",bu_rent(),null,['class'=>'form-Control','placeholder'=>'نوع العملية '])!!}
        </li>
        <li class="active">
           {!!Form::text("bu_square",null,['class'=>'form-Control','placeholder'=>'المساحه'])!!}
        </li>
        <li class="active">
           {!!Form::submit("ابحث",null,['class'=>'banner_btn'])!!}
        </li>
      </ul>
      {!!Form::close()!!}
    </div>
    <!-- END MENU -->
  </div>
  <br>
</div>
