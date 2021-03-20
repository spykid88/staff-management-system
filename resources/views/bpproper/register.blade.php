@extends('layouts.common')


@section('content')

<div class="form-group">
  <form method="POST" action="submit">
  @csrf
  <div class="form-group row" style="text-align:right">
      <label for="empno" class="col-sm-2 col-form-label">社員番号＊</label>
      <div class="col-sm-3">
        <!-- <input type="text" class="form-control" name="name" placeholder="社員名前"> -->
        <input type="text" class="form-control" name="empno" value = "{{ old('empno') }}" placeholder="社員番号">
        
        <span style="float: left; width: 80%; text-align: left;color:red;background-color:yellow;">
            @if($errors->has('empno'))
              {{ $errors->first('empno')}}
            @endif
          </span>

      </div>
    </div>

    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">社員名前＊</label>
      <div class="col-sm-3">
        <!-- <input type="text" class="form-control" name="name" placeholder="社員名前"> -->
        <input type="text" class="form-control" name="name" value = "{{ old('name') }}" placeholder="社員名前">
        
        <span style="float: left; width: 80%; text-align: left;color:red;background-color:yellow;">
            @if($errors->has('name'))
              {{ $errors->first('name')}}
            @endif
          </span>

      </div>
    </div>

    <div class="form-group row" style="text-align:left">
      <label for="name" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-1">
        <input type="radio" name="statusflag" value="0" checked="checked">社内
      </div>
      <div class="col-sm-1">
        <input type="radio" name="statusflag" value="1">社外
      </div>
    </div>


    <div class="form-group row" style="text-align:left">
      <label for="name" class="col-sm-2 col-form-label"></label>
      <div class="col-sm-1">
        <input type="radio" name="typeflag" value="0" checked="checked">プロパ
      </div>
      <div class="col-sm-1">
        <input type="radio" name="typeflag" value="1">BP
      </div>
    </div>


    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">所属</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="depname"  placeholder="所属　">
      </div>
    </div>
    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">メールアドレス</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="mail"  placeholder="メールアドレスを入力してください。">
      </div>
    </div>
    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">契約先会社名</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="contractname"  placeholder="契約先会社名を入力してください。">
      </div>
    </div>
    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">契約先部署名</label>
      <div class="col-sm-3">
        <input type="text" class="form-control" name="contractdepname"  placeholder="契約先部署名を入力してください。">
      </div>
    </div>

    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">契約開始日</label>

      <div class="col-sm-2">
        <div class="form-group">
            <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                <!-- <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker1"/> -->
                <input type="text" class="form-control datetimepicker-input" name="datetimepicker1" data-target="#datetimepicker1"/>
                <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
      </div>
      <div><label for="name" class="col-sm-1 col-form-label">～</label></div>
      
      <label for="name" class="col-sm-1 col-form-label"style="text-align:left">契約終了日</label>
      <div class="col-sm-2">
        <div class="form-group">
            <div class="input-group date" id="datetimepicker2" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="datetimepicker2" data-target="#datetimepicker2"/>
                <div class="input-group-append" data-target="#datetimepicker2" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
      </div>
    </div>


    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">BRC契約開始日</label>

      <div class="col-sm-2">
        <div class="form-group">
            <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="datetimepicker3" data-target="#datetimepicker3"/>
                <div class="input-group-append" data-target="#datetimepicker3" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
      </div>
      <div><label for="name" class="col-sm-1 col-form-label">～</label></div>
      
      <label for="name" class="col-sm-1 col-form-label"style="text-align:left">契約終了日</label>
      <div class="col-sm-2">
        <div class="form-group">
            <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="datetimepicker4" data-target="#datetimepicker4"/>
                <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
      </div>
    </div>


    <div class="form-group row" style="text-align:right">
      <label for="name" class="col-sm-2 col-form-label">プロパ入社日</label>

      <div class="col-sm-2">
        <div class="form-group">
            <div class="input-group date" id="datetimepicker5" data-target-input="nearest">
                <input type="text" class="form-control datetimepicker-input" name="datetimepicker5" data-target="#datetimepicker5"/>
                <div class="input-group-append" data-target="#datetimepicker5" data-toggle="datetimepicker">
                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                </div>
            </div>
          </div>
      </div>
      </div>

    <div class="form-group row" style="text-align:right">
    <div class="col-sm-2" >
      <button type="reset" class="btn btn-primary" >クリア</button>
    </div>
    <div class="col-sm-4">
      <button type="submit" class="btn btn-primary" >登録</button>
    </div>
    <div class="col-sm-1">
      <!-- <button type="submit" class="btn btn-primary" >戻る</button> -->
      <button type="button" class="btn btn-primary" onclick="history.back();">戻る</button>
    </div>
    </div>
  </form>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker1').datetimepicker({
            // format: 'L'
            format: 'YYYY-MM-DD',
            locale: 'ja',
            dayViewHeaderFormat: 'YYYY年 MM',
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker2').datetimepicker({
            // format: 'L'
            format: 'YYYY-MM-DD',
            locale: 'ja',
            dayViewHeaderFormat: 'YYYY年 MMM',
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker3').datetimepicker({
            // format: 'L'
            format: 'YYYY-MM-DD',
            locale: 'ja',
            dayViewHeaderFormat: 'YYYY年 MMM',
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker({
            // format: 'L'
            format: 'YYYY-MM-DD',
            locale: 'ja',
            dayViewHeaderFormat: 'YYYY年 MMM',
        });
    });
</script>

<script type="text/javascript">
    $(function () {
        $('#datetimepicker5').datetimepicker({
            // format: 'L'
            format: 'YYYY-MM-DD',
            locale: 'ja',
            dayViewHeaderFormat: 'YYYY年 MMM',
        });
    });
</script>
@endsection