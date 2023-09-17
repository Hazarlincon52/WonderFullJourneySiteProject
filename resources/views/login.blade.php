@extends('/head')
    
@section('content')
<style>
.container{
    text-align:left;
}
.con{
    position:absolute;
    left:41%;
}
.try {
    width: 290px;
    padding: 5px 10px;
    margin-top: 5px;
    border: 2px solid;
    border-radius: 5px;
    box-sizing: border-box;
}
.pro {
    width:600px;
    padding: 5px 10px;
    margin-top: 5px;
    border: 2px solid;
    border-radius: 5px;
    box-sizing: border-box;
}
.in{
    background-color: black;
    border: none;
    color: white;
    padding: 15px 125px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-bottom:15px;
}


</style>
<h1><center>Login</center></h1>
<div class="con">
    <div class="container">
        <form method="POST" action="/login" class="form">
            @csrf
        
            <label for="username">Login As: </label><br>
                <select name="role" class="try"  >
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select><br> 
                    <p style="color: red;">@error('role') {{ $message }}@enderror </p>
            <br>
            <label for="Email">Email : </label><br>
                <input type="text" name="email" class="try" autocomplete="off"size="30"> <br>
                    <p style="color: red;">@error('email') {{ $message }}@enderror </p>

            <br>
            <label for="password">Password : </label><br>
                <input type="password" name="password" class="try" size="30"><br>
                    <p style="color: red;">@error('password') {{ $message }}@enderror </p>

            <br><input type="submit" value="Login " class="in">

        </form>
    
    </div>
</div>
@endsection