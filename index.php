
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Forum Demo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700,900" rel="stylesheet">

    <!-- Styles -->
    <link href="https://tutorialzine.com/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" />

    <link href="https://tutorialzine.com/build/css/app-c0262ea182.css" rel="stylesheet">

    <script type="text/javascript">

        var _gaq = _gaq || [];
        _gaq.push(['_setAccount', 'UA-531949-8']);
        _gaq.push(['_trackPageview']);

        (function() {
            var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
            ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
        })();

    </script>
</head>
<body>
<div class="page__wrapper page--posts-index">

    <?php include ('header.php') ?>

    <div class="cover-layer"></div> <!-- cover main content when search form is open -->

    <main class="main-content">
        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <aside class="col-md-3 post__links hidden-xs hidden-sm">

                        <div class="recruitment-card">
                            <p><b>Tutorialzine</b> is a community <br>of talented developers who <br>learn together.</p>
                            <a href="https://tutorialzine.com/register" class="btn btn-primary">Sign up for Free.</a>
                        </div>

                        <section class="section">
                            <div class="section__title">
                                <h3>Topics</h3>
                            </div>

                            <div class="section__content">
                                <ul class="list-group categories">
                                    <li>
                                        <a href="https://tutorialzine.com/forum" class="list-group-item">

                                            <div class="category__name active">
                                                All
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/javascript" class="list-group-item javascript">

                                            <div class="category__name javascript">
                                                JavaScript
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/html5" class="list-group-item html5">

                                            <div class="category__name html5">
                                                HTML5
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/php" class="list-group-item php">

                                            <div class="category__name php">
                                                PHP
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/react" class="list-group-item react">

                                            <div class="category__name react">
                                                React
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/other" class="list-group-item other">

                                            <div class="category__name other">
                                                Other
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="https://tutorialzine.com/forum/category/meta" class="list-group-item meta">

                                            <div class="category__name meta">
                                                Meta
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </section>


                    </aside>

                    <div class="col-md-9">
                        <div class="section section--posts">
                            <div class="section__title">
                                <div class="dropdown dropdown--sort hidden-md hidden-lg">
                                    <button class="dropdown-toggle btn btn-dropdown" href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                        All
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="https://tutorialzine.com/forum">All</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/javascript">JavaScript</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/html5">HTML5</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/php">PHP</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/react">React</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/other">Other</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum/category/meta">Meta</a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="dropdown dropdown--sort">
                                    <button class="dropdown-toggle btn btn-dropdown" href="#"  data-toggle="dropdown" role="button" aria-expanded="false">
                                        Recently Commented
                                        <span class="caret"></span>
                                    </button>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="https://tutorialzine.com/forum?sort=latest">Newest</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum?sort=recent">Recently Commented</a>
                                        </li>
                                        <li>
                                            <a href="https://tutorialzine.com/forum?sort=top">Most Commented</a>
                                        </li>
                                    </ul>
                                </div>

                            </div>


                            <ul class="posts">
                                <li class="post meta">
                                    <div class="post__container">
                                        <div class="post__header">

                                      <span class="post__pin active" title="Pinned discussion">
                  <span class="pin"></span>
              </span>

                                            <!-- <span class="post__category meta hidden-xs" data-type="meta"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/meta" class="post__category meta hidden-xs" data-type="meta"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/6ce343a96a0245f2fcbcd65dfcc22fb2?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/32/introduce-yourself">
                                                    <h4>
                                                        Introduce Yourself

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/32/introduce-yourself">
                                                        1 month ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@martin"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    Martin Angelov
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/32/introduce-yourself#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    119
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category meta" data-type="meta"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post html5">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category html5 hidden-xs" data-type="html5"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/html5" class="post__category html5 hidden-xs" data-type="html5"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/b82c19075e2c0302d0b533bdb814ffbc?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/57/web-development">
                                                    <h4>
                                                        Web Development

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/57/web-development">
                                                        2 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@Indehyde"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    Gyen Abubakar Sadick
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/57/web-development#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    1
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category html5" data-type="html5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post other">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category other hidden-xs" data-type="other"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/other" class="post__category other hidden-xs" data-type="other"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/fa8a1939806a5c7f45ec705e99d79191?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/91/which-is-your-favorite-code-editor">
                                                    <h4>
                                                        Which is your favorite code editor?

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/91/which-is-your-favorite-code-editor">
                                                        20 hours ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@shanee"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    shanee
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/91/which-is-your-favorite-code-editor#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    2
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category other" data-type="other"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post javascript">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category javascript hidden-xs" data-type="javascript"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/javascript" class="post__category javascript hidden-xs" data-type="javascript"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/34b98759bb94f6142b0fc0c815f92ca1?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/48/are-there-any-benefits-to-switching-to-yarn">
                                                    <h4>
                                                        Are there any benefits to switching to yarn?

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/48/are-there-any-benefits-to-switching-to-yarn">
                                                        3 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@hackers44"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    hackers44
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/48/are-there-any-benefits-to-switching-to-yarn#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    4
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category javascript" data-type="javascript"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post javascript">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category javascript hidden-xs" data-type="javascript"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/javascript" class="post__category javascript hidden-xs" data-type="javascript"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/90fdbac5f6021041cac96a88c7111e22?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/46/do-you-use-any-es6-features-in-your-everyday-coding">
                                                    <h4>
                                                        Do you use any ES6 features in your everyday coding?

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/46/do-you-use-any-es6-features-in-your-everyday-coding">
                                                        3 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@eddiereed"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    eddiereed
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/46/do-you-use-any-es6-features-in-your-everyday-coding#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    2
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category javascript" data-type="javascript"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post html5">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category html5 hidden-xs" data-type="html5"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/html5" class="post__category html5 hidden-xs" data-type="html5"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/6110d1fbdf5641de3da5bf4b74c7270d?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/66/upload-file">
                                                    <h4>
                                                        upload file

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/66/upload-file">
                                                        1 day ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@khandarerupali09"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    khandarerupali09
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/66/upload-file#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    1
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category html5" data-type="html5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post php">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category php hidden-xs" data-type="php"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/php" class="post__category php hidden-xs" data-type="php"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/2e1f876ce34adedab2f10fdf4a31026f?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/65/sort-gallery">
                                                    <h4>
                                                        sort gallery

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/65/sort-gallery">
                                                        3 days ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@skorpioninka"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    skorpioninka
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/65/sort-gallery#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    2
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category php" data-type="php"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post other">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category other hidden-xs" data-type="other"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/other" class="post__category other hidden-xs" data-type="other"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/1b4e290fdd60cbd6c3d5bc9c49e73c0a?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/64/bootstrap">
                                                    <h4>
                                                        Bootstrap

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/64/bootstrap">
                                                        4 days ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@stelladare2"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    stella dare
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/64/bootstrap#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    1
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category other" data-type="other"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post javascript">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category javascript hidden-xs" data-type="javascript"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/javascript" class="post__category javascript hidden-xs" data-type="javascript"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/7b79b89dcd7f6a917e4118631f4c8fcb?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/43/jquery-is-dead-what-do-you-use-for-simple-web-apps-these-days">
                                                    <h4>
                                                        jQuery is dead. What do you use for simple web apps these days?

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/43/jquery-is-dead-what-do-you-use-for-simple-web-apps-these-days">
                                                        3 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@cyberp"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    cyberp
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/43/jquery-is-dead-what-do-you-use-for-simple-web-apps-these-days#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    5
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category javascript" data-type="javascript"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post javascript">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category javascript hidden-xs" data-type="javascript"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/javascript" class="post__category javascript hidden-xs" data-type="javascript"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/afe3fde40d3743ce4280a2986d986324?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/55/how-to-measure-the-execution-time-of-a-js-function">
                                                    <h4>
                                                        How to measure the execution time of a JS function?

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/55/how-to-measure-the-execution-time-of-a-js-function">
                                                        2 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@tim85"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    tim85
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/55/how-to-measure-the-execution-time-of-a-js-function#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    0
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category javascript" data-type="javascript"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post html5">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category html5 hidden-xs" data-type="html5"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/html5" class="post__category html5 hidden-xs" data-type="html5"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/fa8a1939806a5c7f45ec705e99d79191?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/53/html-email-2-coulmn-layout">
                                                    <h4>
                                                        HTML email 2-coulmn layout

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/53/html-email-2-coulmn-layout">
                                                        2 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@shanee"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    shanee
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/53/html-email-2-coulmn-layout#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    2
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category html5" data-type="html5"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="post javascript">
                                    <div class="post__container">
                                        <div class="post__header">


                                            <!-- <span class="post__category javascript hidden-xs" data-type="javascript"></span> -->
                                            <a href="https://tutorialzine.com/forum/category/javascript" class="post__category javascript hidden-xs" data-type="javascript"></a>

                                            <div class="post__left">
                                                <span class="post__author" style="background-image: url('https://www.gravatar.com/avatar/51284c791d8b723b120ce57e679edd21?s=200&amp;d=https%3A%2F%2Ftutorialzine.com%2Fimages%2Fdefault-user-icon-profile.png')"></span>
                                            </div>

                                            <div class="post__title">
                                                <a href="https://tutorialzine.com/forum/51/javascript-wordpress-like-cms">
                                                    <h4>
                                                        JavaScript WordPress-like CMS

                                                    </h4>
                                                </a>
                                            </div>

                                        </div>

                                        <div class="post__footer">
                                            <div class="post__footer-item">
                                                <div class="post__date">
                                                    <!-- <i class="fa fa-calendar" aria-hidden="true"></i> -->
                                                    <a href="https://tutorialzine.com/forum/51/javascript-wordpress-like-cms">
                                                        2 weeks ago        </a>
                                                </div>
                                            </div>

                                            <div class="post__footer-item">
                                                <span>by</span>
                                                <a href="https://tutorialzine.com/@LarsNmar"
                                                   class=""
                                                >
                                                    <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                                    LarsNmar
                                                </a>
                                            </div>

                                            <div class="post__footer-item comments">
                                                <a href="https://tutorialzine.com/forum/51/javascript-wordpress-like-cms#comments">
                                                    <i class="icon-bubbles" aria-hidden="true"></i>
                                                    0
                                                </a>
                                            </div>

                                            <div class="post__footer-item visible-xs-block">
                                                <span class="post__category javascript" data-type="javascript"></span>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                            <div class="pagination__container">
                                <div class="pagination-pages visible-xs">
                                    1 of 2
                                </div>
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    <li class="previous disabled"><span></span></li>

                                    <!-- Pagination Elements -->
                                    <!-- "Three Dots" Separator -->

                                    <!-- Array Of Links -->
                                    <li class="active"><span>1</span></li>
                                    <li><a href="http://tutorialzine.com/forum?page=2">2</a></li>

                                    <!-- Next Page Link -->
                                    <li class="next"><a href="http://tutorialzine.com/forum?page=2" rel="next"></a></li>
                                </ul>

                            </div>
                        </div>
                    </div>

                    <div class="text-center hidden-md hidden-lg">
                        <a href="https://tutorialzine.com/forum/create?type=discussion" class="btn btn-primary discussion">
                            <span>Submit discussion</span>
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </main>


    <?php include ('footer.php') ?>

</div>

<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.8.0/highlight.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

</body>
</html>
