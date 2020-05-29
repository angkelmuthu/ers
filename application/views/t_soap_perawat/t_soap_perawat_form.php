<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>INPUT DATA T_SOAP_PERAWAT</h2>
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


	    <tr><td width='200'>Idxdaftar <?php echo form_error('idxdaftar') ?></td><td><input type="text" class="form-control" name="idxdaftar" id="idxdaftar" placeholder="Idxdaftar" value="<?php echo $this->uri->segment(4) ?>" readonly/></td></tr>
	    <tr><td width='200'>Nomr <?php echo form_error('nomr') ?></td><td><input type="text" class="form-control" name="nomr" id="nomr" placeholder="Nomr" value="<?php echo $this->uri->segment(3) ?>" readonly/></td></tr>
	    <tr><td width='200'>S <?php echo form_error('s') ?></td><td> <textarea class="form-control" non_pks="3" name="s" id="s" placeholder="S"><?php echo $s; ?></textarea></td></tr>
	    <tr><td width='200'>O <?php echo form_error('o') ?></td><td> <textarea class="form-control" non_pks="3" name="o" id="o" placeholder="O"><?php echo $o; ?></textarea></td></tr>
	    <tr><td width='200'>A <?php echo form_error('a') ?></td><td><input type="number" class="form-control" name="a" id="a" placeholder="A" value="<?php echo $a; ?>" /></td></tr>
	    <tr><td width='200'>P <?php echo form_error('p') ?></td><td> <textarea class="form-control" non_pks="3" name="p" id="p" placeholder="P"><?php echo $p; ?></textarea></td></tr>
	    <tr><td width='200'>Id Users <?php echo form_error('id_users') ?></td><td><input type="text" class="form-control" name="id_users" id="id_users" placeholder="Id Users" value="<?php echo $this->session->userdata('id_users') ?>" readonly/></td></tr>
	    <tr><td width='200'>Tgl <?php echo form_error('tgl') ?></td><td><input type="text" class="form-control" name="tgl" id="tgl" placeholder="Tgl" value="<?php echo date('Y-m-d H:s:i'); ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="id" value="<?php echo $id; ?>" /> 
	    <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button> 
	    <a href="<?php echo site_url('t_soap_perawat') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td></tr>
	</table></form>        </div>
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