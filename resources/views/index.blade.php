<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nobar - Video Streaming No #1 di Binus University</title>

        <link rel="stylesheet" href="/css/sweetalert.css">
        <link rel="stylesheet" href="/css/apps.css">
        <link rel="shortcut icon" href="/img/favicon.png">
    </head>
    <body>
        <header class="header">
            <div class="container">
                <div class="header__logo">
                    <img src="/img/logo.png" alt="">
                </div>
                <div class="header__navigation">
                    <ul class="navigation__menu">
                        <li><a href="{{'/'}}">Watch a Video</a></li>
                        <li><a href="{{'/upload'}}" class="btn-upload">Upload Video</a></li>
                    </ul>
                </div>
            </div>
        </header>

        @if ($latest !== NULL)
            <section class="main main--update">
                <div class="container">
                    <div class="main__title">
                        <h1 class="title__txt">Video Terbaru</h1>
                    </div>
                    
                    <div class="main__content">
                        <div class="headline">
                            <div class="headline__img">
                                <video class="item__img" controls>
                                    <source src="{{$latest->path}}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div class="headline__detail">
                                <h1 class="detail__title">{{$latest->name}}</h1>
                                <span class="detail__date">
                                    {{date('d F Y H:i', strtotime($latest->created_at))}}
                                </span>
                                <p class="detail__description">{{$latest->description}}</p>

                                <div class="detail__action">
                                    <a href="{{'/video/' . $latest->id}}">
                                        <button class="action__btn">Edit Video</button>
                                    </a>
                                    <form action="{{'/video/' . $latest->id}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button" class="action__btn action__btn-delete">Hapus Video</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        <section class="main main--others">
            <div class="container">
                <div class="main__title">
                    <h1 class="title__txt">Video Lainnya</h1>
                </div>
                
                <div class="main__content">
                    <div class="list"> 
                        @foreach ($others as $index => $video)
                        <?php if($index == 0) continue; ?>
                        <div class="item">
                            <video class="item__img" width="320" height="240" controls>
                                <source src="{{$video->path}}" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                            <h1 class="item__title">{{$video->name}}</h1>
                            <span class="item__date">
                                {{date('d F Y H:i', strtotime($latest->created_at))}}
                            </span>

                            <div class="item__action">
                                <a href="{{'/video/' . $video->id}}">
                                    <button class="action__btn">Edit Video</button>
                                </a>
                                <form action="{{'/video/' . $video->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="button" class="action__btn action__btn-delete">Hapus Video</button>
                                </form>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>

        <section class="main main--footer">
            <div class="container">
                &copy; 2022 Nobar (Team 2). All Right Reserved
            </div>
        </section>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/sweetalert.min.js"></script>
        <script src="/js/apps.js"></script>
    </body>
</html>