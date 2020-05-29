<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>INPUT DATA ASSESMENT AWAL PENYAKIT JIWA (RAWAT JALAN)</h2>
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
	    <tr><td width='200'>ALERGI <?php echo form_error('ALERGI') ?></td><td> <textarea class="form-control" non_pks="3" name="ALERGI" id="ALERGI" placeholder="ALERGI"><?php echo $ALERGI; ?></textarea></td></tr>
	    <tr><td width='200'>JAMMULAI <?php echo form_error('JAMMULAI') ?></td><td><input type="datetime-local" class="form-control"  id="example-date" name="JAMMULAI" id="example-datetime-local-input" value="<?php echo $JAMMULAI; ?>" /></td></tr>
	    <tr><td width='200'>ANAMNESE <?php echo form_error('ANAMNESE') ?></td><td> <textarea class="form-control" non_pks="3" name="ANAMNESE" id="ANAMNESE" placeholder="ANAMNESE"><?php echo $ANAMNESE; ?></textarea></td></tr>
	    <tr><td width='200'>KELUHAN UTAMA <?php echo form_error('KELUHAN_UTAMA') ?></td><td> <textarea class="form-control" non_pks="3" name="KELUHAN_UTAMA" id="KELUHAN_UTAMA" placeholder="KELUHAN UTAMA"><?php echo $KELUHAN_UTAMA; ?></textarea></td></tr>
	    <tr><td width='200'>RIWAYAT PENYAKIT SEKARANG <?php echo form_error('RIWAYAT_PENYAKIT_SEKARANG') ?></td><td> <textarea class="form-control" non_pks="3" name="RIWAYAT_PENYAKIT_SEKARANG" id="RIWAYAT_PENYAKIT_SEKARANG" placeholder="RIWAYAT PENYAKIT SEKARANG"><?php echo $RIWAYAT_PENYAKIT_SEKARANG; ?></textarea></td></tr>
	    <tr><td width='200'>RIWAYAT PENYAKIT DULU SEKARANG <?php echo form_error('RIWAYAT_PENYAKIT_DULU_SEKARANG') ?></td><td> <textarea class="form-control" non_pks="3" name="RIWAYAT_PENYAKIT_DULU_SEKARANG" id="RIWAYAT_PENYAKIT_DULU_SEKARANG" placeholder="RIWAYAT PENYAKIT DULU SEKARANG"><?php echo $RIWAYAT_PENYAKIT_DULU_SEKARANG; ?></textarea></td></tr>
	    <tr><td width='200'>RIWAYAT KELUARGA <?php echo form_error('RIWAYAT KELUARGA') ?></td><td> <textarea class="form-control" non_pks="3" name="RIWAYAT KELUARGA" id="RIWAYAT KELUARGA" placeholder="RIWAYAT KELUARGA"><?php echo $RIWAYAT KELUARGA; ?></textarea></td></tr>
	    <tr><td width='200'>PEMERIKSAAN STATUS MENTAL <?php echo form_error('PEMERIKSAAN_STATUS_MENTAL') ?></td><td> <textarea class="form-control" non_pks="3" name="PEMERIKSAAN_STATUS_MENTAL" id="PEMERIKSAAN_STATUS_MENTAL" placeholder="PEMERIKSAAN STATUS MENTAL"><?php echo $PEMERIKSAAN_STATUS_MENTAL; ?></textarea></td></tr>
	    <tr><td width='200'>PEMERIKSAAN PENUNJANG <?php echo form_error('PEMERIKSAAN PENUNJANG') ?></td><td> <textarea class="form-control" non_pks="3" name="PEMERIKSAAN PENUNJANG" id="PEMERIKSAAN PENUNJANG" placeholder="PEMERIKSAAN PENUNJANG"><?php echo $PEMERIKSAAN PENUNJANG; ?></textarea></td></tr>
	    <tr><td width='200'>DIAGNOSA KERJA <?php echo form_error('DIAGNOSA_KERJA') ?></td><td> <textarea class="form-control" non_pks="3" name="DIAGNOSA_KERJA" id="DIAGNOSA_KERJA" placeholder="DIAGNOSA KERJA"><?php echo $DIAGNOSA_KERJA; ?></textarea></td></tr>
	    <tr><td width='200'>TERAPI <?php echo form_error('TERAPI') ?></td><td> <textarea class="form-control" non_pks="3" name="TERAPI" id="TERAPI" placeholder="TERAPI"><?php echo $TERAPI; ?></textarea></td></tr>
	    <tr><td width='200'>KONTROL ULANG TGL <?php echo form_error('KONTROL_ULANG_TGL') ?></td><td><input type="datetime-local" class="form-control"  id="example-date" name="KONTROL_ULANG_TGL" id="example-datetime-local-input" value="<?php echo $KONTROL_ULANG_TGL; ?>" /></td></tr>
	    <tr><td width='200'>RAWAT INAP <?php echo form_error('RAWAT_INAP') ?></td><td><?php echo cmb_dinamis('RAWAT_INAP', 'm_ruang', 'ruang', 'no') ?></td></tr>
	    <tr><td width='200'>RUJUK LUAR <?php echo form_error('RUJUK_LUAR') ?></td><td><input type="text" class="form-control" name="RUJUK_LUAR" id="RUJUK_LUAR" placeholder="RUJUK LUAR" value="<?php echo $RUJUK_LUAR; ?>" /></td></tr>
	    <tr><td width='200'>RUJUK LAINNYA <?php echo form_error('RUJUK_LAINNYA') ?></td><td><input type="text" class="form-control" name="RUJUK_LAINNYA" id="RUJUK_LAINNYA" placeholder="RUJUK LAINNYA" value="<?php echo $RUJUK_LAINNYA; ?>" /></td></tr>
	    <tr><td width='200'>TTD PASIEN <?php echo form_error('TTD_PASIEN') ?></td><td><input type="text" class="form-control" name="TTD_PASIEN" id="TTD_PASIEN" placeholder="TTD PASIEN" value="<?php echo $TTD_PASIEN; ?>" /></td></tr>
	    <tr><td width='200'>TTD DOKTER <?php echo form_error('TTD_DOKTER') ?></td><td><input type="text" class="form-control" name="TTD_DOKTER" id="TTD_DOKTER" placeholder="TTD DOKTER" value="<?php echo $TTD_DOKTER; ?>" /></td></tr>
	    <tr><td width='200'>ID DOKTER <?php echo form_error('ID_DOKTER') ?></td><td><input type="text" class="form-control" name="ID_DOKTER" id="ID_DOKTER" placeholder="ID DOKTER" value="<?php echo $this->session->userdata('id_users') ?>" readonly/></td></tr>
	    <tr><td></td><td><input type="hidden" name="" value="<?php echo $; ?>" /> 
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