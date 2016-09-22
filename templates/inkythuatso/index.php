<?php
/**

 */

// No direct access.
defined('_JEXEC') or die;
$menu_list = JKentlib::getMainMenu(8);
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
    <link href="css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="css/font-awesome.min.css">
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

    <div class="container-fluid box_shadow margin_bottom_8">
        <header id="HeaderPage" title="">
            <div class="header row">
                <div class="header_2">
                    <div class="mainwidth container">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="logo col-lg-3">
                                <a href="<?php JUri::base();?>">
                                    <img class="img-responsive" alt="Thiết kế mỹ thuật Tùng Khoa"
                                         src="images/logo.png"
                                         title="Thiết kế mỹ thuật Tùng Khoa"></a>
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

    <footer class="footer-distributed">

        <div class="footer-left">

            <h3> <img class="img-responsive" alt="Thiết kế mỹ thuật Tùng Khoa"
                      src="images/logo.png"
                      title="Thiết kế mỹ thuật Tùng Khoa"></h3>

            <p class="footer-links">
                <?php
                foreach ($menu_list as $menuitem) {
                    $url = JRoute::_($menuitem->link . '&Itemid=' . $menuitem->id);
                ?>
                <a href="<?php echo $url; ?>"><?php echo $menuitem->title . ' | ';?></a>
                <?php } ?>
            </p>

            <p class="footer-company-name">Copy right by Tung Khoa &copy; <?php echo date('Y'); ?></p>
        </div>

        <?php
        $db = JFactory::getDbo();
        $query = $db->getQuery(true)
            ->select('*')
            ->from('#__contact_details')
            ->where($db->quoteName('catid') . ' = ' . 4);

        $db->setQuery($query);
        $contact = $db->loadObject();
        ?>
        <div class="footer-center">

            <div>
                <i class="fa fa-map-marker"></i>
                <p><?php echo $contact->address;?></p>

                <i class="fa fa-phone"></i>
                <p><?php echo $contact->telephone;?></p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mailto:<?php echo $contact->email_to;?>"><?php echo $contact->email_to;?></a></p>
            </div>

        </div>
        <div style="clear: both;"?></div>
        <script type="text/javascript">
            jQuery(document).ready(function($){
                // browser window scroll (in pixels) after which the "back to top" link is shown
                var offset = 300,
                    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
                    offset_opacity = 1200,
                    //duration of the top scrolling animation (in ms)
                    scroll_top_duration = 700,
                    //grab the "back to top" link
                    $back_to_top = $('.cd-top');

                //hide or show the "back to top" link
                $(window).scroll(function(){
                    ( $(this).scrollTop() > offset ) ? $back_to_top.addClass('cd-is-visible') : $back_to_top.removeClass('cd-is-visible cd-fade-out');
                    if( $(this).scrollTop() > offset_opacity ) {
                        $back_to_top.addClass('cd-fade-out');
                    }
                });

                //smooth scroll to top
                $back_to_top.on('click', function(event){
                    event.preventDefault();
                    $('body,html').animate({
                            scrollTop: 0 ,
                        }, scroll_top_duration
                    );
                });

            });

        </script>
    </footer>
    <a href="#0" class="cd-top">Top</a>
</body>
</html>
