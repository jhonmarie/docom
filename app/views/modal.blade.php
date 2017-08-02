@extends('practice')
@section('content')


 <div class="container">
     
   <br>
    <div class="table-responsive">
    <table class="table table-bordered">
          @if(count($data) > 0) 
        <thead>
            <tr>
                <th>RECEIVED BY</th>
                <th>FOR</th>
                <th>OFFICE</th>
                <th>ADDRESS</th>
                <th>SUBJECT</th>
                 <th>DATE&TIME</th>
                 <th>ACTION</th>
                  

            </tr>
        </thead>
        <tbody>
            @foreach($data as $data)
            <tr>
                    <td>{{$data->recieveby}}</td>
                    <td>{{$data->for}}</td>
                    <td>{{$data->office}}</td>
                    <td>{{$data->address}}</td>
                    <td>{{$data->sub}}</td>
                    <td>{{$data->created_at}}</td>
                    <td>
                    				 <a class="btn btn-info" href="{{ asset ('search') }}" title="click for edit" onclick="return confirm('Are you sure edit this record?')"><span class='glyphicon glyphicon-pencil'></span> Edit Record</a> 
				
                  <a class="btn btn-danger" href="{{ asset ('practice') }}" title="click for delete" onclick="return confirm('Are you sure to remove this record?')"><span class='glyphicon glyphicon-trash'></span> Remove Record</a>
                
                   <a class="btn btn-danger" href="{{ asset ('practice') }}" title="click for delete" onclick="return confirm('Are you sure to print this record?')"><span class='glyphicon glyphicon-trash'></span> Print Record</a>
                  </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <div class="panel panel-default">
         <strong style="color:red;"NO DATA FOUND!!!></strong>
      </div>
     
    @endif
     
     
</div>
 <input type="image" src="{{ asset('public/img/buttonn.png')}}"  onclick="print();" width="100" height="60" alt="printer" /></a></div>
</div>
</div>

@endsection