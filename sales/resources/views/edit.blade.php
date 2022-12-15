@extends('main')
@section('titel')
تعديل وظيفه 
@endsection
@section('content')

<form method="POST" action="{{ route('updatejob',$data['id']) }}" style="width: 80%;margin:0 auto;">
    @csrf
    <div class="form-group">
      <label for="job_name">job name  </label>
      <input type="text" class="form-control" id="job_name"  name="job_name" value="{{ old('job_name',$data[name]) }}">
    @error('job_name')
      <span class="text_danger"> {{ $message }}   </span>
    @enderror
    <div class="form-group">
        <label for="job_name">active status  </label>
        <input type="text" class="form-control" id="job_active"  name="job_active">
       <select name= "job_active">

        <option value="null"><select status></select></option>
        <option @if (old 'job_active' ,$data['active']==1 ) selected @endif value="1">yes</option>
        <option @if (old 'job_active' ,$data['active']==0 and(old 'job_active' ,$data['active'])!=0 )  selected @endif selected @endif value="0">no</option>

       </select>
       @error('ob_active')
       <span class="text_danger"> {{ $message }}   </span>
       @enderror
      
      </div>
    <button type="submit" class="btn btn-primary">updatejob</button>
  </form>
@endsection