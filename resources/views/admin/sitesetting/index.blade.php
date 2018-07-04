@extends('admin.layouts.layout')
@section('title')
تعديل اعدادات الموقع
@endsection


@section('header')

@endsection

@section('content')
<section class="content-header">
      <h1>
تعديل اعدادات الموقع
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
        <li><a href="{{url('/adminplane/sitesetting')}}">تعديل اعدادات الموقع </a></li>
           </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">اضف عضو جديد</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                  <form action="{{url('/adminplane/sitesetting')}}" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    @foreach($siteSetting as $setting)
                    <div class="form-group{{ $errors->has($setting->namesetting) ? ' has-error' : '' }}">

                        <div class="col-md-10">
                    <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->
                        @if($setting->type==0)
                           {!!Form::text($setting->namesetting,$setting->value,['class'=>'form-control'])!!}
                        @elseif($setting->type==3)
                           @if($setting->value !='')
                              <img src="{{checkImageIsexist($setting->value,'/public/website/slide/','/website/slide/')}}" width="150"/>
                              <br>
                           @endif
                           {{$setting->value}}
                         {!!Form::file($setting->namesetting,null,['class'=>'form-control'])!!}
                        @else
                        {!!Form::textarea($setting->namesetting,$setting->value,['class'=>'form-control'])!!}
                        @endif
                            @if ($errors->has($setting->namesetting))
                                <span class="help-block">
                                    <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                </span>
                            @endif
                        </div>

                        <div class="col-md-2">
                          {{$setting->slug}}
                        </div>
                    </div>
                    <div class="clear-fix"></div>
                    <br>
                    @endforeach

                </div>
                <button type="submit" name="submit" class="btn btn-app" >
                  <i class="fa fa-save"></i>
              حفظ اعدادات الموقع
            </button>
                  </form>
                </div>
              </div>
                </div>
</div>



@endsection
