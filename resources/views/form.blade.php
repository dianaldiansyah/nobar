<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Nobar - Video Streaming No #1 di Binus University</title>

        <link rel="stylesheet" href="/css/apps.css">
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

        <section class="main main--update">
            <div class="container">
                <div class="main__title">
                    <h1 class="title__txt">Upload Video</h1>
                </div>
                
                <div class="main__content">
                    @if($video)
                    <form class="form" action="{{'/video/'.$video->id}}" method="post" enctype="multipart/form-data">
                    @method('patch')
                    @else
                    <form class="form" action="{{'/upload'}}" method="post" enctype="multipart/form-data">
                    @endif
                        @csrf
                        <div class="form__input">
                            <div class="form-group">
                                <label for="name">Nama File/Video</label>
                                <input type="text" name="name" value="{{$video ? $video->name : ''}}">
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi Video</label>
                                <textarea name="description" cols="30" rows="10">{{$video ? $video->description : ''}}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="file">File Video</label>
                                <input class="input-video" type="file" name="video">
                            </div>

                            <div class="form-action">
                                <button class="action__btn action__btn-upload" type="submit" >{{$video ? 'Save' : 'Upload'}}</button>
                                <a href="{{'/'}}">
                                    <button class="action__btn action__btn-cancel">Cancel</button>
                                </a>
                            </div>
                        </div>
                        <div class="form__preview">
                            <label>Preview Video</label>
                            <video width="400" controls>
                                <source src="{{$video ? $video->path : ''}}" class="video-preview">
                                  Your browser does not support HTML5 video.
                            </video>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        <section class="main main--footer">
            <div class="container">
                &copy; 2022 Nobar (Team 2). All Right Reserved
            </div>
        </section>

        <script src="/js/jquery.min.js"></script>
        <script src="/js/apps.js"></script>
    </body>
</html>