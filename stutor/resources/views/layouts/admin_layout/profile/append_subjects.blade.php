  @if(!empty($getcourse))
  <div class="form-group row">

                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('') }}</label>

                            <div class="col-md-6">


   {{--  <select name="subject_name[]"    class="form-control select2" multiple="multiple">  --}}
          <option >Select Mutile Subject subject</option>

@foreach($getcourse as $subject)

       <input   type="checkbox" name="subject_name[]" value="{{ $subject['coursename'] }}" multiple> {{ $subject['coursename'] }}
@endforeach

   {{--  </select>  --}}
</div>

                            </div>
@endif




