<?php
/**

 */

// No direct access.
defined('_JEXEC') or die;
$menu_list = JKentlib::getMainMenu(8);
$intro_link = JRoute::_(ContentHelperRoute::getArticleRoute(JKentlib::INTRO_ID, 14));
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        in tờ rơi, in catalogue, in menu, in oder, in túi giấy, in bao muỗng bao đụa, in bao tăm, in bao thư, in danh
        thiếp, in folder, in vé giữ xe
    </title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/Styles.css" rel="stylesheet">
    <link href="css/breadcrumb.css" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.elastislide.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="images/favicon.png" rel="shortcut icon" type="image/x-icon">
    <meta name="robots" content="index,follow,all">
    <meta name="revisit-after" content="1 days">
    <meta name="language" content="Vietnamese">

    <meta property="og:title"
          content="in tờ rơi, in catalogue, in menu, in oder, in túi giấy, in bao muỗng bao đụa, in bao tăm, in bao thư, in danh thiếp, in folder, in vé giữ xe">
    <meta property="og:description"
          content="in tờ rơi, in catalogue, in menu, in oder, in túi giấy, in bao muỗng bao đụa, in bao tăm, in bao thư, in danh thiếp, in folder, in vé giữ xe ngoài ra còn in lịch tết, bao lì xì. sổ tay">
    <meta property="og:image" content="images/logo.png">
    <link rel="image_src" type="image/jpeg"
          href="images/logo.png">
    <meta name="description"
          content="in tờ rơi, in catalogue, in menu, in oder, in túi giấy, in bao muỗng bao đụa, in bao tăm, in bao thư, in danh thiếp, in folder, in vé giữ xe ngoài ra còn in lịch tết, bao lì xì. sổ tay">
    <meta name="keywords"
          content="in tờ rơi, in catalogue, in menu, in oder, in túi giấy, in bao muỗng bao đụa, in bao tăm, in bao thư, in danh thiếp, in folder, in vé giữ xe">

</head>
<body cz-shortcut-listen="true">

    <div class="container-fluid box_shadow margin_bottom_30">
        <header id="HeaderPage" title="">
            <div class="header row">
                <div class="header_1">
                    <div class="mainwidth container">
                        <ul class="col-lg-12 col-md-12 col-xs-12">
                            <li class="col-lg-6">
                                <img alt="bayhien@gmail.com"
                                     src="images/mail.png"
                                     title="bayhien@gmail.com">bayhien@gmail.com
                            </li>

                            <li class="col-lg-6">
                                <img alt="(08) 38 494 818 - Hotline: 0902 2417738 - 0937723477"
                                     src="images/phone.png"
                                     title="(08) 38 494 818 - Hotline: 0902 2417738 - 0937723477">(08) 38 494 818 - Hotline: 0902 2417738 - 0937723477
                            </li>

                        </ul>
                        <div class="link_seo">
                            <ul>
                                <li><a href="javascript:void(0);" target="_blank">
                                        <img alt="Facebook" src="images/facebook.png"
                                             title="Facebook"></a></li>

                                <li><a href="javascript:void(0);" target="_blank">
                                        <img alt="Sky" src="images/skype.png"
                                             title="Sky"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="header_2">
                    <div class="mainwidth container">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo col-lg-3">
                                <a href="<?php JUri::base();?>">
                                    <img class="img-responsive" alt="Thiết kế mỹ thuật Cao Nguyên Xanh"
                                         src="images/logo.png"
                                         title="Thiết kế mỹ thuật Cao Nguyên Xanh"></a>
                            </div>
                            <div class="find col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <input name="ctl00$Txt_KeySearch" type="text" id="Txt_KeySearch"
                                       class="find_input form-control" placeholder="Tìm kiếm">
                                <input type="image"
                                       name="ctl00$Ibt_Search"
                                       id="Ibt_Search"
                                       title="Find"
                                       class="find_button"
                                       src="images/IconSearch.png"
                                       alt="Find">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header_3">
                    <div class="container">
                        <!-- Static navbar -->
                        <div class="navbar navbar-inverse" role="navigation">
                            <div class="container-fluid">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target=".navbar-collapse">
                                        <span class="sr-only">Menu</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <div id="MenuTop" class="navbar-collapse collapse">
                                    <jdoc:include type="modules" name="menu" />
                                </div>
                                <!--/.nav-collapse -->
                            </div>
                            <!--/.container-fluid -->
                        </div>
                    </div>
                    <!-- /container -->
                </div>
            </div>
        </header>
    </div>

    <jdoc:include type="message" />
    <jdoc:include type="component" />

    <div class="container-fluid row bordertop background00a651">
        <div class="mainwidth padding_27 container">
            <div class="addressfoot col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <span class="name">Công ty thiết kế Mỹ Thuật Cao Nguyên Xanh</span><br>
                34/10 Bàu cát 2, P14, Q.Tân Bình, TP.HCM<br>
                Điện thoại: 08.6292 4282 - Fax: 08.3949 2357<br>
                MST: 0304880437
            </div>
            <div class="copyright col-lg-5 col-md-5 col-sm-12 col-xs-12">
                copyright© 2015 Cao Nguyên Xanh. All rights reserved<br>
                Thiết kế bởi Cao Nguyên Xanh
            </div>
        </div>
    </div>

</body>
</html>
