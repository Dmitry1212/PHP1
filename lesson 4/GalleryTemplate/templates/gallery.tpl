<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>{{TITLE}}</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <script type="text/javascript" src="./scripts/jquery-1.4.3.min.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <script type="text/javascript" src="./scripts/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <link rel="stylesheet" type="text/css" href="./scripts/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
     <!--script type="text/javascript">
       $(document).ready(function(){
            $("a.photo").fancybox({
                transitionIn: 'elastic',
                transitionOut: 'elastic',
                speedIn: 500,
                speedOut: 500,
                hideOnOverlayClick: false,
                titlePosition: 'over'
            });	}); </script-->
    <!--script-- type="text/javascript">
        function openImageWindow(src) {
            var image = new Image();
            image.src = src;
            var width = image.width;
            var height = image.height;
            console.log("src");
            window.open(src,_blank  ,"width=" + width + ",height=" + height);
        }
    </script-->
    <script type="text/javascript">
        function openImageWindow(src) {
            var image = new Image();
            image.src = src;
            var width = image.width;
            var height = image.height;
            window.open(src);
        }
    </script>

</head>

<body>
<div id="main">
    <div class="post_title"><h2>{{GALLERYNAME}}</h2></div>
    <div class="gallery">
       <a rel="gallery" class="photo"><img src="gallery_img/small/01.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/01.jpg">'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/02.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/02.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/03.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/03.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/04.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/04.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/05.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/05.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/06.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/06.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/07.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/07.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/08.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/08.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/09.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/09.jpg")'/></a>
       <a rel="gallery" class="photo"><img src="gallery_img/small/10.jpg" width="150" height="100"  onclick = 'window.open("gallery_img/big/10.jpg")'/></a>
    </div>
</div>
{{FOOTER}}
</center>
</body>
</htm!----