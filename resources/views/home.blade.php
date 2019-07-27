@extends('layouts.app')

@section('content')
<h3>Home</h3>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste sit, illum minus nihil tempore voluptas consequatur amet nemo tempora aut provident recusandae reprehenderit iure id ratione sapiente autem commodi totam!</p>
@endsection

@section('sidebar')
@parent
<p>This is appended to the sidebar</P>
@endsection