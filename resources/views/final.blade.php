<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Upload</title>

        <!-- Fonts -->
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

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            h1{
                /*display: block;*/
                height: 80px;
                width: 240px;
                background-color: #f57c00;
                color: #FFF;
                padding: 20px;
                align-items: center;
                display: flex;
                justify-content: center;
                vertical-align: middle;
                margin: 0 auto;
                margin-top: 100px;
            }
            a{
                text-decoration: none;
                color: #fff;
                
            }
        </style>
    </head>
    
    <body>
        
       
        
        <h1 id="upload" ><a href="{{ URL::to('downloadExcel/csv') }}">Download CSV</a></h1>
        <input type="file" accept=".csv" id="inpFile" name="file" style="display:none;" />
       
       <!--<script include src="/js/jquery-1.7.1.min.js"></script>      
        <script type="text/javascript">      
           
        $("#upload").click(function(e) {
        $(inpFile).click();
        });
        
        document.getElementById("inpFile").onchange = function() {
        document.getElementById("form").submit();-->
        };
        </script>
        
    </body>
</html>
