@extends('/head')
    
@section('content')
<style>
.con{
    position:absolute;
    left:36%;
}

table{
    border-collapse: collapse;
}

td{
    border-bottom: 1px solid #ddd;
    padding:15px;
    width:80%;
}

a.power:link {
    color:#00b9ff;
    text-decoration:none;
}

a.power:visited {
    color:#00b9ff;
    text-decoration:none;
}

a.power:hover {
    text-decoration:underline;
}

a.create:link, a.create:visited {
    margin-top:20px;
    background-color: #DCDCDC;
    color: #00b9ff;
    padding: 14px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    border-radius:10px;
}

a.create:hover, a.create:active {
    background-color: #C0C0C0;
}
</style>
@if($auth && Auth::User()->role == 'user')
<center><a href="/create" class="create">+Create Blog</a></center>
@endif

@if($count == 0 && Auth::User()->role == 'admin')
<center><h1>No Blog</h1></center>

@elseif($count == 0 && Auth::User()->role == 'user')
<center><h1>You Do No Have Blogs</h1></center>
@else
<div class="con">
    <br>
    <table width="150%">
        <tr>
            <td>Title</td>
            <td>Action</td>
        </tr>
        
        @foreach($article as $a)
        <tr>
            <td><a href="/description/{{$a-> id}}"class="power">{{ $a->title }}</a></td>
            <td><a href="/delete/{{ $a->id }}" class="power">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endif
@endsection