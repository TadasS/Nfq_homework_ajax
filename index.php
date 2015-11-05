<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="author" content="Tadas Šiaudvytis">
        <title>NFQ ajax homework</title>
        <!-- Bootstrap core CSS -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap-theme.min.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-3">
                    <form method="post" class="navbar-form navbar-left" id="ajax-form">
                        <div class="form-group">
                            <input type="text" name="firstname" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <input type="text" name="lastname" class="form-control" placeholder="Last name">
                        </div>
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-push-2">
                    <div class="table-responsive">
                        <table id="data-table" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Last name</th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JavaScript
        ================================================== -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
          if (typeof jquery === undefined) {
              var script = document.createElement("SCRIPT");
              script.src = '/assets/js/jquery-1.11.3.min.js';
              script.type = 'text/javascript';
              document.getElementsByTagName("head")[0].appendChild(script);
          }
        </script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/custom.js"></script>
    </body>
</html>