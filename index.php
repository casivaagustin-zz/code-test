<html>
    <head>
        <title>Parse Test</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
        <div class="content container-fluid">
            <nav class="navbar navbar-default navbar-static-top">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Asado">Asado</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Dim_sum">Dim Sum</a></li>
                        <li><a href="https://en.wikipedia.org/wiki/Gyro_(food)">Gyro</a></li>
                    </ul>
            </nav>
            <div class="main">
                <h1 class="center">Parse Test</h1>
                <form id="ajax-form" class="form">
                    <div class="row">
                        <div class="col-md-3 right bold col-sm-3 col-xs-3">Enter Your Data:</div>
                        <div class="col-md-9 col-sm-9 col-xs-9"><input type="text" class="data form-control" name="data"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 center">
                            <button type="button" class="btn btn-success btn-lg submit">
                                <span class="glyphicon glyphicon glyphicon-refresh" aria-hidden="true"></span> Run Parser
                            </button>
                        </div>

                    </div>
                </form>
                <div class="loading">
                    <img src='/image/process.gif' />
                </div>
                <div class="response">
                </div>
            </div>
            <div class="footer row">
                <div class="col-xs-6">Parse Test</div>
                <div class="col-xs-6 right"><a href="http://www.casivaagustin.com.ar" target="_blank">Agustin Casiva</a></div>
            </div>
        </div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="/js/main.js" type="text/javascript"></script>
</html>