
<input type="hidden" name="_token" value="{{ csrf_token() }}">

    <div class="form-group{{ $errors->has('bu_name') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">اسم العقار </label>

        <div class="col-md-6">
    <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

           {!!Form::text("bu_name",null,['class'=>'form-control'])!!}
            @if ($errors->has('bu_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="clear-fix"></div>
    <br>



        <div class="form-group{{ $errors->has('rooms') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">عدد الغرف </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::text("rooms",null,['class'=>'form-control'])!!}
                @if ($errors->has('rooms'))
                    <span class="help-block">
                        <strong>{{ $errors->first('rooms') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>



    <div class="form-group{{ $errors->has('bu_price') ? ' has-error' : '' }}">
        <label for="name" class="col-md-4 control-label">سعر العقار  </label>

        <div class="col-md-6">
    <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

           {!!Form::text("bu_price",null,['class'=>'form-control'])!!}
            @if ($errors->has('bu_price'))
                <span class="help-block">
                    <strong>{{ $errors->first('bu_price') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="clear-fix"></div>
    <br>



        <div class="form-group{{ $errors->has('bu_rent') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> نوع العملية</label>

            <div class="col-md-6">
       {!!Form::select("bu_rent",bu_rent(),['class'=>'form-control'])!!}

                @if ($errors->has('bu_rent'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_rent') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_place') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> المنطقه </label>

            <div class="col-md-6">
       {!!Form::select("bu_place",place(),['class'=>'form-control select2'])!!}

                @if ($errors->has('bu_place'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_place') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>



        <div class="form-group{{ $errors->has('bu_square') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">مساحة العقار </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::text("bu_square",null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_square'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_square') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>


        <div class="form-group{{ $errors->has('bu_type') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label">نوع العقار </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::select("bu_type",bu_type(),null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_type'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_type') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_status') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> حالة العقار</label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::select("bu_status",bu_status(),['class'=>'form-control'])!!}
                @if ($errors->has('bu_status'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_status') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> صورة العقار </label>

            <div class="col-md-6">
              @if(isset($bu))
              @if($bu->image!='')
              <img src="{{Request::root().'/website/bu_images/'.$bu->image}}" width="100"/>
              @endif
              @endif
       {!!Form::file("image",['class'=>'form-control'])!!}

                @if ($errors->has('image'))
                    <span class="help-block">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_meta') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> الكلمات الدلالية </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::text("bu_meta",null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_meta'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_meta') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_small_dis') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> وصف العقار لمحركات البحث</label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::textarea("bu_small_dis",null,['class'=>'form-control','rows'=>'4'])!!}
                @if ($errors->has('bu_square'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_small_dis') }}</strong>
                    </span>
                @endif
                <br>
                <div class="alert alert-Warning">
                  لا يمكن ادخال اكثر من 160 حرف ع حسب معاير جوجل
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>


        <div class="form-group{{ $errors->has('bu_langtuide') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> خط الطول </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::text("bu_langtuide",null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_langtuide'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_langtuide') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_latitude') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> دائرة العرض </label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::text("bu_latitude",null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_latitude'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_latitude') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>

        <div class="form-group{{ $errors->has('bu_large_dis') ? ' has-error' : '' }}">
            <label for="name" class="col-md-4 control-label"> وصف مطول للعقار</label>

            <div class="col-md-6">
        <!--    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>-->

               {!!Form::textarea("bu_large_dis",null,['class'=>'form-control'])!!}
                @if ($errors->has('bu_large_dis'))
                    <span class="help-block">
                        <strong>{{ $errors->first('bu_large_dis') }}</strong>
                    </span>
                @endif
            </div>
        </div>
        <div class="clear-fix"></div>
        <br>


    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
             تنفيذ
            </button>
        </div>
    </div>
