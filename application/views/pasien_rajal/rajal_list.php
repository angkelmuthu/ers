<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>LIST PASIEN RAWAT JALAN</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form action="" method="get">
                            <div class="row mb-5">
                                <div class="col-md-3">
                                </div>
                                <div class="col-md-2 text-right p-2">
                                    <label>Filter Tanggal :</label>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <input class="form-control" id="example-date" type="date" name="tgl" value="<?php echo date('Y-m-d'); ?>">
                                    </div>
                                </div>
                                <div class="col-md-1 p-1">
                                    <button type="submit" class="btn btn-sm btn-primary">Cari</button>
                                </div>
                                <div class="row mb-3"></div>
                            </div>
                        </form>
                        <div class="text-center">
                            <table class="table table-bordered table-hover table-striped w-100" id="example">
                                <thead>
                                    <tr>
                                        <th width="30px">NOMR</th>
                                        <th>NAMA</th>
                                        <th>TGL LAHIR</th>
                                        <th>POLI</th>
                                        <th>DOKTER</th>
                                        <th>PEMBAYARAN</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <body>
                                    <?php foreach ($datalist as $datas) { ?>
                                        <tr>
                                            <td><?php echo $datas->NOMR ?></td>
                                            <td class="text-left"><?php echo $datas->NAMA ?></td>
                                            <td><?php echo tanggal($datas->TGLLAHIR) ?></td>
                                            <td class="text-left"><?php echo $datas->nama_poly ?></td>
                                            <td class="text-left"><?php echo $datas->NAMADOKTER ?></td>
                                            <td><?php echo $datas->carabayar ?></td>
                                            <td><a href="pasien_rajal/read/<?php echo $datas->IDXDAFTAR ?>" class="btn btn-primary btn-sm waves-effect waves-themed"><i class="fal fa-eye" aria-hidden="true"></i></a></td>
                                        </tr>
                                    <?php } ?>
                                </body>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/datagrid/datatables/datatables.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/datagrid/datatables/datatables.export.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>