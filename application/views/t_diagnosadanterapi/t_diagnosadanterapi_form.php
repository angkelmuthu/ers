<main id="js-page-content" role="main" class="page-content">
<div class="row">
    <div class="col-xl-12">
        <div id="panel-1" class="panel">
            <div class="panel-hdr">
                <h2>INPUT DATA T_DIAGNOSADANTERAPI</h2>
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
	    <tr><td width='200'>TANGGAL <?php echo form_error('TANGGAL') ?></td><td><input type="datetime-local" class="form-control"  id="example-date" name="TANGGAL" id="example-datetime-local-input" value="<?php echo $TANGGAL; ?>" /></td></tr>
	    <tr><td width='200'>TEKANAN DARAH <?php echo form_error('TEKANAN_DARAH') ?></td><td><input type="text" class="form-control" name="TEKANAN_DARAH" id="TEKANAN_DARAH" placeholder="TEKANAN DARAH" value="<?php echo $TEKANAN_DARAH; ?>" /></td></tr>
	    <tr><td width='200'>GOLONGAN DARAH <?php echo form_error('GOLONGAN_DARAH') ?></td><td><input type="text" class="form-control" name="GOLONGAN_DARAH" id="GOLONGAN_DARAH" placeholder="GOLONGAN DARAH" value="<?php echo $GOLONGAN_DARAH; ?>" /></td></tr>
	    <tr><td width='200'>TINGGI BADAN <?php echo form_error('TINGGI_BADAN') ?></td><td><input type="text" class="form-control" name="TINGGI_BADAN" id="TINGGI_BADAN" placeholder="TINGGI BADAN" value="<?php echo $TINGGI_BADAN; ?>" /></td></tr>
	    <tr><td width='200'>BERAT BADAN <?php echo form_error('BERAT_BADAN') ?></td><td><input type="text" class="form-control" name="BERAT_BADAN" id="BERAT_BADAN" placeholder="BERAT BADAN" value="<?php echo $BERAT_BADAN; ?>" /></td></tr>
	    <tr><td width='200'>DIAGNOSA <?php echo form_error('DIAGNOSA') ?></td><td><input type="text" class="form-control" name="DIAGNOSA" id="DIAGNOSA" placeholder="DIAGNOSA" value="<?php echo $DIAGNOSA; ?>" /></td></tr>
	    <tr><td width='200'>TERAPI <?php echo form_error('TERAPI') ?></td><td><input type="text" class="form-control" name="TERAPI" id="TERAPI" placeholder="TERAPI" value="<?php echo $TERAPI; ?>" /></td></tr>
	    <tr><td width='200'>ANAMNESA <?php echo form_error('ANAMNESA') ?></td><td><input type="text" class="form-control" name="ANAMNESA" id="ANAMNESA" placeholder="ANAMNESA" value="<?php echo $ANAMNESA; ?>" /></td></tr>
	    <tr><td width='200'>KDPOLY <?php echo form_error('KDPOLY') ?></td><td><input type="number" class="form-control" name="KDPOLY" id="KDPOLY" placeholder="KDPOLY" value="<?php echo $KDPOLY; ?>" /></td></tr>
	    <tr><td width='200'>KDDOKTER <?php echo form_error('KDDOKTER') ?></td><td><input type="number" class="form-control" name="KDDOKTER" id="KDDOKTER" placeholder="KDDOKTER" value="<?php echo $KDDOKTER; ?>" /></td></tr>
	    <tr><td width='200'>KDTUJUANRUJUK <?php echo form_error('KDTUJUANRUJUK') ?></td><td><input type="number" class="form-control" name="KDTUJUANRUJUK" id="KDTUJUANRUJUK" placeholder="KDTUJUANRUJUK" value="<?php echo $KDTUJUANRUJUK; ?>" /></td></tr>
	    <tr><td width='200'>NIP <?php echo form_error('NIP') ?></td><td><input type="text" class="form-control" name="NIP" id="NIP" placeholder="NIP" value="<?php echo $NIP; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE <?php echo form_error('ICD_CODE') ?></td><td><input type="text" class="form-control" name="ICD_CODE" id="ICD_CODE" placeholder="ICD CODE" value="<?php echo $ICD_CODE; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE2 <?php echo form_error('ICD_CODE2') ?></td><td><input type="text" class="form-control" name="ICD_CODE2" id="ICD_CODE2" placeholder="ICD CODE2" value="<?php echo $ICD_CODE2; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE3 <?php echo form_error('ICD_CODE3') ?></td><td><input type="text" class="form-control" name="ICD_CODE3" id="ICD_CODE3" placeholder="ICD CODE3" value="<?php echo $ICD_CODE3; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE4 <?php echo form_error('ICD_CODE4') ?></td><td><input type="text" class="form-control" name="ICD_CODE4" id="ICD_CODE4" placeholder="ICD CODE4" value="<?php echo $ICD_CODE4; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE5 <?php echo form_error('ICD_CODE5') ?></td><td><input type="text" class="form-control" name="ICD_CODE5" id="ICD_CODE5" placeholder="ICD CODE5" value="<?php echo $ICD_CODE5; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE6 <?php echo form_error('ICD_CODE6') ?></td><td><input type="text" class="form-control" name="ICD_CODE6" id="ICD_CODE6" placeholder="ICD CODE6" value="<?php echo $ICD_CODE6; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE7 <?php echo form_error('ICD_CODE7') ?></td><td><input type="text" class="form-control" name="ICD_CODE7" id="ICD_CODE7" placeholder="ICD CODE7" value="<?php echo $ICD_CODE7; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE8 <?php echo form_error('ICD_CODE8') ?></td><td><input type="text" class="form-control" name="ICD_CODE8" id="ICD_CODE8" placeholder="ICD CODE8" value="<?php echo $ICD_CODE8; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE9 <?php echo form_error('ICD_CODE9') ?></td><td><input type="text" class="form-control" name="ICD_CODE9" id="ICD_CODE9" placeholder="ICD CODE9" value="<?php echo $ICD_CODE9; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE10 <?php echo form_error('ICD_CODE10') ?></td><td><input type="text" class="form-control" name="ICD_CODE10" id="ICD_CODE10" placeholder="ICD CODE10" value="<?php echo $ICD_CODE10; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE11 <?php echo form_error('ICD_CODE11') ?></td><td><input type="text" class="form-control" name="ICD_CODE11" id="ICD_CODE11" placeholder="ICD CODE11" value="<?php echo $ICD_CODE11; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE12 <?php echo form_error('ICD_CODE12') ?></td><td><input type="text" class="form-control" name="ICD_CODE12" id="ICD_CODE12" placeholder="ICD CODE12" value="<?php echo $ICD_CODE12; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE13 <?php echo form_error('ICD_CODE13') ?></td><td><input type="text" class="form-control" name="ICD_CODE13" id="ICD_CODE13" placeholder="ICD CODE13" value="<?php echo $ICD_CODE13; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE14 <?php echo form_error('ICD_CODE14') ?></td><td><input type="text" class="form-control" name="ICD_CODE14" id="ICD_CODE14" placeholder="ICD CODE14" value="<?php echo $ICD_CODE14; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE15 <?php echo form_error('ICD_CODE15') ?></td><td><input type="text" class="form-control" name="ICD_CODE15" id="ICD_CODE15" placeholder="ICD CODE15" value="<?php echo $ICD_CODE15; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE16 <?php echo form_error('ICD_CODE16') ?></td><td><input type="text" class="form-control" name="ICD_CODE16" id="ICD_CODE16" placeholder="ICD CODE16" value="<?php echo $ICD_CODE16; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE17 <?php echo form_error('ICD_CODE17') ?></td><td><input type="text" class="form-control" name="ICD_CODE17" id="ICD_CODE17" placeholder="ICD CODE17" value="<?php echo $ICD_CODE17; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE18 <?php echo form_error('ICD_CODE18') ?></td><td><input type="text" class="form-control" name="ICD_CODE18" id="ICD_CODE18" placeholder="ICD CODE18" value="<?php echo $ICD_CODE18; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE19 <?php echo form_error('ICD_CODE19') ?></td><td><input type="text" class="form-control" name="ICD_CODE19" id="ICD_CODE19" placeholder="ICD CODE19" value="<?php echo $ICD_CODE19; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE20 <?php echo form_error('ICD_CODE20') ?></td><td><input type="text" class="form-control" name="ICD_CODE20" id="ICD_CODE20" placeholder="ICD CODE20" value="<?php echo $ICD_CODE20; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE21 <?php echo form_error('ICD_CODE21') ?></td><td><input type="text" class="form-control" name="ICD_CODE21" id="ICD_CODE21" placeholder="ICD CODE21" value="<?php echo $ICD_CODE21; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE22 <?php echo form_error('ICD_CODE22') ?></td><td><input type="text" class="form-control" name="ICD_CODE22" id="ICD_CODE22" placeholder="ICD CODE22" value="<?php echo $ICD_CODE22; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE23 <?php echo form_error('ICD_CODE23') ?></td><td><input type="text" class="form-control" name="ICD_CODE23" id="ICD_CODE23" placeholder="ICD CODE23" value="<?php echo $ICD_CODE23; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE24 <?php echo form_error('ICD_CODE24') ?></td><td><input type="text" class="form-control" name="ICD_CODE24" id="ICD_CODE24" placeholder="ICD CODE24" value="<?php echo $ICD_CODE24; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE25 <?php echo form_error('ICD_CODE25') ?></td><td><input type="text" class="form-control" name="ICD_CODE25" id="ICD_CODE25" placeholder="ICD CODE25" value="<?php echo $ICD_CODE25; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE26 <?php echo form_error('ICD_CODE26') ?></td><td><input type="text" class="form-control" name="ICD_CODE26" id="ICD_CODE26" placeholder="ICD CODE26" value="<?php echo $ICD_CODE26; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE27 <?php echo form_error('ICD_CODE27') ?></td><td><input type="text" class="form-control" name="ICD_CODE27" id="ICD_CODE27" placeholder="ICD CODE27" value="<?php echo $ICD_CODE27; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE28 <?php echo form_error('ICD_CODE28') ?></td><td><input type="text" class="form-control" name="ICD_CODE28" id="ICD_CODE28" placeholder="ICD CODE28" value="<?php echo $ICD_CODE28; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE29 <?php echo form_error('ICD_CODE29') ?></td><td><input type="text" class="form-control" name="ICD_CODE29" id="ICD_CODE29" placeholder="ICD CODE29" value="<?php echo $ICD_CODE29; ?>" /></td></tr>
	    <tr><td width='200'>ICD CODE30 <?php echo form_error('ICD_CODE30') ?></td><td><input type="text" class="form-control" name="ICD_CODE30" id="ICD_CODE30" placeholder="ICD CODE30" value="<?php echo $ICD_CODE30; ?>" /></td></tr>
	    <tr><td width='200'>KUNJUNGAN BL <?php echo form_error('KUNJUNGAN_BL') ?></td><td><input type="text" class="form-control" name="KUNJUNGAN_BL" id="KUNJUNGAN_BL" placeholder="KUNJUNGAN BL" value="<?php echo $KUNJUNGAN_BL; ?>" /></td></tr>
	    <tr><td width='200'>KASUS BL <?php echo form_error('KASUS_BL') ?></td><td><input type="text" class="form-control" name="KASUS_BL" id="KASUS_BL" placeholder="KASUS BL" value="<?php echo $KASUS_BL; ?>" /></td></tr>
	    <tr><td width='200'>ICDCM <?php echo form_error('ICDCM') ?></td><td><input type="text" class="form-control" name="ICDCM" id="ICDCM" placeholder="ICDCM" value="<?php echo $ICDCM; ?>" /></td></tr>
	    <tr><td width='200'>ICD 9 <?php echo form_error('ICD_9') ?></td><td><input type="text" class="form-control" name="ICD_9" id="ICD_9" placeholder="ICD 9" value="<?php echo $ICD_9; ?>" /></td></tr>
	    <tr><td width='200'>ICD 92 <?php echo form_error('ICD_92') ?></td><td><input type="text" class="form-control" name="ICD_92" id="ICD_92" placeholder="ICD 92" value="<?php echo $ICD_92; ?>" /></td></tr>
	    <tr><td width='200'>ICD 93 <?php echo form_error('ICD_93') ?></td><td><input type="text" class="form-control" name="ICD_93" id="ICD_93" placeholder="ICD 93" value="<?php echo $ICD_93; ?>" /></td></tr>
	    <tr><td width='200'>ICD 94 <?php echo form_error('ICD_94') ?></td><td><input type="text" class="form-control" name="ICD_94" id="ICD_94" placeholder="ICD 94" value="<?php echo $ICD_94; ?>" /></td></tr>
	    <tr><td width='200'>ICD 95 <?php echo form_error('ICD_95') ?></td><td><input type="text" class="form-control" name="ICD_95" id="ICD_95" placeholder="ICD 95" value="<?php echo $ICD_95; ?>" /></td></tr>
	    <tr><td width='200'>ICD 96 <?php echo form_error('ICD_96') ?></td><td><input type="text" class="form-control" name="ICD_96" id="ICD_96" placeholder="ICD 96" value="<?php echo $ICD_96; ?>" /></td></tr>
	    <tr><td width='200'>ICD 97 <?php echo form_error('ICD_97') ?></td><td><input type="text" class="form-control" name="ICD_97" id="ICD_97" placeholder="ICD 97" value="<?php echo $ICD_97; ?>" /></td></tr>
	    <tr><td width='200'>ICD 98 <?php echo form_error('ICD_98') ?></td><td><input type="text" class="form-control" name="ICD_98" id="ICD_98" placeholder="ICD 98" value="<?php echo $ICD_98; ?>" /></td></tr>
	    <tr><td width='200'>ICD 99 <?php echo form_error('ICD_99') ?></td><td><input type="text" class="form-control" name="ICD_99" id="ICD_99" placeholder="ICD 99" value="<?php echo $ICD_99; ?>" /></td></tr>
	    <tr><td width='200'>ICD 910 <?php echo form_error('ICD_910') ?></td><td><input type="text" class="form-control" name="ICD_910" id="ICD_910" placeholder="ICD 910" value="<?php echo $ICD_910; ?>" /></td></tr>
	    <tr><td width='200'>ICD 911 <?php echo form_error('ICD_911') ?></td><td><input type="text" class="form-control" name="ICD_911" id="ICD_911" placeholder="ICD 911" value="<?php echo $ICD_911; ?>" /></td></tr>
	    <tr><td width='200'>ICD 912 <?php echo form_error('ICD_912') ?></td><td><input type="text" class="form-control" name="ICD_912" id="ICD_912" placeholder="ICD 912" value="<?php echo $ICD_912; ?>" /></td></tr>
	    <tr><td width='200'>ICD 913 <?php echo form_error('ICD_913') ?></td><td><input type="text" class="form-control" name="ICD_913" id="ICD_913" placeholder="ICD 913" value="<?php echo $ICD_913; ?>" /></td></tr>
	    <tr><td width='200'>ICD 914 <?php echo form_error('ICD_914') ?></td><td><input type="text" class="form-control" name="ICD_914" id="ICD_914" placeholder="ICD 914" value="<?php echo $ICD_914; ?>" /></td></tr>
	    <tr><td width='200'>ICD 915 <?php echo form_error('ICD_915') ?></td><td><input type="text" class="form-control" name="ICD_915" id="ICD_915" placeholder="ICD 915" value="<?php echo $ICD_915; ?>" /></td></tr>
	    <tr><td width='200'>ICD 916 <?php echo form_error('ICD_916') ?></td><td><input type="text" class="form-control" name="ICD_916" id="ICD_916" placeholder="ICD 916" value="<?php echo $ICD_916; ?>" /></td></tr>
	    <tr><td width='200'>ICD 917 <?php echo form_error('ICD_917') ?></td><td><input type="text" class="form-control" name="ICD_917" id="ICD_917" placeholder="ICD 917" value="<?php echo $ICD_917; ?>" /></td></tr>
	    <tr><td width='200'>ICD 918 <?php echo form_error('ICD_918') ?></td><td><input type="text" class="form-control" name="ICD_918" id="ICD_918" placeholder="ICD 918" value="<?php echo $ICD_918; ?>" /></td></tr>
	    <tr><td width='200'>ICD 919 <?php echo form_error('ICD_919') ?></td><td><input type="text" class="form-control" name="ICD_919" id="ICD_919" placeholder="ICD 919" value="<?php echo $ICD_919; ?>" /></td></tr>
	    <tr><td width='200'>ICD 920 <?php echo form_error('ICD_920') ?></td><td><input type="text" class="form-control" name="ICD_920" id="ICD_920" placeholder="ICD 920" value="<?php echo $ICD_920; ?>" /></td></tr>
	    <tr><td width='200'>ICD 921 <?php echo form_error('ICD_921') ?></td><td><input type="text" class="form-control" name="ICD_921" id="ICD_921" placeholder="ICD 921" value="<?php echo $ICD_921; ?>" /></td></tr>
	    <tr><td width='200'>ICD 922 <?php echo form_error('ICD_922') ?></td><td><input type="text" class="form-control" name="ICD_922" id="ICD_922" placeholder="ICD 922" value="<?php echo $ICD_922; ?>" /></td></tr>
	    <tr><td width='200'>ICD 923 <?php echo form_error('ICD_923') ?></td><td><input type="text" class="form-control" name="ICD_923" id="ICD_923" placeholder="ICD 923" value="<?php echo $ICD_923; ?>" /></td></tr>
	    <tr><td width='200'>ICD 924 <?php echo form_error('ICD_924') ?></td><td><input type="text" class="form-control" name="ICD_924" id="ICD_924" placeholder="ICD 924" value="<?php echo $ICD_924; ?>" /></td></tr>
	    <tr><td width='200'>ICD 925 <?php echo form_error('ICD_925') ?></td><td><input type="text" class="form-control" name="ICD_925" id="ICD_925" placeholder="ICD 925" value="<?php echo $ICD_925; ?>" /></td></tr>
	    <tr><td width='200'>ICD 926 <?php echo form_error('ICD_926') ?></td><td><input type="text" class="form-control" name="ICD_926" id="ICD_926" placeholder="ICD 926" value="<?php echo $ICD_926; ?>" /></td></tr>
	    <tr><td width='200'>ICD 927 <?php echo form_error('ICD_927') ?></td><td><input type="text" class="form-control" name="ICD_927" id="ICD_927" placeholder="ICD 927" value="<?php echo $ICD_927; ?>" /></td></tr>
	    <tr><td width='200'>ICD 928 <?php echo form_error('ICD_928') ?></td><td><input type="text" class="form-control" name="ICD_928" id="ICD_928" placeholder="ICD 928" value="<?php echo $ICD_928; ?>" /></td></tr>
	    <tr><td width='200'>ICD 929 <?php echo form_error('ICD_929') ?></td><td><input type="text" class="form-control" name="ICD_929" id="ICD_929" placeholder="ICD 929" value="<?php echo $ICD_929; ?>" /></td></tr>
	    <tr><td width='200'>ICD 930 <?php echo form_error('ICD_930') ?></td><td><input type="text" class="form-control" name="ICD_930" id="ICD_930" placeholder="ICD 930" value="<?php echo $ICD_930; ?>" /></td></tr>
	    <tr><td width='200'>KLB <?php echo form_error('KLB') ?></td><td><input type="text" class="form-control" name="KLB" id="KLB" placeholder="KLB" value="<?php echo $KLB; ?>" /></td></tr>
	    <tr><td width='200'>BEDAH <?php echo form_error('BEDAH') ?></td><td><input type="text" class="form-control" name="BEDAH" id="BEDAH" placeholder="BEDAH" value="<?php echo $BEDAH; ?>" /></td></tr>
	    <tr><td width='200'>JENIS <?php echo form_error('JENIS') ?></td><td><input type="text" class="form-control" name="JENIS" id="JENIS" placeholder="JENIS" value="<?php echo $JENIS; ?>" /></td></tr>
	    <tr><td width='200'>SUBJECT <?php echo form_error('SUBJECT') ?></td><td><input type="text" class="form-control" name="SUBJECT" id="SUBJECT" placeholder="SUBJECT" value="<?php echo $SUBJECT; ?>" /></td></tr>
	    <tr><td width='200'>OBJECT <?php echo form_error('OBJECT') ?></td><td><input type="text" class="form-control" name="OBJECT" id="OBJECT" placeholder="OBJECT" value="<?php echo $OBJECT; ?>" /></td></tr>
	    <tr><td width='200'>ACTION <?php echo form_error('ACTION') ?></td><td><input type="text" class="form-control" name="ACTION" id="ACTION" placeholder="ACTION" value="<?php echo $ACTION; ?>" /></td></tr>
	    <tr><td width='200'>REKOMENDASI <?php echo form_error('REKOMENDASI') ?></td><td><input type="text" class="form-control" name="REKOMENDASI" id="REKOMENDASI" placeholder="REKOMENDASI" value="<?php echo $REKOMENDASI; ?>" /></td></tr>
	    <tr><td width='200'>SUBJECT P <?php echo form_error('SUBJECT_P') ?></td><td><input type="text" class="form-control" name="SUBJECT_P" id="SUBJECT_P" placeholder="SUBJECT P" value="<?php echo $SUBJECT_P; ?>" /></td></tr>
	    <tr><td width='200'>OBJECT P <?php echo form_error('OBJECT_P') ?></td><td><input type="text" class="form-control" name="OBJECT_P" id="OBJECT_P" placeholder="OBJECT P" value="<?php echo $OBJECT_P; ?>" /></td></tr>
	    <tr><td width='200'>ACTION P <?php echo form_error('ACTION_P') ?></td><td><input type="text" class="form-control" name="ACTION_P" id="ACTION_P" placeholder="ACTION P" value="<?php echo $ACTION_P; ?>" /></td></tr>
	    <tr><td width='200'>REKOMENDASI P <?php echo form_error('REKOMENDASI_P') ?></td><td><input type="text" class="form-control" name="REKOMENDASI_P" id="REKOMENDASI_P" placeholder="REKOMENDASI P" value="<?php echo $REKOMENDASI_P; ?>" /></td></tr>
	    <tr><td width='200'>Diastole <?php echo form_error('diastole') ?></td><td><input type="text" class="form-control" name="diastole" id="diastole" placeholder="Diastole" value="<?php echo $diastole; ?>" /></td></tr>
	    <tr><td width='200'>Nadi <?php echo form_error('nadi') ?></td><td><input type="text" class="form-control" name="nadi" id="nadi" placeholder="Nadi" value="<?php echo $nadi; ?>" /></td></tr>
	    <tr><td width='200'>Napas <?php echo form_error('napas') ?></td><td><input type="text" class="form-control" name="napas" id="napas" placeholder="Napas" value="<?php echo $napas; ?>" /></td></tr>
	    <tr><td width='200'>Suhu <?php echo form_error('suhu') ?></td><td><input type="text" class="form-control" name="suhu" id="suhu" placeholder="Suhu" value="<?php echo $suhu; ?>" /></td></tr>
	    <tr><td width='200'>Idperawat <?php echo form_error('idperawat') ?></td><td><input type="text" class="form-control" name="idperawat" id="idperawat" placeholder="Idperawat" value="<?php echo $idperawat; ?>" /></td></tr>
	    <tr><td width='200'>ALERGI <?php echo form_error('ALERGI') ?></td><td><input type="text" class="form-control" name="ALERGI" id="ALERGI" placeholder="ALERGI" value="<?php echo $ALERGI; ?>" /></td></tr>
	    <tr><td width='200'>Jam Input <?php echo form_error('jam_input') ?></td><td><input type="datetime-local" class="form-control"  id="example-date" name="jam_input" id="example-datetime-local-input" value="<?php echo $jam_input; ?>" /></td></tr>
	    <tr><td></td><td><input type="hidden" name="IDXTERAPI" value="<?php echo $IDXTERAPI; ?>" /> 
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