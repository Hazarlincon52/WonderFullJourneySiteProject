@extends('/head')
    
@section('content')
<style>
.con{
    position:absolute;
    left:35%;
}

table{
    border-collapse: collapse;
}

td{
    border-bottom: 1px solid #ddd;
    padding:15px;
    width:30%;
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
<center><h1>Users</h1></center>
<div class="con">
    <br>
    <table width="150%">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Action</td>
        </tr>
        
        @foreach($user as $u)
        <tr>
            <td><a href="/blog/{{$u-> id}}"class="power">{{ $u->name }}</a></td>
            <td>{{ $u->email }}</td>
            <td><a href="/deleteuser/{{ $u->id }}" class="power">Delete</a></td>
        </tr>
        @endforeach
    </table>
</div>
@endsection