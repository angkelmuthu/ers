<main id="js-page-content" role="main" class="page-content">
<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                        <h2>KELOLA DATA SOAP COBA</h2>
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
        <?php echo anchor(site_url('t_soap_coba/create/'.$this->uri->segment(3).'/'.$this->uri->segment(4)), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                <div class="panel-container show">
                    <div class="panel-content">

                    <div class="frame-wrap">
                        <table id="example" class="table table-bordered table-hover table-striped">
                            <thead class="thead-themed">
            <tr>
                <th>No</th>
		<th>Idxdaftar</th>
		<th>Nomr</th>
		<th>S</th>
		<th>O</th>
		<th>A</th>
		<th>P</th>
		<th>Id Users</th>
		<th>Tgl</th>
		<th>Action</th>
            </tr></thead>
            <tbody><?php
            $no=1;
            foreach ($datalist as $data)
            {
                ?>
                <tr>
			<td width="10px"><?php echo $no ?></td>
			<td><?php echo $data->idxdaftar ?></td>
			<td><?php echo $data->nomr ?></td>
			<td><?php echo $data->s ?></td>
			<td><?php echo $data->o ?></td>
			<td><?php echo $data->a ?></td>
			<td><?php echo $data->p ?></td>
			<td><?php echo $data->id_users ?></td>
			<td><?php echo $data->tgl ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('t_soap_coba/read/'.$data->id),'<i class="fal fa-eye" aria-hidden="true"></i>','class="btn btn-info btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo anchor(site_url('t_soap_coba/update/'.$data->nomr.'/'.$data->idxdaftar.'/'.$data->id),'<i class="fal fa-pencil" aria-hidden="true"></i>','class="btn btn-warning btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo
    '<button type="button" class="btn btn-danger btn-xs waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm'.$data->id.'"><i class="fal fa-trash" aria-hidden="true"></i></button>
    <div class="modal fade" id="default-example-modal-sm'.$data->id.'" tabindex="-1" role="dialog" aria-hidden="true">
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
                <a href="'.base_url().'t_soap_coba/delete/'.$data->id.'/'.$data->nomr.'/'.$data->idxdaftar.'" class="btn btn-primary">Ya, Hapus</a>
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