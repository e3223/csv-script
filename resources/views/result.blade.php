@extends('layouts.main')

@section('content')
        <h3>Select Column to Apply Row Deletion</h3>
        <form id="column-form" class="form" name="column-form" action="{{route('post.column')}}">
            @foreach (array_keys($data[0]) as $data)
           
            <div class="column"> <input type="radio" name="column" id="chek" required value="{{$data}}"/><label for="chek">{{ $data}}</label></div>    
  
            @endforeach
            
        </form>
        <button class="new" type="submit" id="column-form" form="column-form" value="Submit">CONFIRM</button>    
@stop