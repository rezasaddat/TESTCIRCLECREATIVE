<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudiKasus2</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.css')?>">
</head>
<body class="uk-height-1-1">

    <div class="uk-inline uk-animation-scale-up" style="height: -webkit-fill-available;width: 100%;">

        <img src="<?php echo base_url('assets/img/bg1.jpeg')?>" alt="">

        <div class="uk-position-center uk-overlay uk-text-center">
            
            <form class="" method="post" onsubmit="processData()">

                <div class="uk-margin " id="fusername">
                    <div class="uk-inline uk-width-1-1" >
                        <span class="uk-form-icon" uk-icon="icon: user" ></span>
                        <input class="uk-input" name="username" id="username" type="text" placeholder="Username...">
                    </div>
                </div>

                <div class="uk-margin " id="fpassword">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock" ></span>
                        <input class="uk-input" name="password" id="password" type="password" placeholder="Password...">
                    </div>
                </div>

            </form>
        </div>

        <div class="uk-position-medium-small uk-position-bottom-center uk-overlay uk-text-center" style="color: grey;">
            <a href="<?php echo base_url()?>" uk-icon="icon: close" style="text-decoration:none; color:grey; margin:20px; height: 20px; width: 20px; background: unset;position: relative;border:1px solid grey; border-radius:100%;"></a> <br>
            Copyright © 2019
        </div>
    </div>
</body>
</html>

<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit-icons.js');?>"></script>
<script>
$(document).ready(function() {
    $('#username').focus();

    $('#password').keyup(function(event) {
        if (event.keyCode === 13) {
        event.preventDefault();
            $.ajax({
                url: '<?=base_url('index.php/Auth/Login')?>',
                method: "POST",
                dataType: "json",
                data: {
                    'username' : $('#username').val(),
                    'password' : $('#password').val(),
                },
                success: function (response) {
                    if (response == true) {
                        window.location = '<?=base_url('index.php/Dashboard')?>';   
                    }else{
                        window.location.reload();
                    }
                    
                }
            });
        }
    });
});
</script>