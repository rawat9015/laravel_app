<h1>
    <!-- {{$id ?? "Unknown id"}} -->
</h1>

<h1>
    Hello
</h1>

<h1>
    {{$name ?? "User"}}
</h1>

<h1>
    You Enter this page at {{date('d-m-y')}}
</h1>


    <i>{!!$text!!} </i>

@if($name != "")
{{"name is not empty"}}

@else
{{"Name is empty"}}

@endif