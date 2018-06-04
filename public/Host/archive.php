<?php $this->need('header.php'); ?>
<link href="<?php $this->options->themeUrl('/css/list.css'); ?>" rel="stylesheet" type="text/css" />
<div class="wauto mCenter cl">
  <?php $this->need('sidebar.php'); ?>
  <div class="rightSide fr">
    <div class="tit">
      <h1><?php $this->category(); ?></h1>
    </div>
    <div class="borpadd">
      <ul class="listN">
         <?php while($this->next()): ?>
        <li><span><?php $this->date('Y/m/d H:i:s'); ?></span><a href="<?php $this->permalink() ?>" title="<?php $this->title() ?>"><label>></label><?php $this->title() ?></a></li>
        <?php endwhile; ?>
      </ul>
      <div class="blank20"></div>
      <div class="page_navi"> </div>
    </div>
  </div>
</div>
<div class="blank20"></div>
<script type='text/javascript' src="<?php $this->options->themeUrl('js/base.js'); ?>"></script>
<?php $this->need('footer.php'); ?>