<main id="js-page-content" role="main" class="page-content">
    <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
    <div class="row">
        <div class="col-xl-12">
            <div id="panel-1" class="panel">
                <div class="panel-hdr">
                    <h2>KELOLA DATA POBO</h2>
                    <div class="panel-toolbar">
                        <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip" data-offset="0,10" data-original-title="Collapse"></button>
                        <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip" data-offset="0,10" data-original-title="Fullscreen"></button>
                        <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10" data-original-title="Close"></button>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo anchor(site_url('pobo/create'), '<i class="fal fa-plus-square" aria-hidden="true"></i> Tambah Data', 'class="btn btn-primary btn-sm waves-effect waves-themed"'); ?></div>
                            <div class="col-md-6">
                                <form action="<?php echo site_url('pobo/index'); ?>" method="get">
                                    <div class="input-group">
                                        <div class="input-group">
                                            <?php
                                            if ($q <> '') {
                                            ?>
                                                <div class="input-group-prepend">
                                                    <a href="<?php echo site_url('pobo'); ?>" class="btn btn-danger waves-effect waves-themed">Reset</a>
                                                </div>
                                            <?php
                                            }
                                            ?>
                                            <input id="button-addon3" type="text" name="q" value="<?php echo $q; ?>" class="form-control" placeholder="Search for anything..." aria-label="Example text with two button addons" aria-describedby="button-addon3">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary waves-effect waves-themed" type="submit">Search</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-container show">
                    <div class="panel-content">

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead class="thead-themed">
                                    <tr>
                                        <th>No</th>
                                        <th>Bln</th>
                                        <th>Tahun</th>
                                        <th>Ttl Kas</th>
                                        <th>Investasi</th>
                                        <th>Pbruto</th>
                                        <th>Pnetto</th>
                                        <th>Persediaan</th>
                                        <th>Aset Lancar</th>
                                        <th>Aset Tetap</th>
                                        <th>Ttl Aset</th>
                                        <th>Kewajiban</th>
                                        <th>Ekuitas</th>
                                        <th>Pendapatan Non Pajak</th>
                                        <th>Pendapatan Usaha</th>
                                        <th>Pendapatan Operasional</th>
                                        <th>Pendapatan Hibah</th>
                                        <th>Pendapatan APBN</th>
                                        <th>Pendapatan BLU</th>
                                        <th>Beban Penyusutan</th>
                                        <th>Beban Operasional</th>
                                        <th>Beban Subsidi</th>
                                        <th>Surplus Defisit</th>
                                        <th>Realisasi 51RM</th>
                                        <th>Realisasi 52RM</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody><?php
                                        foreach ($pobo_data as $pobo) {
                                        ?>
                                        <tr>
                                            <td width="10px"><?php echo ++$start ?></td>
                                            <td><?php echo $pobo->bln ?></td>
                                            <td><?php echo $pobo->tahun ?></td>
                                            <td><?php echo $pobo->ttl_kas ?></td>
                                            <td><?php echo $pobo->investasi ?></td>
                                            <td><?php echo $pobo->pbruto ?></td>
                                            <td><?php echo $pobo->pnetto ?></td>
                                            <td><?php echo $pobo->persediaan ?></td>
                                            <td><?php echo $pobo->aset_lancar ?></td>
                                            <td><?php echo $pobo->aset_tetap ?></td>
                                            <td><?php echo $pobo->ttl_aset ?></td>
                                            <td><?php echo $pobo->kewajiban ?></td>
                                            <td><?php echo $pobo->ekuitas ?></td>
                                            <td><?php echo $pobo->pendapatan_non_pajak ?></td>
                                            <td><?php echo $pobo->pendapatan_usaha ?></td>
                                            <td><?php echo $pobo->pendapatan_operasional ?></td>
                                            <td><?php echo $pobo->pendapatan_hibah ?></td>
                                            <td><?php echo $pobo->pendapatan_APBN ?></td>
                                            <td><?php echo $pobo->pendapatan_BLU ?></td>
                                            <td><?php echo $pobo->beban_penyusutan ?></td>
                                            <td><?php echo $pobo->beban_operasional ?></td>
                                            <td><?php echo $pobo->beban_subsidi ?></td>
                                            <td><?php echo $pobo->Surplus_Defisit ?></td>
                                            <td><?php echo $pobo->realisasi_51RM ?></td>
                                            <td><?php echo $pobo->realisasi_52RM ?></td>
                                            <td style="text-align:center" width="200px">
                                                <?php
                                                echo anchor(site_url('pobo/read/' . $pobo->id), '<i class="fal fa-eye" aria-hidden="true"></i>', 'class="btn btn-info btn-xs waves-effect waves-themed"');
                                                echo '  ';
                                                echo anchor(site_url('pobo/update/' . $pobo->id), '<i class="fal fa-pencil" aria-hidden="true"></i>', 'class="btn btn-warning btn-xs waves-effect waves-themed"');
                                                echo '  ';
                                                echo
                                                    '<button type="button" class="btn btn-danger btn-xs waves-effect waves-themed" data-toggle="modal" data-target="#default-example-modal-sm' . $pobo->id . '"><i class="fal fa-trash" aria-hidden="true"></i></button>
    <div class="modal fade" id="default-example-modal-sm' . $pobo->id . '" tabindex="-1" role="dialog" aria-hidden="true">
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
                <a href="pobo/delete/' . $pobo->id . '" class="btn btn-primary">Ya, Hapus</a>
            </div>
        </div>
    </div>
</div>';
                                                ?>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>

                            <?php echo $pagination ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<script src="<?php echo base_url() ?>assets/smartadmin/js/vendors.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/smartadmin/js/app.bundle.js"></script>