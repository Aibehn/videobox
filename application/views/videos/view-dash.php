<div style="margin-top:50px">
    <h3>{title}</h3>
</div>

<div style="width=700px; margin-top:20px" align="center">
<div id="player"></div>
<div class="container">
    <script type="text/javascript">

        var conf = {
            key:       "cdd7d3a8-ba44-4260-a728-b82b7f9f7971",
            source: {
                dash:        '<?php echo video_url_dash('{videoid}')?>',
                //TODO: video url para manifiesto
                poster:      '<?php echo asset_url('img/video_poster')?>/{videoid}.jpg'
            },
            style: {
                width:          '85%',
                aspectratio:    '16:9',
                controls:       true
            },
            tweaks: {
                context_menu_entries: [
                {
                    name : 'VideoBox Website',
                    url  : '<?php echo base_url() ?>'
                }
                ]
            },
            skin: {
                screenLogoImage : ""
            },
            playback : {
                autoplay         : false,
                muted            : false,
                audioLanguage    : ['es', 'en', 'de'],
                subtitleLanguage : 'es',
                preferredTech    : [{
                    player: 'html5',
                    streaming: 'dash'
                }]
            }
        };


        var player = bitdash('player');

        player.setup(conf).then(function(value) {
            // Success
            console.log('Successfully created bitdash player instance');
        }, function(reason) {
            // Error!
            console.log('Error while creating bitdash player instance');
        });
    </script>
    <button type="button" class="btn btn-info" 
	data-toggle="collapse" data-target="#demo" style="margin-top:15px">Leer descripción</button>
    <div id="demo" class="collapse">{text}</div>
</div>
</div>