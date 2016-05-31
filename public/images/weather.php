<!DOCTYPE html>
<hmtl>
    <head>
        <title>Weather Prediction</title>
        <meta charset="utf-8" />
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
              bootstrap.min.css">
        <!-- Optional theme -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/
              bootstrap-theme.min.css">
        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        
        <style>
            html,body{
                height:100%;
                margin:0;
            }
            .container{
                background-image: url("climate1.jpg");
                width:100%;
                height:100%;
                background-size: cover;
                background-position: center;
                padding-top: 100px;
            }
            .center{
                text-align: center;
            }
            p{
                padding-top: 15px;
                padding-bottom: 15px;
            }
            button{
                margin-bottom: 20px;
                margin-top: 20px;
            }
        </style>
    </head>
    <body>
        <div  class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 center">
                    <h1 class="cener">Weather Prediction</h1>
                    <p class="center lead">Enter your city below to get forecast your weather</p>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="eg.London,Paris,San Fransisco.." name="city" id="city"/>
                        </div>
                        <button class="btn btn-success btn-lg" id="find">Find My Weather</button>
                    </form>
                </div>

            </div>

        </div>
        <script>
            $("#find").click(function(event) {
                event.preventDefault();
                $.get("scraper.php?city=London",function(data){
                    alert(data);
                })
            });
        </script>

    </body>
</hmtl>