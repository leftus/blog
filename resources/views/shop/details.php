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
      <a href="javascript:add_cart(<?php echo $product->id;?>)" class="navbar-item">
          <i class="icon-shopcart-outline"></i>
      </a>
  </header>

  <div class="g-view">
    
    <div class="video">
    <?php if($product->video):?>
        <video width="100%" height="280" controls poster="<?php echo asset($product->images);?>">
            <source src="<?php echo asset($product->video);?>" type="video/mp4">
            <source src="<?php echo asset($product->video);?>" type="video/ogg">
            您的浏览器不支持 video 标签。
        </video>
    <?php else:?>
        <img src="<?php echo asset($product->images);?>" width="100%">
    <?php endif;?>
    </div>

    <div class="m-cell">
        <div class="cell-item">
            <div class="cell-left">名称：</div>
            <div class="cell-right"><?php echo $product->name;?></div>
        </div>

        <div class="cell-item">
            <div class="cell-left">规格：</div>
            <div class="cell-right"><?php echo $product->norms;?></div>
        </div>

        <div class="cell-item">
            <div class="cell-left">分类：</div>
            <div class="cell-right"><?php echo $category->name;?></div>
        </div>
        <div class="cell-item">
            <div class="cell-left">价格：</div>
            <div class="cell-right"><?php echo $product->price;?>元</div>
        </div>
    </div>

    <div class="des"><?php echo $product->des;?></div>
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
<script>
function add_cart(product_id){
    $.ajax({
        url:"/add_cart",
        type:"post",
        data:{product_id:product_id,_token:"<?php echo csrf_token(); ?>"},
        dataType:"json",
        success:function(data){
            if(data.code==0){
                !function (win, $) {
                    var dialog = win.YDUI.dialog;
                    dialog.toast(data.msg, 'none', 1000);
                }(window, jQuery);
            }
        }
    })

}
</script>
</body>
</html>
