<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo site_url('')?>">Video Box</a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">

            <ul class="nav navbar-nav">
                <?php echo nav_item('Home','home')?>
                <?php echo nav_item('Upload','upload')?>
                <?php echo nav_item('Recent Videos','videos')?>
                <?php echo nav_item('About','about')?>
            </ul>

            <?php echo user_login_nav() ?>
        </div><!--/.navbar-collapse -->
    </div>
</nav>