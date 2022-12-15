@extends('main')
@section('title')

    صفحه الوضائف
    @endsection
@section('content')
@if (session::has('success'))

     <div class="alert alert-success" role="alert">
        {{ session::get('success') }}
     </div>
     @endif
     @if (session::has('error'))

     <div class="alert alert-success" role="alert">
        {{ session::get('error') }}
     </div>
@endif

<p>
<a href="{{ route('createjob',$info->id) }}" style="margin: 20%" class="btn btn-sm btn-success">اضافه وظيفه جديده</a>
</p>

<div class="clo-md-4">
    <input type="text" id="searchbyjobname" class="form-control" placeholder="search by job name ">
    <br> 
</div>
<div id='ajax_search_result'></div>

<table class="table">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">name</th>
          <th scope="col">active</th>
          <th> actions</th>
          
        </tr>
      </thead>

    <thead>
        @if (@empty($data))
        @php
            $i=1;
        @endphp
        @foreach ( $data as $info)
            <tr>

                <td>{{ $i }} </td>
                <td> {{ $info->name }}</td>
                <td> @if ($info->active==1) مفعل
                    @else معطل
                    
                @endif</td>
                <td>  
                    <a href="{{ route('editjob') }}" style="color: white" class="btn btn-sm btn-primary">  edit</a>
                    <a href="{{ route('deletejob') }}" style="color: white" class="btn btn-sm btn-dangerr">  delete</a>
                    
                </td>  
            </tr>
            @php
                $i++
            @endphp
        @endforeach

        @else
        
        @endif


     
    </tbody>
    <br>
    <div class="col-md-12" id="ajax_search_pagination">
        
        {{ $data->links() }}
    </div>
    
  </table>  