@extends('main')
@section('titel')
اضافه وضيفه جديده
@endsection
@section('content')

<form method="POST" action="{{ route('storejob') }}" style="width: 80%;margin:0 auto;">
    @csrf
    <div class="form-group">
      <label for="job_name">job name  </label>
      <input type="text" class="form-control" id=""  name="job_name" value="{{ old('job_name') }}">
    @error('job_name')
      <span class="text_danger"> {{ $message }}   </span>
    @enderror
    <div class="form-group">
        <label for="job_name">active status  </label>
        <input type="text" class="form-control" id="job_active"  name="job_active">
       <select name= "job_active">

        <option value="null"><select status></select></option>
        <option @if (old('job_active')==1 ) selected @endif value="1">yes</option>
        <option @if (old('job_active')==1 && (old('job_active')!='')) selected @endif value="0">no</option>

       </select>
       @error('ob_active')
       <span class="text_danger"> {{ $message }}   </span>
       @enderror
      
      </div>
    <button type="submit" class="btn btn-primary">addjob</button>
  </form>
@endsection