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
      <div class="navbar-center"><span class="navbar-title">购物车</span></div>
      <a href="#" class="navbar-item" id="J_Alert">
        结算
      </a>
  </header>

  <div class="g-view">
  <article class="m-list list-theme4">
  <?php foreach($carts as $cart):?>
    <a href="#" class="list-item">
        <div class="list-img">
            <img src="<?php echo asset($cart->images)?>">
        </div>
        <div class="list-mes">
            <h3 class="list-title"><?php echo $cart->name?></h3>
            <div class="list-mes-item">
                <div>
                    单价：<span class="list-price"><em>¥</em><?php echo $cart->price?></span>
                    总价：<span class="list-price">¥<?php echo $cart->price*$cart->mount?></span>
                </div>
                <div>数量：<?php echo $cart->mount?></div>
            </div>
        </div>
    </a>
    <?php endforeach;?> 
    </article>
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
      <a href="<?php echo url('/cart');?>" class="tabbar-item tabbar-active">
          <span class="tabbar-icon">
              <i class="icon-shopcart"></i>
          </span>
          <span class="tabbar-txt">购物车</span>
      </a>
      <a href="<?php echo url('/contacts');?>" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-ucenter"></i>
          </span>
          <span class="tabbar-txt">联系我们</span>
      </a>
  </footer>

  <div>
  </div>
<!-- 引入jQuery 2.0+ -->
<script src="<?php echo asset("js/app.js");?>"></script>
<!-- 引入YDUI脚本 -->
<script src="<?php echo asset("ydui-0.1.3/build/js/ydui.js");?>"></script>
<script>
    !function (win, $) {
        var dialog = win.YDUI.dialog;
        /* 普通提示框*/
        $('#J_Alert').on('click', function () {
            dialog.alert("请拨打<a href='tel:<?php echo $contacts->mobile;?>'><?php echo $contacts->mobile;?></a>联系我们，或上门取货，地址:<?php echo $contacts->address?>");
        });
    }(window, jQuery);
</script>
</body>
</html>
