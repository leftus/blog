<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport" />
    <meta content="yes" name="apple-mobile-web-app-capable" />
    <meta content="black" name="apple-mobile-web-app-status-bar-style" />
    <meta content="telephone=no" name="format-detection" />
    <!-- 引入YDUI样式 -->
    <link rel="stylesheet" href="<?php echo asset("ydui-0.1.3/build/css/ydui.css");?>">
    <link rel="stylesheet" href="<?php echo asset("css/shop.css");?>">
    <!-- 引入YDUI自适应解决方案类库 -->
    <script src="<?php echo asset("ydui-0.1.3/build/js/ydui.flexible.js");?>"></script>
</head>
<body>
  <div class="m-slider" id="J_Slider">
      <div class="slider-wrapper">
        <?php foreach($pictures as $picture):?>
          <div class="slider-item">
              <a href="#">
                  <img class="lazy" data-url="<?php echo asset($picture->path);?>">
              </a>
          </div>
        <?php endforeach;?>
      </div>
      <div class="slider-pagination"></div><!-- 分页标识 -->
  </div>


  <div class="m-grids-3">
    <?php foreach($categorys as $category):?>
        <a href="<?php echo url('/',['category_id'=>$category->id]);?>" class="grids-item <?php echo ($category->id==$current_category)?'active':'';?>">
            <div class="grids-txt"><span><?php echo $category->name;?></span></div>
        </a>
    <?php endforeach;?>
  </div>

  <article class="m-list list-theme1">
    <?php foreach($products as $product):?>
      <a href="#" class="list-item">
          <div class="list-img">
              <img class="lazy" data-url="<?php echo asset($product->images);?>">
          </div>
          <div class="list-mes">
              <h3 class="list-title"><?php echo $product->name;?></h3>
              <div class="list-mes-item">
                  <div>
                      <span class="list-price"><em>¥</em><?php echo $product->price;?></span>
                      <span class="list-del-price"><?php echo $product->quantity;?></span>
                  </div>
                  <div></div>
              </div>
          </div>
      </a>
    <?php endforeach;?>
  </article>

  <footer class="m-tabbar">
      <a href="<?php echo url('/');?>" class="tabbar-item tabbar-active">
          <span class="tabbar-icon">
              <i class="icon-home"></i>
          </span>
          <span class="tabbar-txt">首页</span>
      </a>
      <a href="#" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-search"></i>
          </span>
          <span class="tabbar-txt">分类查找</span>
      </a>
      <a href="#" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-order"></i>
          </span>
          <span class="tabbar-txt">订单中心</span>
      </a>
      <a href="#" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-ucenter"></i>
          </span>
          <span class="tabbar-txt">联系我们</span>
      </a>
  </footer>

<!-- 引入jQuery 2.0+ -->
<script src="<?php echo asset("js/app.js");?>"></script>
<!-- 引入YDUI脚本 -->
<script src="<?php echo asset("ydui-0.1.3/build/js/ydui.js");?>"></script>

<script>
    $('#J_Slider').slider({
        speed: 200,
        autoplay: 2000,
        lazyLoad: true
    });

    var $tab = $('#J_Tab');

    $tab.tab({
        nav: '.tab-nav-item',
        panel: '.tab-panel-item',
        activeClass: 'tab-active'
    });

    $tab.find('.tab-nav-item').on('open.ydui.tab', function (e) {
        console.log('索引：%s - [%s]正在打开', e.index, $(this).text());
    });

    $tab.find('.tab-nav-item').on('opened.ydui.tab', function (e) {
        console.log('索引：%s - [%s]已经打开了', e.index, $(this).text());
    });
    $('img.lazy').lazyLoad();
</script>
</body>
</html>
