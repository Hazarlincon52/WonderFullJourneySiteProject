@extends('/head')
    
@section('content')
<style>
img{
    max-width: 500px;
    max-height: 400px;
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
<h1>Description</h1>

<img src="{{url('/image/'. $article->image)}}" class="w-100">
<h1>{{$article->title}}</h1>
<h4>{{$article->description}}<h4>

<a href="{{ URL::previous() }}" class="create">Back</a>
@endsection