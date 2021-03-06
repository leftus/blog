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
      <div class="navbar-center"><span class="navbar-title">联系我们</span></div>
  </header>

  <div class="g-view">
    <iframe width='420' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='http://f.amap.com/4X6Xs_0214eUZ'></iframe>
    <div class="m-cell">
        <div class="cell-item">
            <div class="cell-left"><i class="icon-location"></i>地址：</div>
            <div class="cell-right"><?php echo $contacts->address;?></div>
        </div>
        <div class="cell-item">
            <div class="cell-left"><i class="icon-ucenter"></i>联系人：</div>
            <div class="cell-right"><?php echo $contacts->name;?></div>
        </div>
        <div class="cell-item">
            <div class="cell-left"><i class="icon-phone3"></i>电话：</div>
            <div class="cell-right tel"><a href="tel:<?php echo $contacts->mobile;?>"><?php echo $contacts->mobile;?></a></div>
        </div>
        <div class="cell-item">
            <div class="cell-left"><i class="icon-question"></i>介绍：</div>
            <div class="cell-right"><?php echo $contacts->content;?></div>
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
      <a href="<?php echo url('/cart');?>" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-shopcart"></i>
          </span>
          <span class="tabbar-txt">购物车</span>
      </a>
      <a href="<?php echo url('/contacts');?>" class="tabbar-item tabbar-active">
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
