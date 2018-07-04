@extends('admin.layouts.layout')
@section('title')
تعديل عضو
{{$user->name}}
@endsection


@section('header')

@endsection

@section('content')
<section class="content-header">
      <h1>
        تعديل عضو
        {{$user->name}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/adminplane')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{url('/adminplane/users')}}">النحكم ف الاعضاء </a></li>
         <li class="active"><a href="{{url('/adminplane/users/'.$user->id.'/edit')}}">
           تعديل عضو
           {{$user->name}}
         </a></li>
      </ol>
    </section>
    <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">    تعديل عضو
                      {{$user->name}}</h3>
                </div>
                <div class="box-body">
  {!!Form::model($user, ['route' => ['users.update', $user->id],'method'=>'PATCH']) !!}
                     @include('admin.user.form')
             {!!Form::close()!!}
<br>

<br>
   {!!Form::open(['url'=>'/adminplane/users/changePassword/'.$user->id,'method'=>'POST']) !!}
      <input type="hidden"  value="{{$user->id}}" name="user_id"></input>
   <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
       <label for="password" class="col-md-4 control-label">Password</label>
       <br>
       <div class="col-md-6">
           <input id="password" type="password" class="form-control" name="password" required>

           @if ($errors->has('password'))
               <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif
       </div>

    </div>
    <div class="form-group">
        <div class="col-md-4 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
            تغير الباسورد
            </button>
        </div>
    </div>

             {!!Form::close()!!}

                </div>
              </div>
                </div>
              </div>
</section>



@endsection


@section('footer')

@endsection
