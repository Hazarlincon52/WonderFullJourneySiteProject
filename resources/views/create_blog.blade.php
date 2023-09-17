@extends('/head')
    
@section('content')

<style>
.container{
    text-align:left;
}
.con{
    position:absolute;
    left:37%;
}
.try {
    width: 410px;
    padding: 5px 10px;
    margin-top: 5px;
    border: 2px solid;
    border-radius: 5px;
    box-sizing: border-box;
}
.try1 {
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
    margin-top:20px;
}


</style>
<h1><center>New Blog</center></h1>
<div class="con">
    <div class="container">
        <form method="POST" action="/create" enctype="multipart/form-data" class="form">
            @csrf

            <br>
            <label for="Title">Title : </label><br>
                <input type="text" name="title" class="try" autocomplete="off"size="30"> <br>
            
            <br>
            <label for="category">Category: </label><br>
                <select name="category" class="try"  >
                @foreach($category as $c)
                    <option value="{{$c->id}}">{{$c->name}}</option>
                @endforeach
                </select><br> 
                    
            <br>
            <label for="Photo">Photo : </label><br>
                <input type="file" name="file" class="try" size="30"><br>

            <br>
            <label for="story">Story : </label><br>
                <textarea name="story" rows="15" cols="50" class="try1"></textarea>

            <br>
            <input type="submit" value="Create " class="in">

        </form>
    
    </div>
</div>
    
@endsection