@extends('layouts.app')

@section('content')
<body>



<!-- <div class="form-group">
        <label for="due_date-field">Due Date</label>
        <div class="input-group date datetimepicker" id="due_date" data-target-input="nearest">
          <input type="text" name="due_date"  id="due_date-field" class="form-control datetimepicker-input" data-target="#due_date" />
          <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div> -->


    <div class="container">
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#datetimepicker4"/>
                    <div class="input-group-append" data-target="#datetimepicker4" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <script type="text/javascript">
            $(function () {
                $('#datetimepicker4').datetimepicker({
                    // format: 'L'
                    format: 'L',
                    locale: 'ja',
                    dayViewHeaderFormat: 'YYYY年 MMM',
                });
            });
        </script>
    </div>
</div>


</body>

</html>
                                                                                                                                                            
 
@endsection


