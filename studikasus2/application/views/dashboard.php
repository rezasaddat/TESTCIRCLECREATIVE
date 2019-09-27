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
    <!-- menu dashboard -->
    <div class="uk-inline uk-animation-scale-up" style="height: -webkit-fill-available;width: 100%;">
        <img src="<?php echo base_url('assets/img/bg-dark.jpg')?>" alt="" style="height: -webkit-fill-available;width: 100%;">
        <div class="uk-position-center uk-overlay uk-text-center">
            
            <div class="uk-grid-match uk-child-width-expand@s uk-text-center" uk-grid>
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <a href="<?=base_url('index.php/Perusahaan')?>">
                            <div>
                                <span class="uk-text-muted">Perusahaan</span>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <a href="<?=base_url('index.php/Mobil')?>">
                            <div>
                                <span class="uk-text-muted">Mobil</span>
                            </div>
                        </a>
                    </div>
                </div>

                <div>
                    <div class="uk-card uk-card-default uk-card-body">
                        <a href="<?=base_url('index.php/Tipe')?>">
                            <div>
                                <span class="uk-text-muted">Tipe Mobil</span>
                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <div class="uk-position-bottom uk-overlay uk-text-center">
            <div class="">
                <a href="<?=base_url('index.php/Auth')?>">
                    <div>
                        <span class="uk-text-muted">Logout</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    
</body>
</html>

<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit-icons.js');?>"></script>