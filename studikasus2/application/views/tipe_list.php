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
        <div class="toolbar uk-align-right uk-margin-remove">
            <div class="uk-button-group">
                <a href="<?=base_url('index.php/Dashboard')?>" class="uk-button uk-button-small uk-button-default left-radial" >Kembali</a>
                <a href="<?=base_url('index.php/Tipe/formTipe')?>" class="uk-button uk-button-small uk-button-primary left-radial" >Tambah</a>
            </div>
        </div>
        <div>
            <table class="uk-table uk-table-hover uk-table-divider uk-margin-remove" uk-scrollspy="cls: uk-animation-slide-bottom-small">
                <thead>
                    <tr>
                        
                        <th>Nama Tipe</th>
                        <th></th>

                    </tr>
                </thead>
                <tbody id="dealer-data">
                    <?php
                        foreach ($list as $key) { ?>
                            <tr>
                                <td><?=$key->nama_tipe?></td>
                                <td>
                                    <a href="<?=base_url('index.php/Tipe/editTipe/'.$key->tipe_id)?>">edit</a> /
                                    <a href="<?=base_url('index.php/Tipe/hapusTipe/'.$key->tipe_id)?>">hapus</a>
                                </td>
                            </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>

<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit.js');?>"></script>
<script rel="javascript" type="text/javascript" src="<?php echo base_url('assets/js/uikit-icons.js');?>"></script>