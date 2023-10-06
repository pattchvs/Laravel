<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonte do google -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <!-- Styles -->
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/functions.js"></script>
        <script src="/js/musicfunctions.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    </head>
    <body>
        <header>
            @php
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                $isMobile = preg_match("/Mobile|Android|iPhone|iPod|BlackBerry|Opera Mini|Windows Phone/i", $userAgent);
            @endphp
        
            @if($isMobile)
                <div class="footer-menu">
                    
            @else
           
            @endif 
            
        </header>
        <main>
            
                <div id="main-section">
                    @if(session('msg'))
                        <p class="msg">{{session('msg')}}</p>
                    @endif
                
                    @yield('content')
                    
                </div>
        
        
            @php
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                $isMobile = preg_match("/Mobile|Android|iPhone|iPod|BlackBerry|Opera Mini|Windows Phone/i", $userAgent);
            @endphp
        
            @if($isMobile)
                
            @else
                @yield('sidebar')
                
            @endif
        
        </main>
        

        
        <footer>
            @php
                $userAgent = $_SERVER['HTTP_USER_AGENT'];
                $isMobile = preg_match("/Mobile|Android|iPhone|iPod|BlackBerry|Opera Mini|Windows Phone/i", $userAgent);
            @endphp
        
            @if($isMobile)
                <div class="footer-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pesquisa</a></li>
                        <li><a href="#">Assine</a></li>
                        <li><a href="#">Biblioteca</a></li>
                    </ul>
                </div>
            @else
            <div class='music-playing' id='music-playing'>
                <ul id="music-playing-current-info">
                    <li>
                        <a href="/" class="music-playing-current-music">
                            <img id='current-cover' src="/img/covers/eaaf99e4668d3a0f02bed08ba6a117aa.png" alt="Capa do álbum">
                        </a>
                    </li>
                    <li>
                        <p id="current-music">Nome da música</p>
                        <p id="current-artist">Nome do artista</p>
                    </li>
                </ul>

                <div class="music-player">
                    <i class='fas fa-backward'></i>
                    <i onclick="togglePlay()" class='fas fa-play' id="play-btn"></i>
                    <i class='fas fa-forward'></i>
                </div>
                
                <audio id="audio-player" src="/media/songs/0474abe80c9274a7a85a8581c1ae5519.mp3"></audio>
                
                
                <ul id="volbtn">
                    <li>
                        <i id='vol-icon' class='fas fa-volume-up'></i>
                        <input onchange="volume()" type="range" class="volume-slider" min="0" max="100" value="100" step="1">
                    </li>
                </ul>
            @endif
        </footer>

        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
      
    </body>
</html>
