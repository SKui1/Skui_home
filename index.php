﻿<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="mcPage/styles.css">
</head>
<body>
    <div id="bar"></div>
    <div class="wrapper-container">
        <div class="wrapper-masthead">
            <div class="container">
                <header class="masthead clearfix">
                    <div class="site-info">
                        <h1 class="site-name">Sky Stone</h1>
                    </div>
                    <nav>
                        <a href="/">Home</a>
                        <a href="/mcPage">MC Servers</a>
                    </nav>
                </header>
            </div>
        </div>

        <div class="wrapper-main">
            <div id="main" role="main" class="container">
                <div class="posts">

                    <article style="background-color: rgb(195, 177, 225); padding: 1em; " class="post">


                        <div style="display: grid; grid-template-columns: repeat(3, minmax(0, 1fr)); text-align: center; grid-gap: 1rem; margin:15px 0">
                                <h1 style="margin-top: 0;">What is this?</h1>
                                <div class="post-elsewhere">
                                    <p style="text-align: center;">
                                        Hello This is a basic homepage, hopefully at somepoint this will updated to add cool things that i have discovered or it will be forgoten about ¯\_(ツ)_/¯
                                    </p>
				    <p style="text-align: center;">
                                        Cool stuff will hopefull be below this section or in one of the other pages, so please explore and enjoy.
                                    </p>
                                </div>
                        </div>
                    </article>
                </div>
            </div>
        </div>
        <div class="wrapper-footer">
            <div class="container">
                <footer class="footer">
                    <p>Sky Stone <?php $year = date('Y'); echo $year?> -- Built on top of work from Josh Brunning :) 
		    <a href="https://www.linkedin.com/in/sky-stone-3a8994233/">
		    <img src="/mcPage/assets/LinkedIn.png" style="width:30px;height:30px;" align="right">
		    </a></p>
                </footer>
            </div>
        </div>
    </div>
</body>
</html>