<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>Pobo Read</h2>
                <div class="panel-toolbar">
                    <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                    <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                    <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                </div>
            </div>
            <div class="panel-container show">
                <div class="panel-content">
        <table class="table table-striped">
	    <tr><td>Bln</td><td><?php echo $bln; ?></td></tr>
	    <tr><td>Tahun</td><td><?php echo $tahun; ?></td></tr>
	    <tr><td>Ttl Kas</td><td><?php echo $ttl_kas; ?></td></tr>
	    <tr><td>Investasi</td><td><?php echo $investasi; ?></td></tr>
	    <tr><td>Pbruto</td><td><?php echo $pbruto; ?></td></tr>
	    <tr><td>Pnetto</td><td><?php echo $pnetto; ?></td></tr>
	    <tr><td>Persediaan</td><td><?php echo $persediaan; ?></td></tr>
	    <tr><td>Aset Lancar</td><td><?php echo $aset_lancar; ?></td></tr>
	    <tr><td>Aset Tetap</td><td><?php echo $aset_tetap; ?></td></tr>
	    <tr><td>Ttl Aset</td><td><?php echo $ttl_aset; ?></td></tr>
	    <tr><td>Kewajiban</td><td><?php echo $kewajiban; ?></td></tr>
	    <tr><td>Ekuitas</td><td><?php echo $ekuitas; ?></td></tr>
	    <tr><td>Pendapatan Non Pajak</td><td><?php echo $pendapatan_non_pajak; ?></td></tr>
	    <tr><td>Pendapatan Usaha</td><td><?php echo $pendapatan_usaha; ?></td></tr>
	    <tr><td>Pendapatan Operasional</td><td><?php echo $pendapatan_operasional; ?></td></tr>
	    <tr><td>Pendapatan Hibah</td><td><?php echo $pendapatan_hibah; ?></td></tr>
	    <tr><td>Pendapatan APBN</td><td><?php echo $pendapatan_APBN; ?></td></tr>
	    <tr><td>Pendapatan BLU</td><td><?php echo $pendapatan_BLU; ?></td></tr>
	    <tr><td>Beban Penyusutan</td><td><?php echo $beban_penyusutan; ?></td></tr>
	    <tr><td>Beban Operasional</td><td><?php echo $beban_operasional; ?></td></tr>
	    <tr><td>Beban Subsidi</td><td><?php echo $beban_subsidi; ?></td></tr>
	    <tr><td>Surplus Defisit</td><td><?php echo $Surplus_Defisit; ?></td></tr>
	    <tr><td>Realisasi 51RM</td><td><?php echo $realisasi_51RM; ?></td></tr>
	    <tr><td>Realisasi 52RM</td><td><?php echo $realisasi_52RM; ?></td></tr>
	    <tr><td></td><td><a href="<?php echo site_url('pobo') ?>" class="btn btn-primary waves-effect waves-themed">Kembali</a></td></tr>
	</table>
</div>
</div>

            </div>
        </div>
    </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>