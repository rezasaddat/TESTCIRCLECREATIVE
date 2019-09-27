<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>StudiKasus2</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/uikit.css')?>">
</head>
<body>

    <div class="uk-padding-large">
        <form class="uk-width-large" method="post" onsubmit="processData()">
            <div class="uk-animation-slide-bottom" uk-alert id="alert_message" style="display:none"></div>
            <fieldset class="uk-fieldset">

                <legend class="uk-legend">Tipe Mobil</legend>

                <div class="uk-margin">
                    <input class="uk-input" type="text" placeholder="Nama Tipe" id="nama_tipe" value="<?=$tipe->nama_tipe?>">
                </div>

                <!-- <div class="uk-margin">
                    <select class="uk-select">
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div> -->
                <a class="uk-button uk-button-default" href="<?=base_url('index.php/Tipe')?>">Kembali</a>
                <button class="uk-button uk-button-default uk-align-right" type="submit">Simpan</button>
        </form>
    </div>
</body>
</html>

<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit-icons.js');?>"></script>

<script>
function processData() {
    event.preventDefault();
    $.ajax({
            url: '<?=base_url('index.php/Tipe/updateTipe/'.$tipe->tipe_id)?>',
            method: "POST",
            dataType: "json",
            data: {
                'nama_tipe' : $('#nama_tipe').val(),
            },
            success: function (response) {
                window.scrollTo(0, 0);
                $('#alert_message').show();
                $('#alert_message').html(response.message);
                if (response.status !== 200) {
                    $('#alert_message').removeClass("uk-alert-success").addClass("uk-alert-danger");
                } else {
                    $('#alert_message').removeClass("uk-alert-danger").addClass("uk-alert-success");
                    setTimeout(function () {
                        history.back();
                    }, 2000);
                }
            }
        });
}
</script>