<header>
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
                        <li><a href="events.php">Events</a></li>
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
                    <form class="navbar-form navbar-right" role="search" action="login.php" method="POST">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <button type="submit" class="btn btn-custom">Sign In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
