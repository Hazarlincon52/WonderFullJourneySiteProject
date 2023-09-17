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
.in{
    background-color: black;
    border: none;
    color: white;
    padding: 15px 120px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    cursor: pointer;
    margin-bottom:15px;
}

</style>
<h1><center>Sign Up</center></h1>
<div class="con">
    <div class="container">
        <form method="POST" action="/signup" class="form">
            @csrf
        
            <div class="point"><label for="username">Name : </label></div>
                <input type="text" name="name" class="try"autocomplete="off" size="30"><br> 
                    <p style="color: red;">@error('name') {{ $message }}@enderror </p>

            <br>
            <div class="point"><label for="Email">Email : </label></div>
                <input type="text" name="email" class="try" autocomplete="off"size="30"> <br>
                    <p style="color: red;">@error('email') {{ $message }}@enderror </p>

            <br>
            <div class="point"><label for="Phone">Phone : </label></div>
                <input type="text" name="phone" class="try" autocomplete="off"size="30"> <br>
                    <p style="color: red;">@error('phone') {{ $message }}@enderror </p>

            <br>
            <div class="point"><label for="password">Password : </label></div>
                <input type="password" name="password" class="try" size="30"><br>
                    <p style="color: red;">@error('password') {{ $message }}@enderror </p>
            <br> 
            <div class="point"><label for="repassword">Confirm Password : </label></div>
                <input type="password" name="repassword" class="try" size="30"><br>
                    <p style="color: red;">@error('repassword') {{ $message }}@enderror </p>

            <br><input type="submit" value="Sign Up" class="in">
            
        </form>
    
    </div>
</div>
@endsection