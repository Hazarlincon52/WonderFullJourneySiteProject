@extends('/head')
    
@section('content')
<style>
.size{
    font-size:15px;
}
</style>
<h1>Home</h1>
    @if($check != NULL)
        <h1>Category : {{$category[0]->name}}</h1> 
    @endif
    <table>
    @foreach($article->chunk(3) as $art)
    <tr>
        @foreach($art as $a)
        <td>
            <h2>{{$a->title}}</h2>
            <h4>{{\Illuminate\Support\Str::limit($a->description,75,$end='...')}} <a href="/description/{{$a-> id}}">Full story</a><h4>
            @if($check == NULL)    
                <div class="size"><i>category:</i> <a href="/sort/{{$a->category->id}}">{{$a->category->name}}</a></div>
            @endif
        </td>
        @endforeach
    </tr>
    @endforeach
    </table>

@endsection