<?php
/**
 * Created by PhpStorm.
 * User: xiewang
 * Date: 2017/7/7
 * Time: 17:45
 */
?>

<header class="header--main animate-search">

    <div class="container-fluid">
        <nav class="nav--main">
            <div class="nav__logo">
                <a href="index.php">
                    Fourm<span>Demo</span>
                </a>
            </div>

            <ul class="nav__items nav__items--right">
                <li class="nav__item">
                    <a href="#search" class="search-trigger icon-magnifier"></a>
                </li>
                <li id="login" class="nav__item">
                    <a href="login">
                        Login
                    </a>
                </li>
                <li id="register" class="nav__item">
                    <a href="https://localhost/register">
                        <span class="btn btn-success">Register</span>
                    </a>
                </li>
            </ul>

            <ul class="nav__items nav__items--left">
                <li class="nav__item nav__item--main">
                    <a  href="https://localhost/articles" class="articles ">
                        Articles
                    </a>
                </li>
                <li class="nav__item nav__item--main">
                    <a href="https://localhost/forum" class="posts active">
                        Forum
                    </a>
                </li>
            </ul>


        </nav> <!-- .nav--main -->
    </div>


    <a href="#0" class="nav-trigger icon-menu"></a>

    <div id="search" class="main-search">
        <div class="container-fluid">
            <form id="search-form-top" class="form__search" action="https://localhost/search" method="GET">

                <input type="search" name="query" placeholder="Search..." value="" autocomplete="off" required>

                <!-- <select name="type" type="hidden">
                  <option value="all" selected>All</option>
                </select> -->

            </form>

            <div class="search-suggestions">

            </div>
            <a href="#0" class="close text-replace">Close Form</a>
        </div>
    </div> <!-- .main-search -->
</header>
