<main id="js-page-content" role="main" class="page-content">
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>INPUT DATA T_SOAP_TEST</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <form action="<?php echo $action; ?>" method="post">

                            <table class='table table-striped'>


                                <tr>
                                    <td width='200'>Idxdaftar <?php echo form_error('idxdaftar') ?></td>
                                    <td><input type="text" class="form-control" name="idxdaftar" id="idxdaftar" placeholder="Idxdaftar" value="<?php echo $this->uri->segment(4) ?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Nomr <?php echo form_error('nomr') ?></td>
                                    <td><input type="text" class="form-control" name="nomr" id="nomr" placeholder="Nomr" value="<?php echo $this->uri->segment(3) ?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td width='200'>S <?php echo form_error('s') ?></td>
                                    <td><input type="text" class="form-control" name="s" id="s" placeholder="S" value="<?php echo $s; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>O <?php echo form_error('o') ?></td>
                                    <td><input type="text" class="form-control" name="o" id="o" placeholder="O" value="<?php echo $o; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>A <?php echo form_error('a') ?></td>
                                    <td><input type="text" class="form-control" name="a" id="a" placeholder="A" value="<?php echo $a; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>P <?php echo form_error('p') ?></td>
                                    <td><input type="text" class="form-control" name="p" id="p" placeholder="P" value="<?php echo $p; ?>" /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Id Users <?php echo form_error('id_users') ?></td>
                                    <td><input type="text" class="form-control" name="id_users" id="id_users" placeholder="Id Users" value="<?php echo $this->session->userdata('id_users') ?>" readonly /></td>
                                </tr>
                                <tr>
                                    <td width='200'>Tgl <?php echo form_error('tgl') ?></td>
                                    <td><input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo date('Y-m-d H:s:i'); ?>" /></td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><input type="hidden" name="id" value="<?php echo $id; ?>" />
                                        <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
                            </table>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/select2/select2.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/formplugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/kostum.js"></script>