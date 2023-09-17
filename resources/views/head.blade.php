<!-- Vieri Leonardy - 2201744033 -->

<?php
use App\Http\Controllers\Controller;
use App\Category;
$show1 = Category::all();
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
body {
  font-family: 'Trebuchet MS', sans-serif;
  margin:0px;
  background-color:white;
}
/* Home */
.bigbar{
  background-color:Grey;
  padding-top:20px;
  padding-bottom:20px;
  text-align:center;
}
/* End Home*/

/* Header */
.bar {
  overflow: hidden;
  background-color: #333;
}

.bar a {
float:left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.dropdown {
  float:left;
  overflow: hidden;
}

.dropdownright {
  float:right;	
  overflow: hidden;
}

.dropdown .dropbtn, .dropdownright .dropbtn{
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content, .dropdownright:hover  .dropdown-content{
  display: block;
}
/* End Header */



</style>
</head>
<body>
    <div class="bigbar">
    <h1><b>Wonderful Journey</b></h1>
    <h4>Blog of Indonesia Tourism</h4>

    </div>

    <div class="bar">
        <a href="/">Home</a>
    @if($auth && Auth::User()->role == 'admin')
        <a href="/admin">Admin</a>
        <a href="/user">User</a>
    @elseif($auth && Auth::User()->role == 'user')
        <a href="/profil/{{Auth::User()->id}}">Profil</a>
        <a href="/blog/{{Auth::User()->id}}">Blog</a>
    @else
        <div class="dropdown">
            <button class="dropbtn">Category</button>
                <div class="dropdown-content">
                @foreach($show1 as $c)
                    <a href="/sort/{{$c->id}}">{{ $c->name }} </a>
                @endforeach
                </div>
        </div> 
    @endif
        
    @if($auth)
        <div class="dropdownright">
            <a href="/logout">Logout</a>
        </div>
    @else
        <div class="dropdown">
            <a href="/aboutus">About Us</a>
        </div>
        <div class="dropdownright">
            <a href="/signup">Sign Up</a>
            <a href="/login">Login</a>
        </div> 
    @endif
  
    </div>

@yield('content')
</body>
</html>
