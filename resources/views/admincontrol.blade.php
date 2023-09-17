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
</style>
<center><h1>Admin</h1></center>
<div class="con">
    <br>
    <table width="150%">
        <tr>
            <td>Name</td>
            <td>Email</td>
        </tr>
        
        @foreach($user as $u)
        <tr>
            <td>{{ $u->name }}</a></td>
            <td>{{ $u->email }}</td>
        </tr>
        @endforeach
    </table>
</div>
@endsection