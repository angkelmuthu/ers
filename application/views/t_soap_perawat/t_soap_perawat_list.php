<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>KELOLA DATA T_SOAP_PERAWAT</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="text-center">
                            <?php echo anchor(site_url('t_soap_perawat/create/' . $this->uri->segment(3) . '/' . $this->uri->segment(4)), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                        <table class="table table-bordered table-hover table-striped w-100" id="example">
                            <thead>
                                <tr>
                                    <th width="30px">No</th>
                                    <th>Idxdaftar</th>
                                    <th>Nomr</th>
                                    <th>S</th>
                                    <th>O</th>
                                    <th>A</th>
                                    <th>P</th>
                                    <th>Id Users</th>
                                    <th>Tgl</th>
                                    <th width="200px">Action</th>
                                </tr>
                            </thead>

                            <body>
                                <?php $no = 1;
                                foreach ($datalist as $data) { ?>
                                    <tr>
                                        <td><?php echo $no ?></td>
                                        <td><?php echo $data->idxdaftar ?></td>
                                        <td><?php echo $data->nomr ?></td>
                                        <td><?php echo $data->s ?></td>
                                        <td><?php echo $data->o ?></td>
                                        <td><?php echo $data->a ?></td>
                                        <td><?php echo $data->p ?></td>
                                        <td><?php echo $data->id_users ?></td>
                                        <td><?php echo $data->tgl ?></td>
                                        <td></td>
                                    </tr>
                                <?php $no++;
                                } ?>
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