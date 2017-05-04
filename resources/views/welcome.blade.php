@extends('layouts.main')

@section('content')
        <form id="form" method="POST" action="{{  route('post.uploaded') }}" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">
            <h1 id="upload">Upload CSV</h1>
            <input type="file" accept=".csv" id="inpFile" name="file" required style="display:none;" />
        </form>
        
    <script include src="/js/jquery-1.7.1.min.js"></script>              
    <script type="text/javascript">                
        $("#upload").click(function(e) {
        $(inpFile).click();
        });
        document.getElementById("inpFile").onchange = function() {
        document.getElementById("form").submit();
        };
    </script>       
@stop