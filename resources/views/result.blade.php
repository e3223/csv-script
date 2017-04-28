<html>
    <head>        
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #bdbdbd;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
            }
            h3{
                color: #000;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin: 0 auto;
                margin-top: 150px;
            }
                 h1{
                /*display: block;*/
                font-size: 25px ;
                height: 50px;
                width: 240px;
                background-color: #9e9e9e;
                color: #dbdbdb;
                padding: 8px;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin: 0 auto;
                margin-top: 50px;
            }
            .column{
                float: left;
                margin: 20px;
                font-weight: bold;
                font-size: 20px ;
                height: 50px;
                width: auto;
                min-width: 200px;
                background-color: #fff;
                color: #000;
                padding: 8px;
                align-items: center;
                display: flex;
                justify-content: center;
                /*vertical-align: middle;
                margin: 0 auto;*/
            }
            form{
                display:inline-block;
                border: none;
                margin-left: 150px;
                margin-right: 150px;    
                margin-top: 30px;
                
            }
            .new{
                font-size: 25px ;
                height: 50px;
                width: 240px;
                background-color: #9e9e9e;
                color: #dbdbdb;
                padding: 8px;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin: 0 auto;
                margin-top: 30px;
                border: none;
        </style>
    </head>
    <body>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
        <h3>Select Column to Apply Row Deletion</h3>
        <form id="column-form" name="column-form" action="{{route('post.column', ['data'=>$data])}}">
            @foreach (array_keys($data[0]) as $data)
           
            <div class="column"> <input type="radio" name="column" id="chek" value="{{$data}}"/><label for="chek">{{ $data}}</label></div>    
        
            @endforeach
            
        </form>
         <button class="new" type="submit" id="column-form" form="column-form" value="Submit">CONFIRM</button>
        
    </body>


</html>