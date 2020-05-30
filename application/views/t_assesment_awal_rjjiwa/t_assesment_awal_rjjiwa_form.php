<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>INPUT DATA T_ASSESMENT_AWAL_RJJIWA</h2>
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


	    <tr><td width='200'>IDXDAFTAR <?php echo form_error('IDXDAFTAR') ?></td><td><input type="text" class="form-control" name="IDXDAFTAR" id="IDXDAFTAR" placeholder="IDXDAFTAR" value="<?php echo $this->uri->segment(4) ?>" readonly/></td></tr>
	    <tr><td width='200'>NOMR <?php echo form_error('NOMR') ?></td><td><input type="text" class="form-control" name="NOMR" id="NOMR" placeholder="NOMR" value="<?php echo $this->uri->segment(3) ?>" readonly/></td></tr>
	    <tr><td width='200'>ALERGI <?php echo form_error('ALERGI') ?></td><td><input type="text" class="form-control" name="ALERGI" id="ALERGI" placeholder="ALERGI" value="<?php echo $ALERGI; ?>" /></td></tr>
	    <tr><td width='200'>JAMMULAI <?php echo form_error('JAMMULAI') ?></td><td><input type="text" class="form-control" name="JAMMULAI" id="JAMMULAI" placeholder="JAMMULAI" value="<?php echo $JAMMULAI; ?>" /></td></tr>
	    <tr><td width='200'>ANAMNESE <?php echo form_error('ANAMNESE') ?></td><td><input type="text" class="form-control" name="ANAMNESE" id="ANAMNESE" placeholder="ANAMNESE" value="<?php echo $ANAMNESE; ?>" /></td></tr>
	    <tr><td width='200'>KELUHAN UTAMA <?php echo form_error('KELUHAN_UTAMA') ?></td><td><input type="text" class="form-control" name="KELUHAN_UTAMA" id="KELUHAN_UTAMA" placeholder="KELUHAN UTAMA" value="<?php echo $KELUHAN_UTAMA; ?>" /></td></tr>
	    <tr><td width='200'>RIWAYAT PENYAKIT SEKARANG <?php echo form_error('RIWAYAT_PENYAKIT_SEKARANG') ?></td><td><input type="text" class="form-control" name="RIWAYAT_PENYAKIT_SEKARANG" id="RIWAYAT_PENYAKIT_SEKARANG" placeholder="RIWAYAT PENYAKIT SEKARANG" value="<?php echo $RIWAYAT_PENYAKIT_SEKARANG; ?>" /></td></tr>
	    <tr><td width='200'>RIWAYAT PENYAKIT DULU SEKARANG <?php echo form_error('RIWAYAT_PENYAKIT_DULU_SEKARANG') ?></td><td><input type="text" class="form-control" name="RIWAYAT_PENYAKIT_DULU_SEKARANG" id="RIWAYAT_PENYAKIT_DULU_SEKARANG" placeholder="RIWAYAT PENYAKIT DULU SEKARANG" value="<?php echo $RIWAYAT_PENYAKIT_DULU_SEKARANG; ?>" /></td></tr>
	    <tr><td width='200'>RIWAYAT KELUARGA <?php echo form_error('RIWAYAT_KELUARGA') ?></td><td><input type="text" class="form-control" name="RIWAYAT_KELUARGA" id="RIWAYAT_KELUARGA" placeholder="RIWAYAT KELUARGA" value="<?php echo $RIWAYAT_KELUARGA; ?>" /></td></tr>
	    <tr><td width='200'>PEMERIKSAAN STATUS MENTAL <?php echo form_error('PEMERIKSAAN_STATUS_MENTAL') ?></td><td><input type="text" class="form-control" name="PEMERIKSAAN_STATUS_MENTAL" id="PEMERIKSAAN_STATUS_MENTAL" placeholder="PEMERIKSAAN STATUS MENTAL" value="<?php echo $PEMERIKSAAN_STATUS_MENTAL; ?>" /></td></tr>
	    <tr><td width='200'>PEMERIKSAAN PENUNJANG <?php echo form_error('PEMERIKSAAN_PENUNJANG') ?></td><td><input type="text" class="form-control" name="PEMERIKSAAN_PENUNJANG" id="PEMERIKSAAN_PENUNJANG" placeholder="PEMERIKSAAN PENUNJANG" value="<?php echo $PEMERIKSAAN_PENUNJANG; ?>" /></td></tr>
	    <tr><td width='200'>DIAGNOSA KERJA <?php echo form_error('DIAGNOSA_KERJA') ?></td><td><input type="text" class="form-control" name="DIAGNOSA_KERJA" id="DIAGNOSA_KERJA" placeholder="DIAGNOSA KERJA" value="<?php echo $DIAGNOSA_KERJA; ?>" /></td></tr>
	    <tr><td width='200'>TERAPI <?php echo form_error('TERAPI') ?></td><td><input type="text" class="form-control" name="TERAPI" id="TERAPI" placeholder="TERAPI" value="<?php echo $TERAPI; ?>" /></td></tr>
	    <tr><td width='200'>KONTROL ULANG TGL <?php echo form_error('KONTROL_ULANG_TGL') ?></td><td><input type="text" class="form-control" name="KONTROL_ULANG_TGL" id="KONTROL_ULANG_TGL" placeholder="KONTROL ULANG TGL" value="<?php echo $KONTROL_ULANG_TGL; ?>" /></td></tr>
	    <tr><td width='200'>RAWAT INAP <?php echo form_error('RAWAT_INAP') ?></td><td><input type="text" class="form-control" name="RAWAT_INAP" id="RAWAT_INAP" placeholder="RAWAT INAP" value="<?php echo $RAWAT_INAP; ?>" /></td></tr>
	    <tr><td width='200'>RUJUK LUAR <?php echo form_error('RUJUK_LUAR') ?></td><td><input type="text" class="form-control" name="RUJUK_LUAR" id="RUJUK_LUAR" placeholder="RUJUK LUAR" value="<?php echo $RUJUK_LUAR; ?>" /></td></tr>
	    <tr><td width='200'>RUJUK LAINNYA <?php echo form_error('RUJUK_LAINNYA') ?></td><td><input type="text" class="form-control" name="RUJUK_LAINNYA" id="RUJUK_LAINNYA" placeholder="RUJUK LAINNYA" value="<?php echo $RUJUK_LAINNYA; ?>" /></td></tr>
	    <tr><td width='200'>TTD PASIEN <?php echo form_error('TTD_PASIEN') ?></td><td><input type="text" class="form-control" name="TTD_PASIEN" id="TTD_PASIEN" placeholder="TTD PASIEN" value="<?php echo $TTD_PASIEN; ?>" /></td></tr>
	    <tr><td width='200'>TTD DOKTER <?php echo form_error('TTD_DOKTER') ?></td><td><input type="text" class="form-control" name="TTD_DOKTER" id="TTD_DOKTER" placeholder="TTD DOKTER" value="<?php echo $TTD_DOKTER; ?>" /></td></tr>
	    <tr><td width='200'>ID DOKTER <?php echo form_error('ID_DOKTER') ?></td><td><input type="text" class="form-control" name="ID_DOKTER" id="ID_DOKTER" placeholder="ID DOKTER" value="<?php echo $ID_DOKTER; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="ID_ASS" value="<?php echo $ID_ASS; ?>" /> 
	    <button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button> 
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