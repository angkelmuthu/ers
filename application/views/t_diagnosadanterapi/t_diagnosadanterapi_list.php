<main id="js-page-content" role="main" class="page-content">
<?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                        <h2>KELOLA DATA T_DIAGNOSADANTERAPI</h2>
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
        <?php echo anchor(site_url('t_diagnosadanterapi/create/'.$this->uri->segment(3).'/'.$this->uri->segment(4)), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                <div class="panel-container show">
                    <div class="panel-content">

                    <div class="frame-wrap">
                        <table id="example" class="table table-bordered table-hover table-striped display nowrap" style="width:100%">
                            <thead class="thead-themed">
            <tr>
                <th>No</th>
		<th>IDXDAFTAR</th>
		<th>NOMR</th>
		<th>TANGGAL</th>
		<th>TEKANAN DARAH</th>
		<th>GOLONGAN DARAH</th>
		<th>TINGGI BADAN</th>
		<th>BERAT BADAN</th>
		<th>DIAGNOSA</th>
		<th>TERAPI</th>
		<th>ANAMNESA</th>
		<th>KDPOLY</th>
		<th>KDDOKTER</th>
		<th>KDTUJUANRUJUK</th>
		<th>NIP</th>
		<th>ICD CODE</th>
		<th>ICD CODE2</th>
		<th>ICD CODE3</th>
		<th>ICD CODE4</th>
		<th>ICD CODE5</th>
		<th>ICD CODE6</th>
		<th>ICD CODE7</th>
		<th>ICD CODE8</th>
		<th>ICD CODE9</th>
		<th>ICD CODE10</th>
		<th>ICD CODE11</th>
		<th>ICD CODE12</th>
		<th>ICD CODE13</th>
		<th>ICD CODE14</th>
		<th>ICD CODE15</th>
		<th>ICD CODE16</th>
		<th>ICD CODE17</th>
		<th>ICD CODE18</th>
		<th>ICD CODE19</th>
		<th>ICD CODE20</th>
		<th>ICD CODE21</th>
		<th>ICD CODE22</th>
		<th>ICD CODE23</th>
		<th>ICD CODE24</th>
		<th>ICD CODE25</th>
		<th>ICD CODE26</th>
		<th>ICD CODE27</th>
		<th>ICD CODE28</th>
		<th>ICD CODE29</th>
		<th>ICD CODE30</th>
		<th>KUNJUNGAN BL</th>
		<th>KASUS BL</th>
		<th>ICDCM</th>
		<th>ICD 9</th>
		<th>ICD 92</th>
		<th>ICD 93</th>
		<th>ICD 94</th>
		<th>ICD 95</th>
		<th>ICD 96</th>
		<th>ICD 97</th>
		<th>ICD 98</th>
		<th>ICD 99</th>
		<th>ICD 910</th>
		<th>ICD 911</th>
		<th>ICD 912</th>
		<th>ICD 913</th>
		<th>ICD 914</th>
		<th>ICD 915</th>
		<th>ICD 916</th>
		<th>ICD 917</th>
		<th>ICD 918</th>
		<th>ICD 919</th>
		<th>ICD 920</th>
		<th>ICD 921</th>
		<th>ICD 922</th>
		<th>ICD 923</th>
		<th>ICD 924</th>
		<th>ICD 925</th>
		<th>ICD 926</th>
		<th>ICD 927</th>
		<th>ICD 928</th>
		<th>ICD 929</th>
		<th>ICD 930</th>
		<th>KLB</th>
		<th>BEDAH</th>
		<th>JENIS</th>
		<th>SUBJECT</th>
		<th>OBJECT</th>
		<th>ACTION</th>
		<th>REKOMENDASI</th>
		<th>SUBJECT P</th>
		<th>OBJECT P</th>
		<th>ACTION P</th>
		<th>REKOMENDASI P</th>
		<th>Diastole</th>
		<th>Nadi</th>
		<th>Napas</th>
		<th>Suhu</th>
		<th>Idperawat</th>
		<th>ALERGI</th>
		<th>Jam Input</th>
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
			<td><?php echo $data->TANGGAL ?></td>
			<td><?php echo $data->TEKANAN_DARAH ?></td>
			<td><?php echo $data->GOLONGAN_DARAH ?></td>
			<td><?php echo $data->TINGGI_BADAN ?></td>
			<td><?php echo $data->BERAT_BADAN ?></td>
			<td><?php echo $data->DIAGNOSA ?></td>
			<td><?php echo $data->TERAPI ?></td>
			<td><?php echo $data->ANAMNESA ?></td>
			<td><?php echo $data->KDPOLY ?></td>
			<td><?php echo $data->KDDOKTER ?></td>
			<td><?php echo $data->KDTUJUANRUJUK ?></td>
			<td><?php echo $data->NIP ?></td>
			<td><?php echo $data->ICD_CODE ?></td>
			<td><?php echo $data->ICD_CODE2 ?></td>
			<td><?php echo $data->ICD_CODE3 ?></td>
			<td><?php echo $data->ICD_CODE4 ?></td>
			<td><?php echo $data->ICD_CODE5 ?></td>
			<td><?php echo $data->ICD_CODE6 ?></td>
			<td><?php echo $data->ICD_CODE7 ?></td>
			<td><?php echo $data->ICD_CODE8 ?></td>
			<td><?php echo $data->ICD_CODE9 ?></td>
			<td><?php echo $data->ICD_CODE10 ?></td>
			<td><?php echo $data->ICD_CODE11 ?></td>
			<td><?php echo $data->ICD_CODE12 ?></td>
			<td><?php echo $data->ICD_CODE13 ?></td>
			<td><?php echo $data->ICD_CODE14 ?></td>
			<td><?php echo $data->ICD_CODE15 ?></td>
			<td><?php echo $data->ICD_CODE16 ?></td>
			<td><?php echo $data->ICD_CODE17 ?></td>
			<td><?php echo $data->ICD_CODE18 ?></td>
			<td><?php echo $data->ICD_CODE19 ?></td>
			<td><?php echo $data->ICD_CODE20 ?></td>
			<td><?php echo $data->ICD_CODE21 ?></td>
			<td><?php echo $data->ICD_CODE22 ?></td>
			<td><?php echo $data->ICD_CODE23 ?></td>
			<td><?php echo $data->ICD_CODE24 ?></td>
			<td><?php echo $data->ICD_CODE25 ?></td>
			<td><?php echo $data->ICD_CODE26 ?></td>
			<td><?php echo $data->ICD_CODE27 ?></td>
			<td><?php echo $data->ICD_CODE28 ?></td>
			<td><?php echo $data->ICD_CODE29 ?></td>
			<td><?php echo $data->ICD_CODE30 ?></td>
			<td><?php echo $data->KUNJUNGAN_BL ?></td>
			<td><?php echo $data->KASUS_BL ?></td>
			<td><?php echo $data->ICDCM ?></td>
			<td><?php echo $data->ICD_9 ?></td>
			<td><?php echo $data->ICD_92 ?></td>
			<td><?php echo $data->ICD_93 ?></td>
			<td><?php echo $data->ICD_94 ?></td>
			<td><?php echo $data->ICD_95 ?></td>
			<td><?php echo $data->ICD_96 ?></td>
			<td><?php echo $data->ICD_97 ?></td>
			<td><?php echo $data->ICD_98 ?></td>
			<td><?php echo $data->ICD_99 ?></td>
			<td><?php echo $data->ICD_910 ?></td>
			<td><?php echo $data->ICD_911 ?></td>
			<td><?php echo $data->ICD_912 ?></td>
			<td><?php echo $data->ICD_913 ?></td>
			<td><?php echo $data->ICD_914 ?></td>
			<td><?php echo $data->ICD_915 ?></td>
			<td><?php echo $data->ICD_916 ?></td>
			<td><?php echo $data->ICD_917 ?></td>
			<td><?php echo $data->ICD_918 ?></td>
			<td><?php echo $data->ICD_919 ?></td>
			<td><?php echo $data->ICD_920 ?></td>
			<td><?php echo $data->ICD_921 ?></td>
			<td><?php echo $data->ICD_922 ?></td>
			<td><?php echo $data->ICD_923 ?></td>
			<td><?php echo $data->ICD_924 ?></td>
			<td><?php echo $data->ICD_925 ?></td>
			<td><?php echo $data->ICD_926 ?></td>
			<td><?php echo $data->ICD_927 ?></td>
			<td><?php echo $data->ICD_928 ?></td>
			<td><?php echo $data->ICD_929 ?></td>
			<td><?php echo $data->ICD_930 ?></td>
			<td><?php echo $data->KLB ?></td>
			<td><?php echo $data->BEDAH ?></td>
			<td><?php echo $data->JENIS ?></td>
			<td><?php echo $data->SUBJECT ?></td>
			<td><?php echo $data->OBJECT ?></td>
			<td><?php echo $data->ACTION ?></td>
			<td><?php echo $data->REKOMENDASI ?></td>
			<td><?php echo $data->SUBJECT_P ?></td>
			<td><?php echo $data->OBJECT_P ?></td>
			<td><?php echo $data->ACTION_P ?></td>
			<td><?php echo $data->REKOMENDASI_P ?></td>
			<td><?php echo $data->diastole ?></td>
			<td><?php echo $data->nadi ?></td>
			<td><?php echo $data->napas ?></td>
			<td><?php echo $data->suhu ?></td>
			<td><?php echo $data->idperawat ?></td>
			<td><?php echo $data->ALERGI ?></td>
			<td><?php echo $data->jam_input ?></td>
			<td style="text-align:center" width="200px">
				<?php 
				echo anchor(site_url('t_diagnosadanterapi/read/'.$data->IDXTERAPI),'<i class="fal fa-eye" aria-hidden="true"></i>','class="btn btn-info btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo anchor(site_url('t_diagnosadanterapi/update/'.$data->NOMR.'/'.$data->IDXDAFTAR.'/'.$data->IDXTERAPI),'<i class="fal fa-pencil" aria-hidden="true"></i>','class="btn btn-warning btn-xs waves-effect waves-themed"'); 
				echo '  '; 
				echo
    '<button type="button" class="btn btn-danger btn-xs waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm'.$data->IDXTERAPI.'"><i class="fal fa-trash" aria-hidden="true"></i></button>
    <div class="modal fade" id="default-example-modal-sm'.$data->IDXTERAPI.'" tabindex="-1" role="dialog" aria-hidden="true">
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
                <a href="'.base_url().'t_diagnosadanterapi/delete/'.$data->IDXTERAPI.'/'.$data->NOMR.'/'.$data->IDXDAFTAR.'" class="btn btn-primary">Ya, Hapus</a>
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
    $('#example').DataTable( {
        "sScrollX": '100%'
    } );
} );
</script>