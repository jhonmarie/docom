<!DOCTYPE html>
<html>
<body>
    <center>
<form action="/search" method="POST" role="search">
    
    <div class="input-group">
        <input type="text" class="form-control" name="q"
            placeholder="Search users"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div>
</form>

<div class="container">
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
    <h2>RECORDS FOUND</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>recieveby</th>
                <th>for</th>
                <th>subject</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $data)
            <tr>
                    <td>{{$data -> recieveby}}</td>
                    <td>{{$data -> for}}</td>
                    <td>{{$data -> subject}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
</center>
</body>
</html>