<!DOCTYPE html>
<html>
    <head>
    <title>Lynbrook Interact Club</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    </head>
    <body>
        <div class="header">
            <div class="navbar navbar-static-top navbar-inverse" role="navigation">
                <div class="container">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navHeaderCollapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php">Lynbrook Interact</a>
                    <div class="collapse navbar-collapse navHeaderCollapse">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="events.php">Events</a></li>
                            <li><a href="#submit" data-toggle="modal">Submit an Event</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Calendar</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-tottle" data-toggle="dropdown">Contact<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.facebook.com/groups/lynteract/">Facebook</a></li>
                                    <li><a href="#contact" data-toggle="modal">Gmail</a></li>
                                    <li><a href="https://www.facebook.com/groups/118239121602262/">District 5170</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="col-lg-3 col-md-6">
                    <h3>Event #1</h3>
                    <p style= "word-wrap: break-word">Work in Progggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggress</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Event #2</h3>
                    <p style= "word-wrap: break-word">Work inggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggggress Progress</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Event #3</h3>
                    <p style= "word-wrap: break-word">Work in Progress</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Event #4</h3>
                    <p style= "word-wrap: break-word">Work in Progress</p>
                    <a href="#" class="btn btn-default">Read more</a>
                </div>
            </div>
        </div>

        <div class="navbar navbar-default navbar-fixed-bottom">
            <div class="container">
                <p class="navbar-text pull-left">&copy; Lynbrook Interact</p>
                <p class="navbar-text pull-right">Made by Brandon Strong</p>
            </div>
        </div>


        <div class="modal fade" id="contact">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4> test </h4>
                    </div>
                    <div class="modal-body">
                        <h3 style="word-wrap: break-word">Expect it working in <3 days(see what I did there :)</h3>
                    </div>
                    <div class="modal-footer">
                        <a class = "btn btn-default" data-dismiss="modal">Submit</a>
                        <a class = "btn btn-primary" data-dismiss="modal">Close</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="submit">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form class="form-horizontal">
                        <div class="modal-header">
                            <h4> test </h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="post-title" class="col-lg-2 control-label">Title</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" id="post-title" placeholder="Your page title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="post-info" class="col-lg-2 control-label">Information</label>
                                <div class="col-lg-10">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <a class = "btn btn-default" data-dismiss="modal">Close</a>
                            <a class = "btn btn-primary" type="submit">Submit</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
    </body>
</html>
