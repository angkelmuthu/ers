<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>Test Read</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <table class="table table-striped">
                            <?php foreach ($datalist as $data) { ?>
                                <tr>
                                    <td>NOMR</td>
                                    <td><?php echo $data->NOMR; ?></td>
                                    <td>NAMA PASIEN</td>
                                    <td><?php echo $data->NAMA; ?></td>
                                </tr>
                                <tr>
                                    <td>TANGGAL LAHIR</td>
                                    <td><?php echo tanggal($data->TGLLAHIR); ?></td>
                                    <td>NAMA DOKTER</td>
                                    <td><?php echo $data->NAMADOKTER; ?></td>
                                </tr>
                            <?php } ?>
                        </table>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-xl-12">
            <?php foreach ($menuemr as $menu) {
                foreach ($datalist as $data) {
            ?>
                    <a href="<?php echo base_url() . $menu->url ?>/list/<?php echo $data->NOMR ?>/<?php echo $data->IDXDAFTAR ?>" class="btn btn-success"><?php echo $menu->title ?></a>
            <?php }
            } ?>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>