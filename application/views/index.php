<?php echo $head; ?>
<title><?php echo $title; ?></title>
</head>
<body class="home-bg">
    <!--Navbar content is right here-->
    <?php echo $nav; ?>
    <!--Navbar contend ends right here-->
    <!--Clouding div is right here-->
    <div class="container-fluid zero-padding">
        <div id="scene">
            <img class="cloud sml cloud1" src="<?php echo $url; ?>assets/images/cloud-with-back1.png"/>
            <img class="cloud med cloud2" src="<?php echo $url; ?>assets/images/cloud-with-back2.png"/>
            <img class="cloud lrg cloud3" src="<?php echo $url; ?>assets/images/cloud-with-back3.png"/>
            <img class="cloud lrg2 cloud4" src="<?php echo $url; ?>assets/images/cloud-with-back4.png"/>
            <img class="cloud sml1 cloud4" src="<?php echo $url; ?>assets/images/cloud-with-back4.png"/>
        </div>
    </div>

    <!--background section 4-->
    <div class="container-fluid zero-padding">
        <div class="jungle"></div>
    </div>

    <!--Footer section is right here-->
    <?php echo $footer; ?>
</body>    
</html>
