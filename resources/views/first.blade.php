@extends('layouts.master')
@section('content')
@for($i=0; $i<$num; $i++)
<h1>{{ $name }}</h1>
@endfor
@endsection