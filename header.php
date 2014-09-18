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
                    <?php
                    if(isset($_SESSION['login'])) {
                            if($_SESSION['login'] == 1) {
                                include 'loggedinheader.php';
                            } else {
                            include 'loginheader.php';
                        }
                    } else {
                        include 'loginheader.php';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</header>
