<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div class="content section-inner">
<div class="posts">
<?php while($this->next()): ?>
<!--blog-->
<div class="post type-post<?php if (isset($this->fields->format)): ?> format-<?php $this->fields->format(); ?><?php endif; ?>">
<div class="post-bubbles">
<a href="<?php $this->permalink() ?>" class="format-bubble" title="<?php $this->title() ?>"></a>
</div>
<div class="content-inner">
<div class="post-header">
<h2 class="post-title"><a href="<?php $this->permalink() ?>" rel="bookmark" title="<?php $this->title() ?>"><?php $this->title() ?></a></h2>
<div class="post-meta">
<span class="post-date"><a href="<?php $this->permalink() ?>" title="<?php $this->date('F j, Y'); ?>"><?php $this->date('F j, Y'); ?></a></span>
<span class="date-sep"> / </span>
<span class="post-author"><a href="<?php $this->author->permalink(); ?>" title="Posts by <?php $this->author(); ?>" rel="author"><?php $this->author(); ?></a></span>
<span class="date-sep"> / </span>
<a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('Comments', '1 Comment', '%d Comments'); ?></a>    
</div> <!-- /post-meta -->
</div> <!-- /post-header -->
<div class="post-content">
<?php $this->content('more >>'); ?>
</div> <!-- /post-content -->
<div class="clear"></div>
</div> <!-- /post content-inner -->
<div class="clear"></div>             
</div>
<!--blog-end-->
<?php endwhile; ?>
        <div class="post-nav archive-nav">        
<?php $this->pageLink('前一页','prev'); ?>
<?php $this->pageLink('后一页','next'); ?>         
          <div class="clear"></div>          
        </div> <!-- /post-nav archive-nav -->
      <div class="clear"></div>
  </div> <!-- /posts -->
</div> <!-- /content section-inner -->
<?php $this->need('footer.php'); ?>