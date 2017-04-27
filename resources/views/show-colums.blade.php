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
                
                font-weight: bold;
                font-size: 20px ;
                height: 50px;
                width: 200px;
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
                display: box;
                border: 1px solid #dbdbdb;
                margin-left: 150px;
                margin-right: 150px;    
                margin-top: 30px;
                
            }
        </style>
    </head>
    <body>
    <input type="hidden" name="_token" value="{!! csrf_token() !!}">    
        <h3>Select Column to Apply Row Deletion</h3>
        <form>
            <div class="column"></div>    
        </form>
        <h1>CONFIRM</h1>
        
    </body>


</html>