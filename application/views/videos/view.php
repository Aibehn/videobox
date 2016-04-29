

<div style="width=700px; margin-top:50px" align="center">
<div id="{videoid}">Loading the player...</div>
<div class="container">
    <script type="text/javascript">
        var playerInstance = jwplayer("{videoid}");
        playerInstance.setup({
            file: "<?php echo video_url('{videoid}')?>",
            image: "<?php echo asset_url('img/video_poster')?>/{videoid}.jpg",
            width: '80%',
            height: 420,
            title: '{title}',
            description: '{text}',
            mediaid: '{videoid}'
        });
    </script>
</div>
<button type="button" class="btn btn-info" data-toggle="collapse" 
    data-target="#demo" style="margin-top:15px">Leer descripción</button>
<div id="demo" class="collapse">{text}</div>
</div>
