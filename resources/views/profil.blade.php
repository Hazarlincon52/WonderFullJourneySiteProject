@extends('/head')
    
@section('content')
<style>
.container{
    text-align:left;
}
.con{
    position:fixed;
    left:44%;
}
.try {
    width: 90%;
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
    padding: 15px 80px;
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
        <form method="POST" action="/update" class="form">
        {{ csrf_field() }}
        
            <div class="point"><label for="username">Name : </label></div>
                <input type="text" name="name" class="try"autocomplete="off" size="30" placeholder="{{Auth::User()->name}}"><br> 
                    <p style="color: red;">@error('name') {{ $message }}@enderror </p>

            <br>
            <label for="Email">Email : </label><br>
                <input type="text" name="email" class="try" autocomplete="off"size="30"placeholder="{{Auth::User()->email}}"><br>
                    <p style="color: red;">@error('email') {{ $message }}@enderror </p>

            <br>
            <div class="point"><label for="Phone">Phone : </label></div>
                <input type="text" name="phone" class="try" autocomplete="off"size="30"placeholder="{{Auth::User()->phone}}"> <br>
                    <p style="color: red;">@error('phone') {{ $message }}@enderror </p>

            <br><input type="submit" value="Update" class="in">

        </form>
    
    </div>
</div>

    
@endsection