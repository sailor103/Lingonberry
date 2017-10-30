<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
  <div class="footer section">
    
    <div class="footer-inner section-inner">
    
            
        <div class="footer-a widgets">
      
          <div class="widget widget_recent_entries">
            <div class="widget-content">    <h3 class="widget-title">Links</h3>
              <ul>
                <?php Links_Plugin::output("SHOW_TEXT", 10,"footer"); ?>
              </ul>
            </div>
            <div class="clear"></div>
          </div>         
          <div class="clear"></div>
          
        </div>
        
       <!-- /footer-a -->
        
            
        <div class="footer-b widgets">
      
          <div class="widget widget_categories">
            <div class="widget-content"><h3 class="widget-title">Comments</h3>    
            <ul>
            <?php $this->widget('Widget_Comments_Recent','pageSize=7&ignoreAuthor=true')->parse('<li><a href="{permalink}">{text}</a></li>'); ?>
            </ul>
            </div>
            <div class="clear"></div>
          </div>         
          <div class="clear"></div>
          
        </div>
              
       <!-- /footer-b -->
                
            
        <div class="footer-c widgets">
      
          <div class="widget widget_text"><div class="widget-content"><h3 class="widget-title">FOR ME</h3>
                <div class="textwidget">
                  <ul>
                  	<li>尹全超，80末90初的第一代人</li>
                    <li><a href="http://malagis.com" target="_blank" >麻辣GIS</a>站长。</li>
                    <li>现就职于武汉某公司。</li>
                    <li>主页：<a href="http://yqc.im" target="_blank">yqc.im</a></li>
                    <li>邮箱：i@yqc.im</li>
                    <li>企鹅：61817708</li>
                  </ul>
                </div>
    </div><div class="clear"></div></div>         
          <div class="clear"></div>
          
        </div>
        
       <!-- /footer-c -->
      
      <div class="clear"></div>
    
    </div> <!-- /footer-inner -->
  
  </div> <!-- /footer -->

<div class="credits section">

  <div class="credits-inner section-inner">

    <p class="credits-left">
    
      <span>Copyright</span> &copy; 2010-<?php echo date('Y');?> <a href="<?php $this->options->siteUrl(); ?>" title="<?php $this->options->title() ?>"><?php $this->options->title() ?></a> Drive by <a target="_blank" href="http://typecho.org/">Typecho</a> & <a target="_blank" href="https://github.com/sailor103/Lingonberry">Lingonberry</a>
    
    </p>
    
    <p class="credits-right">
      
      <a title="To the top" class="tothetop">返回顶部</a>
      <!--如果不能保留作者链接，请在适当位置添加一个友情链接即可，我使用，我尊重。-->
      
    </p>
    
    <div class="clear"></div>
  
  </div> <!-- /credits-inner -->
  
</div> <!-- /credits -->

<script type='text/javascript' src='<?php $this->options->themeUrl(); ?>js/global.js?ver=4.3.1'></script>
<?php $this->footer(); ?>
</body>
</html>
