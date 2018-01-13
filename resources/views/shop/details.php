<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>德惠烟花爆竹</title>
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

  <header class="m-navbar navbar-fixed">
      <a href="#" class="navbar-item"><i class="back-ico"></i></a>
      <div class="navbar-center"><span class="navbar-title"><?php echo $product->name;?></span></div>
  </header>

  <div class="m-slider">
      <div class="slider-wrapper">
          <div class="slider-item">
              <a href="#">
                  <img src="<?php echo asset($product->images);?>">
              </a>
          </div>
      </div>
  </div>

  <div class="g-view">
    <div class="m-cell">
        <div class="cell-item">
            <div class="cell-left">名称：</div>
            <div class="cell-right"><?php echo $product->name;?></div>
        </div>
        <div class="cell-item">
            <div class="cell-left">分类：</div>
            <div class="cell-right"><?php echo $category->name;?></div>
        </div>
        <div class="cell-item">
            <div class="cell-left">价格：</div>
            <div class="cell-right"><?php echo $product->price;?>元</div>
        </div>
        <div class="cell-item">
            <div class="cell-left">详情：</div>
            <div class="cell-right"><?php echo $product->content;?></div>
        </div>
    </div>
  </div>

  <footer class="m-tabbar tabbar-fixed">
      <a href="<?php echo url('/');?>" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-home"></i>
          </span>
          <span class="tabbar-txt">首页</span>
      </a>
      <a href="<?php echo url('/categorys');?>" class="tabbar-item">
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
      <a href="<?php echo url('/contacts');?>" class="tabbar-item">
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

</body>
</html>
