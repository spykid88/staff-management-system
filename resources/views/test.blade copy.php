@extends('layouts.app')

@section('content')
<body>



<!-- <div class="container">

    <h1>Laravel Bootstrap Datepicker</h1>

    <input class="date form-control" type="text">

</div>



<script type="text/javascript">

    $('.date').datepicker({  

       format: 'mm-dd-yyyy'

     });  

</script>   -->
<div class="form-group">
        <label for="due_date-field">Due Date</label>
        <div class="input-group date datetimepicker" id="due_date" data-target-input="nearest">
          <input type="text" name="due_date"  id="due_date-field" class="form-control datetimepicker-input" data-target="#due_date" />
          <div class="input-group-append" data-target="#due_date" data-toggle="datetimepicker">
            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
          </div>
        </div>
      </div>
        <script type="text/javascript">
            $('.date').datepicker({
                format: 'mm-dd-yyyy',
                dayViewHeaderFormat: 'YYYY年 MMM',
            });
        </script>
    </div>
</div>


</body>

</html>
                                                                                                                                                            
 
@endsection


                    <div class="form-group row">                                                                                                                                                               
                            <label for="birthdate" class="col-md-4 col-form-label text-md-right">お誕生日</label>                                                                                                  
                                                                                                                                                                                                                   
                            <div class="col-md-6">                                                                                                                                                                 
                                <input id="birthdate" type="text" class="form-control datepicker @error('birthdate') is-invalid @enderror" name="birthdate" value="{{ old('birthdate') }}" required autocomplete="\
birthdate">                                                                                                                                                                                                        
                                                                                                                                                                                                                   
                                @error('birthdate')                                                                                                                                                                
                                    <span class="invalid-feedback" role="alert">                                                                                                                                   
                                        <strong>{{ $message }}</strong>                                                                                                                                            
                                    </span>                                                                                                                                                                        
                                @enderror                                                                                                                                                                          
                            </div>                                                                                                                                                                                 
                        </div>                                                                                                                                                                                     
                                                                                                                                                                                                                   
                        <div class="form-group row mb-0">                                                                                                                                                          
                            <div class="col-md-6 offset-md-4">                                                                                                                                                     
                                <button type="submit" class="btn btn-primary">                                                                                                                                     
                                    {{ __('Register') }}                                                                                                                                                           
                                </button>                                                                                                                                                                          
                            </div>                                                                                                                                                                                 
                        </div>                                                                                                                                                                                     
                    </form>


