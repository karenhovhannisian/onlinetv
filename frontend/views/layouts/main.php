<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title><?//= $titlename; ?> | OnlineTv.Am</title>
        <?php /*if(isset($fcontent)){ ?>
        <?php $filmContentMeta = getFilmContentMetaData($fcontent); ?>
        <meta property="og:title" content="<?php echo str_replace(array('"', "'"), '', $filmContentMeta['title']); ?>" />
        <meta property="og:description" content="<?php echo $filmContentMeta['body']; ?>" />
        <meta property="og:image" content="<?php echo $filmContentMeta['filepath']; ?>" />
        <?php } elseif(isset($content)){ ?>
        <?php $ContentMeta = getContentMetaData($content); ?>
        <meta property="og:title" content="<?php echo str_replace(array('"', "'"), '', $ContentMeta['title']); ?>" />
        <meta property="og:description" content="<?php echo $ContentMeta['body']; ?>" />
        <meta property="og:image" content="<?php echo $ContentMeta['filepath']; ?>" />
        <?php } else { ?>
        <meta name="description" content="" />
        <?php }*/ ?>
        <meta name="keywords" content="online TV, պատահար, օրվա լուր, եղանակի տեսություն, թռիչք, ավիաընկերություն, ֆիլմեր, նորություններ, լրահոս, Հայաստան,  հաղորդումներ, սերիալներ, սպորտ, ֆուտբոլ, դժվար ապրուստ, երեք կյանք" />
        <meta name="generator" content="online-tv.am.am v1.0" />
        <meta name="robots" content="all" />
        
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="<?php echo Yii::app()->request->baseUrl ?>favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/css/reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/css/skin.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl ?>/css/sliderkit.css" />
        <!--[if lte IE 8]>
            <link href="css/ie.css" type="text/css" rel="stylesheet" />
            <script src="js/html5.js" type="text/javascript"></script>
        <![endif]-->

        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-1.9.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery-migrate-1.1.1.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.sliderkit.1.9.2.pack.js"></script>
        <script>
            $(document).ready(function(){
                
                $(".newslider-vertical").sliderkit({
                    verticalnav:true,
                    navitemshover:true,
                    circular:true
                });
                
                
                $('.main_menu__has_submenu').hover(function(){
                    $(this).find('.main_menu__submenu').stop(true, true).slideDown();
                },function(){
                    $(this).find('.main_menu__submenu').delay(200).slideUp();
                });
                
                $(document).ready(function() {
                    $('#mycarousel, #mycarousel1').jcarousel({
                        'wrap':'circular',
                        'scroll':1,
                        'auto':5,
                        initCallback: mycarousel_initCallback
                    });
                    $('#mycarousel2').jcarousel({
                        'wrap':'circular',
                        'scroll':1,
                        'auto':5,
                        initCallback: mycarousel_initCallback
                    });
                });
                
                function mycarousel_initCallback(carousel)
                {
                    carousel.clip.hover(function() {
                        carousel.stopAuto();
                    }, function() {
                        carousel.startAuto();
                    });
                };
				
                $('.right_menu_item').click(function(e){
                    $(this).next('.right_submenu').slideToggle();
                    e.preventDefault();
                });
                
            });
            
            function fbs_click() {u=location.href;t=document.title;window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');return false;}
        
        </script>

    </head>

<body>
    
    <div class="wrapper">

            <!-- Header -->
            <header id="header" class="clearfix">

                <!-- Banner -->
                <div class="top_banner">
                    <object height="82" width="1000" data="http://news.am/pic/bnr/beeline-supermix2.swf" type="application/x-shockwave-flash">
                        <param name="wmode" value="transparent">
                        <param name="src" value="http://news.am/pic/bnr/beeline-supermix2.swf">
                    </object>
                </div>

                <div class="header clearfix">
                    <!-- Menu -->
                    <nav class="main_menu_wrapper">
                        <ul class="main_menu">
                            <li><a class="active" href="<?php echo Yii::app()->request->baseUrl ?>/"><?php echo Yii::t("main", "Home"); ?></a></li>
                            <li class="main_menu__has_submenu">
                                <a href="<?php echo Yii::app()->request->baseUrl ?>/"><?php echo Yii::t("main", "News"); ?></a>
                                <div class="main_menu__submenu">
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/2/page/"><?php echo Yii::t("main", "Society"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/3/page/"><?php echo Yii::t("main", "Politics"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/4/page/"><?php echo Yii::t("main", "Economy"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/5/page/"><?php echo Yii::t("main", "International"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/6/page/"><?php echo Yii::t("main", "Incidents"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/7/page/"><?php echo Yii::t("main", "Education"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/8/page/"><?php echo Yii::t("main", "Science"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/10/page/"><?php echo Yii::t("main", "Sport"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/9/page/"><?php echo Yii::t("main", "Business"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/11/page/"><?php echo Yii::t("main", "LifeNews"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/12/page/"><?php echo Yii::t("main", "Interesting"); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/13/page/"><?php echo Yii::t("main", "Newspapers"); ?></a></li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/40/page"><?php echo Yii::t("main", "Face Blog"); ?></a></li>
                            <li class="main_menu__has_submenu">
                                <a href="#"><?php echo Yii::t("main", "Online Kitchen"); ?></a>
                                <div class="main_menu__submenu">
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/89/page/"><?php echo Yii::t("main", "Salads"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/90/page/"><?php echo Yii::t("main", "Dessert"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/91/page/"><?php echo Yii::t("main", "Cookies"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/96/page/"><?php echo Yii::t("main", "Pizza"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/92/page/"><?php echo Yii::t("main", "Pies"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/97/page/"><?php echo Yii::t("main", "Sandwiches"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/95/page/"><?php echo Yii::t("main", "Canned food"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/94/page/"><?php echo Yii::t("main", "Meals"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/93/page/"><?php echo Yii::t("main", "Drinks"); ?></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="main_menu__has_submenu">
                                <a href="#"><?php echo Yii::t("main", "Films"); ?></a>
                                <div class="main_menu__submenu">
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/109/page/"><?php echo Yii::t("main", "Armenian"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/111/page/"><?php echo Yii::t("main", "Non-translated"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/100/page/"><?php echo Yii::t("main", "Detectiv"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/99/page/"><?php echo Yii::t("main", "Drama"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/102/page/"><?php echo Yii::t("main", "Comedy"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/101/page/"><?php echo Yii::t("main", "Domestic"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/98/page/"><?php echo Yii::t("main", "Triller"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/103/page/"><?php echo Yii::t("main", "Тhriller"); ?></a></li>
                                    </ul>
                                    <ul>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/105/page/"><?php echo Yii::t("main", "Historical"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/110/page/"><?php echo Yii::t("main", "Horror"); ?></a></li>
                                        <li><a href="<?php echo Yii::app()->request->baseUrl ?>/films/id/112/page/"><?php echo Yii::t("main", "Indian"); ?></a></li>    
                                        <li><a href="#">Սերիալ</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href="<?php echo Yii::app()->request->baseUrl ?>/category/id/29/page/"><?php echo Yii::t("main", "Love_and_sex"); ?></a></li>
                        </ul>
                    </nav>

                    <!-- Logo -->
                    <a href="<?php echo Yii::app()->request->baseUrl ?>" class="logo"><img src="<?php echo Yii::app()->request->baseUrl ?>/images/logo.png" width="250" height="88"/></a>
                </div>
            </header>

            <!-- Menu -->
            <div class="top_menu_block_wrapper">
                <div id="top_menu_block">
                    <ul class="top_menu">
                        <li class="top_menu__tv"><a href="#"><i class="top_menu__icon"></i><?php echo Yii::t("main", "TV"); ?></a></li>
                        <li class="top_menu__radio"><a href="#"><i class="top_menu__icon"></i><?php echo Yii::t("main", "Radio"); ?></a></li>
                        <li class="top_menu__programms"><a href="#"><i class="top_menu__icon"></i><?php echo Yii::t("main", "Programs"); ?></a></li>
                        <li class="top_menu__serials"><a href="#"><i class="top_menu__icon"></i><?php echo Yii::t("main", "Serials"); ?></a></li>
                        <li class="top_menu__films"><a href="<?php echo Yii::app()->request->baseUrl ?>/film/page/"><i class="top_menu__icon"></i><?php echo Yii::t("main", "Films"); ?></a></li>
                    </ul>
                </div>
            </div>

            <!-- Content -->
            <div class="content_wrapper clearfix">

</body>
</html>