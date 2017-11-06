<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<html class="no-js">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>
    <script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>styles.css">
    <link rel="stylesheet" href="<?php $this->options->themeUrl(); ?>custom.css">
    <link rel="shortcut icon" href="<?php $this->options->themeUrl();?>images/favicon.ico" />
    
    <script type='text/javascript' src='https://cdn.staticfile.org/jquery/1.11.3/jquery.min.js'></script>
    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<?php if ($this->is('single')) : ?>
<body class="single single-post">
<?php else: ?>
<body class="home blog has-featured-image">
<?php endif; ?>
<div class="navigation">
        
      <div class="navigation-inner section-inner">
    
        <ul class="blog-menu">
        
          <li><a href="<?php $this->options->siteUrl(); ?>"><?php _e('首页'); ?></a></li>
          <?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
          <?php while($pages->next()): ?>
            <li><a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>"><?php $pages->title(); ?></a></li>
          <?php endwhile; ?>
          <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children has-children"><a href="/">分类</a>
          <ul class="sub-menu">
          <?php $this->widget('Widget_Metas_Category_List')->to($category); ?>
          <?php while ($category->next()): ?>
          <li><a href="<?php $category->permalink(); ?>" title="<?php $category->name(); ?>"><?php $category->name(); ?></a></li>
          <?php endwhile; ?>
          </ul>
          </li>        
         </ul>
         
         <form method="post" class="search-form" action="./">
  <input type="search"   value="Search" onfocus="if(this.value=='Search')this.value='';" onblur="if(this.value=='')this.value='Search';" name="s" id="s" /> 
  <input type="submit" id="searchsubmit" value="Search" class="button hidden">
</form>        
         <div class="clear"></div>
       
      </div> <!-- /navigation-inner -->
     
    </div> <!-- /navigation -->
  
    <div class="header section">
        
      <div class="header-inner section-inner">
      
                      
          <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" rel="home" class="logo">
            <img src="<?php $this->options->themeUrl();?>images/tx.jpg" alt="<?php $this->options->title() ?>">
          </a>
          
                              
        <h1 class="blog-title">
          <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>" rel="home"><?php $this->options->title() ?></a>
          <p>一蓑烟雨看苍生，半壶浊酒笑红尘</p>
        </h1>
        
        <div class="nav-toggle">
        
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
          
          <div class="clear"></div>
        
        </div>
                
         <div class="clear"></div>
                                              
      </div> <!-- /header section -->
      
    </div> <!-- /header-inner section-inner -->



    
    
