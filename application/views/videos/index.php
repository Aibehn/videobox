<div style="padding-top:20px;" align="center">
<h2><?php echo $title; ?></h2>
<?php foreach ($videos as $videos_item): ?>
    <h3><?php echo $videos_item['title']; ?></h3>
    <div class="main">
        <?php echo $videos_item['text']; ?>
    </div>
    <p><a href="<?php echo site_url('videos/'.$videos_item['videoid']); ?>">View video</a></p>
<?php endforeach;?>
</div>
