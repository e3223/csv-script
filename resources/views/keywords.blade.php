@extends('layouts.main')

@section('content')
        <h3> Enter Keywords (Contains) </h3>
        <form method='POST' id="keywords" name="keywords" action="{{route('post.keys')}}">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <textarea  class="wideInput" name="row_value" placeholder="Each keyword = new line"  required></textarea> 
        </form>
        <button class="new" type="submit" form="keywords" value="Submit">APPLY</button>
@stop