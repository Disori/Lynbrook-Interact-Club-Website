<!DOCTYPE html>
<?php session_start(); ?>
<html>
<?php include 'head.php'; ?>
    <body>
        <?php include 'header.php' ?>

        <div id="carousel-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-generic" data-slide-to="1"></li>
            <li data-target="#carousel-generic" data-slide-to="2"></li>
          </ol>

          <div class="carousel-inner">
            <div class="item active">
                <img src="images/interacttriangle2.jpg">
            </div>
            <div class="item">
                <img src="images/interactwhale2.jpg">
            </div>
            <div class="item">
                <img src="images/serviceaboveselfblur.jpg">
            </div>
          </div>

          <a class="left carousel-control" href="#carousel-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
        <div class="eventbanner">
           <div class="container-fluid">
                   <div class="topeventbanner">
                       <div class="row-fluid">
                            <div class="col-md-3">
                                <h3>Event #1</h3>
                                <p style= "word-wrap: break-word">Work in progress</p>
                                <a href="#" class="btn btn-default">Read more</a>
                            </div>
                            <div class="col-md-3">
                                <h3>Event #2</h3>
                                <p style= "word-wrap: break-word">Work </p>
                                <a href="#" class="btn btn-default">Read more</a>
                            </div>
                            <div class="col-md-3">
                                <h3>Event #3</h3>
                                <p style= "word-wrap: break-word">Work in Progress</p>
                                <a href="#" class="btn btn-default">Read more</a>
                            </div>
                            <div class="col-md-3">
                                <h3>Event #4</h3>
                                <p style= "word-wrap: break-word">Work in Progress</p>
                                <a href="#" class="btn btn-default">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            <div class="bottomeventbanner">
               <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="col-md-3">
                            <h3>Event #1</h3>
                            <p style= "word-wrap: break-word">Work in Progggggg</p>
                            <a href="#" class="btn btn-default">Read more</a>
                        </div>
                        <div class="col-md-3">
                            <h3>Event #2</h3>
                            <p style= "word-wrap: break-word">Work inggggggggg</p>
                            <a href="#" class="btn btn-default">Read more</a>
                        </div>
                        <div class="col-md-3">
                            <h3>Event #3</h3>
                            <p style= "word-wrap: break-word">Work in Progress</p>
                            <a href="#" class="btn btn-default">Read more</a>
                        </div>
                        <div class="col-md-3">
                            <h3>Event #4</h3>
                            <p style= "word-wrap: break-word">Work in Progress</p>
                            <a href="#" class="btn btn-default">Read more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'misc.php' ?>
    </body>
</html>
