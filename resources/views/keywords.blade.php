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
                 .new{
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
                margin-top: 30px;
                border: none;
                
            }
           .wideInput{
               width: 400px;
               height: 230px;
               margin: 0 auto;
               margin-top: 30px;
               /*align-items: center;*/
               display: flex;
               /*justify-content: center;*/
               vertical-align: middle;
               font-size: 20px;
               text-align: left;
               padding-left:0;
               padding-top:0;
               padding-bottom:0.4em;
               padding-right: 0.4em;
           }
        </style>
    </head>
    <body>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
        <h3> Enter Keywords (Contains) </h3>
        <form method='POST' id="keywords" name="keywords" action="{{route('post.keys', ['column' => $column , 'data' => $data])}}">
        <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
            <textarea  class="wideInput" name="row_value"  required></textarea>
            
        </form>
        <button class="new" type="submit" form="keywords" value="Submit">APPLY</button>
    </body>


</html>