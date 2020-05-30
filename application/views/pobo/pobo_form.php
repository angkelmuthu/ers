<main id="js-page-content" role="main" class="page-content">
	<div class="row">
		<div class="col-xl-12">
			<div id="panel-1" class="panel">
				<div class="panel-hdr">
					<h2>INPUT DATA POBO</h2>
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
									<td width='200'>Bln <?php echo form_error('bln') ?></td>
									<td>
										<!-- <input type="number" class="form-control" name="bln" id="bln" placeholder="Bln" value="<?php echo $bln; ?>" /> -->
										<div class="form-group">
											<select class="form-control" name="bln" id="bln">
												<option value="1">Januari</option>
												<option value="2">Febuari</option>
												<option value="3">Maret</option>
												<option value="4">April</option>
												<option value="5">Mei</option>
												<option value="6">Juni</option>
												<option value="7">Juli</option>
												<option value="8">Agustus</option>
												<option value="9">September</option>
												<option value="10">Oktober</option>
												<option value="11">November</option>
												<option value="12">Desember</option>
											</select>
										</div>
									</td>
								</tr>
								<tr>
									<td width='200'>Tahun <?php echo form_error('tahun') ?></td>
									<td><input type="number" class="form-control" name="tahun" id="tahun" placeholder="Tahun" value="<?php echo $tahun; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Ttl Kas <?php echo form_error('ttl_kas') ?></td>
									<td><input type="number" class="form-control" name="ttl_kas" id="ttl_kas" placeholder="Ttl Kas" value="<?php echo $ttl_kas; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Investasi <?php echo form_error('investasi') ?></td>
									<td><input type="number" class="form-control" name="investasi" id="investasi" placeholder="Investasi" value="<?php echo $investasi; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pbruto <?php echo form_error('pbruto') ?></td>
									<td><input type="number" class="form-control" name="pbruto" id="pbruto" placeholder="Pbruto" value="<?php echo $pbruto; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pnetto <?php echo form_error('pnetto') ?></td>
									<td><input type="number" class="form-control" name="pnetto" id="pnetto" placeholder="Pnetto" value="<?php echo $pnetto; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Persediaan <?php echo form_error('persediaan') ?></td>
									<td><input type="number" class="form-control" name="persediaan" id="persediaan" placeholder="Persediaan" value="<?php echo $persediaan; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Aset Lancar <?php echo form_error('aset_lancar') ?></td>
									<td><input type="number" class="form-control" name="aset_lancar" id="aset_lancar" placeholder="Aset Lancar" value="<?php echo $aset_lancar; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Aset Tetap <?php echo form_error('aset_tetap') ?></td>
									<td><input type="number" class="form-control" name="aset_tetap" id="aset_tetap" placeholder="Aset Tetap" value="<?php echo $aset_tetap; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Ttl Aset <?php echo form_error('ttl_aset') ?></td>
									<td><input type="number" class="form-control" name="ttl_aset" id="ttl_aset" placeholder="Ttl Aset" value="<?php echo $ttl_aset; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Kewajiban <?php echo form_error('kewajiban') ?></td>
									<td><input type="number" class="form-control" name="kewajiban" id="kewajiban" placeholder="Kewajiban" value="<?php echo $kewajiban; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Ekuitas <?php echo form_error('ekuitas') ?></td>
									<td><input type="number" class="form-control" name="ekuitas" id="ekuitas" placeholder="Ekuitas" value="<?php echo $ekuitas; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan Non Pajak <?php echo form_error('pendapatan_non_pajak') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_non_pajak" id="pendapatan_non_pajak" placeholder="Pendapatan Non Pajak" value="<?php echo $pendapatan_non_pajak; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan Usaha <?php echo form_error('pendapatan_usaha') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_usaha" id="pendapatan_usaha" placeholder="Pendapatan Usaha" value="<?php echo $pendapatan_usaha; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan Operasional <?php echo form_error('pendapatan_operasional') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_operasional" id="pendapatan_operasional" placeholder="Pendapatan Operasional" value="<?php echo $pendapatan_operasional; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan Hibah <?php echo form_error('pendapatan_hibah') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_hibah" id="pendapatan_hibah" placeholder="Pendapatan Hibah" value="<?php echo $pendapatan_hibah; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan APBN <?php echo form_error('pendapatan_APBN') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_APBN" id="pendapatan_APBN" placeholder="Pendapatan APBN" value="<?php echo $pendapatan_APBN; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Pendapatan BLU <?php echo form_error('pendapatan_BLU') ?></td>
									<td><input type="number" class="form-control" name="pendapatan_BLU" id="pendapatan_BLU" placeholder="Pendapatan BLU" value="<?php echo $pendapatan_BLU; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Beban Penyusutan <?php echo form_error('beban_penyusutan') ?></td>
									<td><input type="number" class="form-control" name="beban_penyusutan" id="beban_penyusutan" placeholder="Beban Penyusutan" value="<?php echo $beban_penyusutan; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Beban Operasional <?php echo form_error('beban_operasional') ?></td>
									<td><input type="number" class="form-control" name="beban_operasional" id="beban_operasional" placeholder="Beban Operasional" value="<?php echo $beban_operasional; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Beban Subsidi <?php echo form_error('beban_subsidi') ?></td>
									<td><input type="number" class="form-control" name="beban_subsidi" id="beban_subsidi" placeholder="Beban Subsidi" value="<?php echo $beban_subsidi; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Surplus Defisit <?php echo form_error('Surplus_Defisit') ?></td>
									<td><input type="number" class="form-control" name="Surplus_Defisit" id="Surplus_Defisit" placeholder="Surplus Defisit" value="<?php echo $Surplus_Defisit; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Realisasi 51RM <?php echo form_error('realisasi_51RM') ?></td>
									<td><input type="number" class="form-control" name="realisasi_51RM" id="realisasi_51RM" placeholder="Realisasi 51RM" value="<?php echo $realisasi_51RM; ?>" /></td>
								</tr>
								<tr>
									<td width='200'>Realisasi 52RM <?php echo form_error('realisasi_52RM') ?></td>
									<td><input type="number" class="form-control" name="realisasi_52RM" id="realisasi_52RM" placeholder="Realisasi 52RM" value="<?php echo $realisasi_52RM; ?>" /></td>
								</tr>
								<tr>
									<td></td>
									<td><input type="hidden" name="id" value="<?php echo $id; ?>" />
										<button type="submit" class="btn btn-warning waves-effect waves-themed"><i class="fal fa-save"></i> <?php echo $button ?></button>
										<a href="<?php echo site_url('pobo') ?>" class="btn btn-info waves-effect waves-themed"><i class="fal fa-sign-out"></i> Kembali</a></td>
								</tr>
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