@extends('/head')
    
@section('content')
<h1>Welcome {{ Auth::User()->name }}</h1>
@endsection