<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>easylib</title>

    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,100,400,700,300italic" type="text/css">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="css/styles.css">

</head>
    <body>
        <div class="navbar navbar-fixed-top">
            <div id="searchbar">
                <button class="btn" id="menu-btn" type="button">
                    <span class="glyphicon glyphicon-align-justify navbar-icon"></span>
                </button>
                <div class="input-group center" id = "search">
                    <input id="search-input" class="form-control" type="text" autocomplete="off" autofocus=""
                           placeholder="Search" oninput="search(this.value)"
                           onkeydown="if(event.keyCode == 13) this.oninput()"
                           onfocus="focus_search_input()" onfocusout="drop_search_input()"/>
                    <span class="input-group-btn">
                        <button class="btn" id="search-btn" type="button"
                                onclick="search(document.getElementById('search-input').value)">
                            <span class="glyphicon glyphicon-search navbar-icon"></span>
                        </button>
                    </span>
                </div>
            </div>
        </div>

        <div id="content">
            <div id="player-layout" hidden="true"></div>
            <div id="player-block" hidden="true"></div>
            <div id="card-layout" class="center"> </div>
        </div>

        <div class="footer">

            <p class="center">
                <a href="http://github.com/Gronis/easylib">easylib</a>
            </p>
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- Autohide navbar-->
        <script src="js/bootstrap-autohidingnavbar.min.js"></script>
        <!-- Mustache, template system-->
        <script src="js/mustache.js"></script>
        <!-- Masonry, tile cards-->
        <script src="js/masonry.min.js"></script>
        <!-- velocity, used for some animations-->
        <!--cript src="https://raw.githubusercontent.com/julianshapiro/velocity/master/velocity.min.js"></script-->
        <!-- my own javascript-->
        <script src="js/app.js"></script>

        <!-- Templates-->
        <script id="movie-card-template" type="text/template">
            <div class='card'>
                <img class='card-poster' src={{poster_medium_url}} />
                <div class=card-info>
                    <div class='card-title'>
                        <!--movie name-->
                        <!--<h4><a href='http://www.youtube.com/watch?v={{trailer}}'>{{title}}</a></h4>-->
                        <h4><a href="#" onclick='start_video("{{file_path}}", "{{backdrop_medium_url}}")'>{{title}}</a></h4>
                        <!--release year-->
                        <h5>{{release_date}}</h5>
                    </div>
                    <span class='badge'>
                        <span class='glyphicon glyphicon-star'></span>
                        <h5> {{rating}} </h5>
                    </span>
                    <span class='badge'><h5>{{runtime}} min</h5></span>

                    <p>{{overview}}</p>
                    <div class="read-more"></div>
                </div> <!--card-info-->
                <div class='horisontal-line'></div>
            </div>
        </script>

        <script id="movie-player-template" type="text/template">
            <div id="video-hud">
                <button id="video-minimize-button" onclick='minimize_player()'>
                    <span class="glyphicon glyphicon-chevron-down"></span>
                </button>
                <button id="video-fullscreen-button" onclick=''>
                    <span class="glyphicon glyphicon-fullscreen"></span>
                </button>
                <button id="video-play-pause-button" onclick='video_toggle_play_pause()'>
                    <span class="glyphicon glyphicon-play"></span>
                </button>
                <div id="video-controls">
                    <div id="video-current-duration-label">0:00</div>
                    <div id="video-duration-bar">
                        <input id="video-duration-slider" type="range" step="any" min="0" max="100" value="0"
                               onchange="video_duration_changed()">
                            <div id="video-duration-slider-level"></div>
                        </input>
                    </div>
                    <div id="video-total-duration-label">46:32</div>
                </div>
                <div id="video-shadow"></div>
            </div>
            <div id="media_player" class="center">
                <video preload="auto" autoplay="autoplay" name="media" poster="{{poster}}">

                </video>
            </div>
        </script>

    </body>
</html>