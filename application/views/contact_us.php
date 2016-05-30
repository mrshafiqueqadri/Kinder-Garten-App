<?php echo $head; ?>
<title><?php echo $title; ?></title>
</head>
<body class="misc-pages-bg">
    <!--Navbar content is right here-->
    <?php echo $nav; ?>
    <!--Navbar contend ends right here-->
    <!--background section 4-->
    <div class="container-fluid zero-padding">
        <div class="jungle-simple-bg">
            <div class="container about-bg" style="padding-bottom: 100px;">
                <div class="col-md-6">
                    <h2 class="c_white">Contact us</h2>
                    <h4 class="c_white lineheight20">We’d love to hear your feedback and comments. Write to us at:</h4>
                    <h4 class="c_white lineheight20">                            
                        Tienma Limited<br>
                        20-22 Wenlock Road<br>
                        London<br>
                        N1 7GU<br>                                                        
                    </h4>
                    <h4 class="c_white margint20 lineheight20" style="margin-top: 50px;">
                        Alternatively you can email us at:<br>
                        info@bambinibee.co.uk
                    </h4>
                    <div id="result"></div>
                </div>
                <div class="col-md-6">
                    <form method="post" id="contactForm">
                        <label class="c_white">Full Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        <label class="c_white">Email ID</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email id">
                        <label class="c_white">Subject</label>
                        <input type="text" class="form-control" name="subject" placeholder="Subject">
                        <label class="c_white">Message</label>
                        <textarea class="form-control" rows="3" name="message"></textarea><br>
                        <input type="submit" name="submit" class="form-control btn btn-success">
                    </form>                    
                </div>
            </div>
        </div>
    </div>

    <!--Footer section is right here-->
    <?php echo $footer; ?>
</body>    
</html>
<script>
    $(document).ready(function () {
        $("form#contactForm").on('submit', function (form) {
            form.preventDefault();
            $.post('pages/contactForm', $('form#contactForm').serialize(), function (response) {
                $("#result").html(response);
            });
        });
    });

</script>