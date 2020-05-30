<main id="js-page-content" role="main" class="page-content">
<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                        <h2>KELOLA DATA T_ASSESMENT_AWAL_RJJIWA</h2>
                        <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                    <div class="row">
                    <div class="col-md-12">
                    <div class="text-center">
        <?php echo anchor(site_url('t_assesment_awal_rjjiwa/create/'.$this->uri->segment(3).'/'.$this->uri->segment(4)), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                <div class="panel-container show">
                    <div class="panel-content">

                    <div class="table-responsive">
                        <table id="example" class="table table-bordered table-hover table-striped">
                            <thead class="thead-themed">
            <tr>
                <th>No</th>
		<th>IDXDAFTAR</th>
		<th>NOMR</th>
		<th>ALERGI</th>
		<th>JAMMULAI</th>
		<th>ANAMNESE</th>
		<th>KELUHAN UTAMA</th>
		<th>RIWAYAT PENYAKIT SEKARANG</th>
		<th>RIWAYAT PENYAKIT DULU SEKARANG</th>
		<th>RIWAYAT KELUARGA</th>
		<th>PEMERIKSAAN STATUS MENTAL</th>
		<th>PEMERIKSAAN PENUNJANG</th>
		<th>DIAGNOSA KERJA</th>
		<th>TERAPI</th>
		<th>KONTROL ULANG TGL</th>
		<th>RAWAT INAP</th>
		<th>RUJUK LUAR</th>
		<th>RUJUK LAINNYA</th>
		<th>TTD PASIEN</th>
		<th>TTD DOKTER</th>
		<th>ID DOKTER</th>
		<th>Action</th>
            </tr></thead>
            <tbody><?php
            $no=1;
            foreach ($datalist as $data)
            {
                ?>
                <tr>
			<td width="10px"><?php echo $no ?></td>
			<td><?php echo $data->IDXDAFTAR ?></td>
			<td><?php echo $data->NOMR ?></td>
			<td><?php echo $data->ALERGI ?></td>
			<td><?php echo $data->JAMMULAI ?></td>
			<td><?php echo $data->ANAMNESE ?></td>
			<td><?php echo $data->KELUHAN_UTAMA ?></td>
			<td><?php echo $data->RIWAYAT_PENYAKIT_SEKARANG ?></td>
			<td><?php echo $data->RIWAYAT_PENYAKIT_DULU_SEKARANG ?></td>
			<td><?php echo $data->RIWAYAT_KELUARGA ?></td>
			<td><?php echo $data->PEMERIKSAAN_STATUS_MENTAL ?></td>
			<td><?php echo $data->PEMERIKSAAN_PENUNJANG ?></td>
			<td><?php echo $data->DIAGNOSA_KERJA ?></td>
			<td><?php echo $data->TERAPI ?></td>
			<td><?php echo $data->KONTROL_ULANG_TGL ?></td>
			<td><?php echo $data->RAWAT_INAP ?></td>
			<td><?php echo $data->RUJUK_LUAR ?></td>
			<td><?php echo $data->RUJUK_LAINNYA ?></td>
			<td><?php echo $data->TTD_PASIEN ?></td>
			<td><?php echo $data->TTD_DOKTER ?></td>
			<td><?php echo $data->ID_DOKTER ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('t_assesment_awal_rjjiwa/read/'.$data->ID_ASS),'<i class="fal fa-eye" aria-hidden="true"></i>','class="btn btn-info btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo anchor(site_url('t_assesment_awal_rjjiwa/update/'.$data->NOMR.'/'.$data->IDXDAFTAR.'/'.$data->ID_ASS),'<i class="fal fa-pencil" aria-hidden="true"></i>','class="btn btn-warning btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo
    '<button type="button" class="btn btn-danger btn-xs waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm'.$data->ID_ASS.'"><i class="fal fa-trash" aria-hidden="true"></i></button>
    <div class="modal fade" id="default-example-modal-sm'.$data->ID_ASS.'" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header bg-info">
                <h5 class="modal-title">INFO!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda Yakin Ingin Menghapus?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="'.base_url().'t_assesment_awal_rjjiwa/delete/'.$data->ID_ASS.'/'.$data->NOMR.'/'.$data->IDXDAFTAR.'" class="btn btn-primary">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>';
				?>
			</td>
		</tr>
                <?php
            $no++;}
            ?>
            </tbody>
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
        $("#example").DataTable();
    });
</script>