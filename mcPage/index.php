﻿<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div id="bar"></div>
    <div class="wrapper-container">
        <div class="wrapper-masthead">
            <div class="container">
                <header class="masthead clearfix">
                    <div class="site-info">
                        <h1 class="site-name">Minecraft Servers</h1>
                    </div>
			<nav>
                        <a href="/">Home</a>
                        <a href="/mcPage">MC Servers</a>
                    </nav>
                </header>
            </div>
        </div>
	<div class="wrapper-container">
        	<div class="wrapper-main">
            		<div id="main" role="main" class="container">
                		<div class="posts">
					<iframe src="server_status_modded.php" height="318" width=100% style="border:none;" id="Iframe Modded"></iframe>
					<iframe src="server_status_vanilla.php" height="318" width=100% style="border:none;" id="Iframe Vanilla"></iframe>
					<script>
        					window.setInterval(function() {reloadIFrame()}, 300000);
						function reloadIFrame() {
							console.log('reloading..');
							document.getElementById('Iframe Modded').contentWindow.location.reload();
							document.getElementById('Iframe Vanilla').contentWindow.location.reload();
						}
    					</script>
        			</div>
            		</div>
        	</div>
    	</div>
        <div class="wrapper-footer">
            <div class="container">
                <footer class="footer">
                    <p>Sky Stone <?php $year = date('Y'); echo $year?> -- Built on top of work from Josh Brunning :)</p>
                </footer>
            </div>
        </div>
    </div>


</body>
</html>