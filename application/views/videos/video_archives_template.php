<div class="container" style="padding-top:20px" align="center">
    <h1>{title}</h1>
    {videos}
    <div class="media floating-box">
        <div class="media-center">
            <a href="<?php echo site_url('videos/view/{videoid}') ?>">
                <img class="media-object img-thumbnail" width="240" height="200"
		    src="<?php echo asset_url('img/video_poster')?>/{videoid}.jpg" alt="{title}">
            </a>
        </div>
        <div class="media-body">
            <h3 class="media-heading">{title}</h3>
            <p style="font-size:14px">{text}</p>
        </div>
    </div>
    {/videos}
</div>
