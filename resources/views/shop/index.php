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
          <div class="slider-item">
              <a href="#">
                  <img src="http://static.ydcss.com/uploads/ydui/1.jpg">
              </a>
          </div>
          <div class="slider-item">
              <a href="#">
                  <img src="http://static.ydcss.com/uploads/ydui/2.jpg">
              </a>
          </div>
          <div class="slider-item">
              <a href="#">
                  <img src="http://static.ydcss.com/uploads/ydui/3.jpg">
              </a>
          </div>
      </div>
      <div class="slider-pagination"></div><!-- 分页标识 -->
  </div>

  <div id="J_Tab" class="m-tab">
      <ul class="tab-nav">
          <li class="tab-nav-item tab-active"><a href="javascript:;">选项一</a></li>
          <li class="tab-nav-item"><a href="javascript:;">选项二</a></li>
          <li class="tab-nav-item"><a href="javascript:;">选项三</a></li>
      </ul>
      <div class="tab-panel">
          <div class="tab-panel-item tab-active">
            <article class="m-list list-theme1">
                <a href="#" class="list-item">
                    <div class="list-img">
                        <img src="http://img1.shikee.com/try/2016/06/19/09430120929215230041.jpg_220x220.jpg">
                    </div>
                    <div class="list-mes">
                        <h3 class="list-title">标题标题标题标题标题</h3>
                        <div class="list-mes-item">
                            <div>
                                <span class="list-price"><em>¥</em>34.7</span>
                                <span class="list-del-price">¥45.65</span>
                            </div>
                            <div>right</div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-img">
                        <img src="http://img1.shikee.com/try/2016/06/21/10172020923917672923.jpg_220x220.jpg">
                    </div>
                    <div class="list-mes">
                        <h3 class="list-title">骆驼男装2016夏装男士短袖T恤 圆领衣服 印花男装体恤 半袖打底衫</h3>
                        <div class="list-mes-item">
                            <div>
                                <span class="list-price"><em>¥</em>34.7</span>
                                <span class="list-del-price">¥45.65</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-img">
                        <img src="http://img1.shikee.com/try/2016/06/23/15395220917905380014.jpg_220x220.jpg">
                    </div>
                    <div class="list-mes">
                        <h3 class="list-title">条纹短袖T恤男士韩版衣服大码潮流男装夏季圆领体恤2016新款半袖</h3>
                        <div class="list-mes-item">
                            <div>
                                <span class="list-price"><em>¥</em>34.7</span>
                                <span class="list-del-price">¥45.65</span>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#" class="list-item">
                    <div class="list-img">
                        <img src="http://img1.shikee.com/try/2016/06/25/14244120933639105658.jpg_220x220.jpg">
                    </div>
                    <div class="list-mes">
                        <h3 class="list-title">夏季青少年衣服男生潮牌t恤 男士 夏秋学生 日系棉短袖半袖男小衫</h3>
                        <div class="list-mes-item">
                            <div>
                                <span class="list-price"><em>¥</em>34.7</span>
                                <span class="list-del-price">¥45.65</span>
                            </div>
                            <div>right</div>
                        </div>
                    </div>
                </a>
            </article>
          </div>
          <div class="tab-panel-item">222222</div>
          <div class="tab-panel-item">333333</div>
      </div>
  </div>

  <footer class="m-tabbar">
      <a href="#" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-home-outline"></i>
          </span>
          <span class="tabbar-txt">首页</span>
      </a>
      <a href="#" class="tabbar-item tabbar-active">
          <span class="tabbar-icon">
              <i class="icon-shopcart"></i>
          </span>
          <span class="tabbar-txt">购物车</span>
      </a>
      <a href="#" class="tabbar-item">
          <span class="tabbar-icon">
              <i class="icon-ucenter-outline"></i>
          </span>
          <span class="tabbar-txt">个人中心</span>
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
</script>
</body>
</html>
