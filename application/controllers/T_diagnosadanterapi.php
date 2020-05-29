<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_diagnosadanterapi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('T_diagnosadanterapi_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/t_diagnosadanterapi/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/t_diagnosadanterapi/index/';
            $config['first_url'] = base_url() . 'index.php/t_diagnosadanterapi/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->T_diagnosadanterapi_model->total_rows($q);
        $t_diagnosadanterapi = $this->T_diagnosadanterapi_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            't_diagnosadanterapi_data' => $t_diagnosadanterapi,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','t_diagnosadanterapi/t_diagnosadanterapi_list', $data);
    }

    public function read($id)
    {
        $row = $this->T_diagnosadanterapi_model->get_by_id($id);
        if ($row) {
            $data = array(
		'IDXTERAPI' => $row->IDXTERAPI,
		'IDXDAFTAR' => $row->IDXDAFTAR,
		'NOMR' => $row->NOMR,
		'TANGGAL' => $row->TANGGAL,
		'TEKANAN_DARAH' => $row->TEKANAN_DARAH,
		'GOLONGAN_DARAH' => $row->GOLONGAN_DARAH,
		'TINGGI_BADAN' => $row->TINGGI_BADAN,
		'BERAT_BADAN' => $row->BERAT_BADAN,
		'DIAGNOSA' => $row->DIAGNOSA,
		'TERAPI' => $row->TERAPI,
		'ANAMNESA' => $row->ANAMNESA,
		'KDPOLY' => $row->KDPOLY,
		'KDDOKTER' => $row->KDDOKTER,
		'KDTUJUANRUJUK' => $row->KDTUJUANRUJUK,
		'NIP' => $row->NIP,
		'ICD_CODE' => $row->ICD_CODE,
		'ICD_CODE2' => $row->ICD_CODE2,
		'ICD_CODE3' => $row->ICD_CODE3,
		'ICD_CODE4' => $row->ICD_CODE4,
		'ICD_CODE5' => $row->ICD_CODE5,
		'ICD_CODE6' => $row->ICD_CODE6,
		'ICD_CODE7' => $row->ICD_CODE7,
		'ICD_CODE8' => $row->ICD_CODE8,
		'ICD_CODE9' => $row->ICD_CODE9,
		'ICD_CODE10' => $row->ICD_CODE10,
		'ICD_CODE11' => $row->ICD_CODE11,
		'ICD_CODE12' => $row->ICD_CODE12,
		'ICD_CODE13' => $row->ICD_CODE13,
		'ICD_CODE14' => $row->ICD_CODE14,
		'ICD_CODE15' => $row->ICD_CODE15,
		'ICD_CODE16' => $row->ICD_CODE16,
		'ICD_CODE17' => $row->ICD_CODE17,
		'ICD_CODE18' => $row->ICD_CODE18,
		'ICD_CODE19' => $row->ICD_CODE19,
		'ICD_CODE20' => $row->ICD_CODE20,
		'ICD_CODE21' => $row->ICD_CODE21,
		'ICD_CODE22' => $row->ICD_CODE22,
		'ICD_CODE23' => $row->ICD_CODE23,
		'ICD_CODE24' => $row->ICD_CODE24,
		'ICD_CODE25' => $row->ICD_CODE25,
		'ICD_CODE26' => $row->ICD_CODE26,
		'ICD_CODE27' => $row->ICD_CODE27,
		'ICD_CODE28' => $row->ICD_CODE28,
		'ICD_CODE29' => $row->ICD_CODE29,
		'ICD_CODE30' => $row->ICD_CODE30,
		'KUNJUNGAN_BL' => $row->KUNJUNGAN_BL,
		'KASUS_BL' => $row->KASUS_BL,
		'ICDCM' => $row->ICDCM,
		'ICD_9' => $row->ICD_9,
		'ICD_92' => $row->ICD_92,
		'ICD_93' => $row->ICD_93,
		'ICD_94' => $row->ICD_94,
		'ICD_95' => $row->ICD_95,
		'ICD_96' => $row->ICD_96,
		'ICD_97' => $row->ICD_97,
		'ICD_98' => $row->ICD_98,
		'ICD_99' => $row->ICD_99,
		'ICD_910' => $row->ICD_910,
		'ICD_911' => $row->ICD_911,
		'ICD_912' => $row->ICD_912,
		'ICD_913' => $row->ICD_913,
		'ICD_914' => $row->ICD_914,
		'ICD_915' => $row->ICD_915,
		'ICD_916' => $row->ICD_916,
		'ICD_917' => $row->ICD_917,
		'ICD_918' => $row->ICD_918,
		'ICD_919' => $row->ICD_919,
		'ICD_920' => $row->ICD_920,
		'ICD_921' => $row->ICD_921,
		'ICD_922' => $row->ICD_922,
		'ICD_923' => $row->ICD_923,
		'ICD_924' => $row->ICD_924,
		'ICD_925' => $row->ICD_925,
		'ICD_926' => $row->ICD_926,
		'ICD_927' => $row->ICD_927,
		'ICD_928' => $row->ICD_928,
		'ICD_929' => $row->ICD_929,
		'ICD_930' => $row->ICD_930,
		'KLB' => $row->KLB,
		'BEDAH' => $row->BEDAH,
		'JENIS' => $row->JENIS,
		'SUBJECT' => $row->SUBJECT,
		'OBJECT' => $row->OBJECT,
		'ACTION' => $row->ACTION,
		'REKOMENDASI' => $row->REKOMENDASI,
		'SUBJECT_P' => $row->SUBJECT_P,
		'OBJECT_P' => $row->OBJECT_P,
		'ACTION_P' => $row->ACTION_P,
		'REKOMENDASI_P' => $row->REKOMENDASI_P,
		'diastole' => $row->diastole,
		'nadi' => $row->nadi,
		'napas' => $row->napas,
		'suhu' => $row->suhu,
		'idperawat' => $row->idperawat,
		'ALERGI' => $row->ALERGI,
		'jam_input' => $row->jam_input,
	    );
            $this->template->load('template','t_diagnosadanterapi/t_diagnosadanterapi_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_diagnosadanterapi'));
        }
    }

    public function list($nomr,$idxdaftar)
    {
        $data = array(
            'datalist' => $this->T_diagnosadanterapi_model->get_datalist($nomr,$idxdaftar),
        );
        $this->template->load('template', 't_diagnosadanterapi/t_diagnosadanterapi_list', $data);
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_diagnosadanterapi/create_action'),
	    'IDXTERAPI' => set_value('IDXTERAPI'),
	    'IDXDAFTAR' => set_value('IDXDAFTAR'),
	    'NOMR' => set_value('NOMR'),
	    'TANGGAL' => set_value('TANGGAL'),
	    'TEKANAN_DARAH' => set_value('TEKANAN_DARAH'),
	    'GOLONGAN_DARAH' => set_value('GOLONGAN_DARAH'),
	    'TINGGI_BADAN' => set_value('TINGGI_BADAN'),
	    'BERAT_BADAN' => set_value('BERAT_BADAN'),
	    'DIAGNOSA' => set_value('DIAGNOSA'),
	    'TERAPI' => set_value('TERAPI'),
	    'ANAMNESA' => set_value('ANAMNESA'),
	    'KDPOLY' => set_value('KDPOLY'),
	    'KDDOKTER' => set_value('KDDOKTER'),
	    'KDTUJUANRUJUK' => set_value('KDTUJUANRUJUK'),
	    'NIP' => set_value('NIP'),
	    'ICD_CODE' => set_value('ICD_CODE'),
	    'ICD_CODE2' => set_value('ICD_CODE2'),
	    'ICD_CODE3' => set_value('ICD_CODE3'),
	    'ICD_CODE4' => set_value('ICD_CODE4'),
	    'ICD_CODE5' => set_value('ICD_CODE5'),
	    'ICD_CODE6' => set_value('ICD_CODE6'),
	    'ICD_CODE7' => set_value('ICD_CODE7'),
	    'ICD_CODE8' => set_value('ICD_CODE8'),
	    'ICD_CODE9' => set_value('ICD_CODE9'),
	    'ICD_CODE10' => set_value('ICD_CODE10'),
	    'ICD_CODE11' => set_value('ICD_CODE11'),
	    'ICD_CODE12' => set_value('ICD_CODE12'),
	    'ICD_CODE13' => set_value('ICD_CODE13'),
	    'ICD_CODE14' => set_value('ICD_CODE14'),
	    'ICD_CODE15' => set_value('ICD_CODE15'),
	    'ICD_CODE16' => set_value('ICD_CODE16'),
	    'ICD_CODE17' => set_value('ICD_CODE17'),
	    'ICD_CODE18' => set_value('ICD_CODE18'),
	    'ICD_CODE19' => set_value('ICD_CODE19'),
	    'ICD_CODE20' => set_value('ICD_CODE20'),
	    'ICD_CODE21' => set_value('ICD_CODE21'),
	    'ICD_CODE22' => set_value('ICD_CODE22'),
	    'ICD_CODE23' => set_value('ICD_CODE23'),
	    'ICD_CODE24' => set_value('ICD_CODE24'),
	    'ICD_CODE25' => set_value('ICD_CODE25'),
	    'ICD_CODE26' => set_value('ICD_CODE26'),
	    'ICD_CODE27' => set_value('ICD_CODE27'),
	    'ICD_CODE28' => set_value('ICD_CODE28'),
	    'ICD_CODE29' => set_value('ICD_CODE29'),
	    'ICD_CODE30' => set_value('ICD_CODE30'),
	    'KUNJUNGAN_BL' => set_value('KUNJUNGAN_BL'),
	    'KASUS_BL' => set_value('KASUS_BL'),
	    'ICDCM' => set_value('ICDCM'),
	    'ICD_9' => set_value('ICD_9'),
	    'ICD_92' => set_value('ICD_92'),
	    'ICD_93' => set_value('ICD_93'),
	    'ICD_94' => set_value('ICD_94'),
	    'ICD_95' => set_value('ICD_95'),
	    'ICD_96' => set_value('ICD_96'),
	    'ICD_97' => set_value('ICD_97'),
	    'ICD_98' => set_value('ICD_98'),
	    'ICD_99' => set_value('ICD_99'),
	    'ICD_910' => set_value('ICD_910'),
	    'ICD_911' => set_value('ICD_911'),
	    'ICD_912' => set_value('ICD_912'),
	    'ICD_913' => set_value('ICD_913'),
	    'ICD_914' => set_value('ICD_914'),
	    'ICD_915' => set_value('ICD_915'),
	    'ICD_916' => set_value('ICD_916'),
	    'ICD_917' => set_value('ICD_917'),
	    'ICD_918' => set_value('ICD_918'),
	    'ICD_919' => set_value('ICD_919'),
	    'ICD_920' => set_value('ICD_920'),
	    'ICD_921' => set_value('ICD_921'),
	    'ICD_922' => set_value('ICD_922'),
	    'ICD_923' => set_value('ICD_923'),
	    'ICD_924' => set_value('ICD_924'),
	    'ICD_925' => set_value('ICD_925'),
	    'ICD_926' => set_value('ICD_926'),
	    'ICD_927' => set_value('ICD_927'),
	    'ICD_928' => set_value('ICD_928'),
	    'ICD_929' => set_value('ICD_929'),
	    'ICD_930' => set_value('ICD_930'),
	    'KLB' => set_value('KLB'),
	    'BEDAH' => set_value('BEDAH'),
	    'JENIS' => set_value('JENIS'),
	    'SUBJECT' => set_value('SUBJECT'),
	    'OBJECT' => set_value('OBJECT'),
	    'ACTION' => set_value('ACTION'),
	    'REKOMENDASI' => set_value('REKOMENDASI'),
	    'SUBJECT_P' => set_value('SUBJECT_P'),
	    'OBJECT_P' => set_value('OBJECT_P'),
	    'ACTION_P' => set_value('ACTION_P'),
	    'REKOMENDASI_P' => set_value('REKOMENDASI_P'),
	    'diastole' => set_value('diastole'),
	    'nadi' => set_value('nadi'),
	    'napas' => set_value('napas'),
	    'suhu' => set_value('suhu'),
	    'idperawat' => set_value('idperawat'),
	    'ALERGI' => set_value('ALERGI'),
	    'jam_input' => set_value('jam_input'),
	);
        $this->template->load('template','t_diagnosadanterapi/t_diagnosadanterapi_form', $data);
    }

    public function create_action()
    {
        $this->_rules();
        $nomr=$this->input->post('NOMR');
        $idxdaftar=$this->input->post('IDXDAFTAR');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'IDXDAFTAR' => $this->input->post('IDXDAFTAR',TRUE),
		'NOMR' => $this->input->post('NOMR',TRUE),
		'TANGGAL' => $this->input->post('TANGGAL',TRUE),
		'TEKANAN_DARAH' => $this->input->post('TEKANAN_DARAH',TRUE),
		'GOLONGAN_DARAH' => $this->input->post('GOLONGAN_DARAH',TRUE),
		'TINGGI_BADAN' => $this->input->post('TINGGI_BADAN',TRUE),
		'BERAT_BADAN' => $this->input->post('BERAT_BADAN',TRUE),
		'DIAGNOSA' => $this->input->post('DIAGNOSA',TRUE),
		'TERAPI' => $this->input->post('TERAPI',TRUE),
		'ANAMNESA' => $this->input->post('ANAMNESA',TRUE),
		'KDPOLY' => $this->input->post('KDPOLY',TRUE),
		'KDDOKTER' => $this->input->post('KDDOKTER',TRUE),
		'KDTUJUANRUJUK' => $this->input->post('KDTUJUANRUJUK',TRUE),
		'NIP' => $this->input->post('NIP',TRUE),
		'ICD_CODE' => $this->input->post('ICD_CODE',TRUE),
		'ICD_CODE2' => $this->input->post('ICD_CODE2',TRUE),
		'ICD_CODE3' => $this->input->post('ICD_CODE3',TRUE),
		'ICD_CODE4' => $this->input->post('ICD_CODE4',TRUE),
		'ICD_CODE5' => $this->input->post('ICD_CODE5',TRUE),
		'ICD_CODE6' => $this->input->post('ICD_CODE6',TRUE),
		'ICD_CODE7' => $this->input->post('ICD_CODE7',TRUE),
		'ICD_CODE8' => $this->input->post('ICD_CODE8',TRUE),
		'ICD_CODE9' => $this->input->post('ICD_CODE9',TRUE),
		'ICD_CODE10' => $this->input->post('ICD_CODE10',TRUE),
		'ICD_CODE11' => $this->input->post('ICD_CODE11',TRUE),
		'ICD_CODE12' => $this->input->post('ICD_CODE12',TRUE),
		'ICD_CODE13' => $this->input->post('ICD_CODE13',TRUE),
		'ICD_CODE14' => $this->input->post('ICD_CODE14',TRUE),
		'ICD_CODE15' => $this->input->post('ICD_CODE15',TRUE),
		'ICD_CODE16' => $this->input->post('ICD_CODE16',TRUE),
		'ICD_CODE17' => $this->input->post('ICD_CODE17',TRUE),
		'ICD_CODE18' => $this->input->post('ICD_CODE18',TRUE),
		'ICD_CODE19' => $this->input->post('ICD_CODE19',TRUE),
		'ICD_CODE20' => $this->input->post('ICD_CODE20',TRUE),
		'ICD_CODE21' => $this->input->post('ICD_CODE21',TRUE),
		'ICD_CODE22' => $this->input->post('ICD_CODE22',TRUE),
		'ICD_CODE23' => $this->input->post('ICD_CODE23',TRUE),
		'ICD_CODE24' => $this->input->post('ICD_CODE24',TRUE),
		'ICD_CODE25' => $this->input->post('ICD_CODE25',TRUE),
		'ICD_CODE26' => $this->input->post('ICD_CODE26',TRUE),
		'ICD_CODE27' => $this->input->post('ICD_CODE27',TRUE),
		'ICD_CODE28' => $this->input->post('ICD_CODE28',TRUE),
		'ICD_CODE29' => $this->input->post('ICD_CODE29',TRUE),
		'ICD_CODE30' => $this->input->post('ICD_CODE30',TRUE),
		'KUNJUNGAN_BL' => $this->input->post('KUNJUNGAN_BL',TRUE),
		'KASUS_BL' => $this->input->post('KASUS_BL',TRUE),
		'ICDCM' => $this->input->post('ICDCM',TRUE),
		'ICD_9' => $this->input->post('ICD_9',TRUE),
		'ICD_92' => $this->input->post('ICD_92',TRUE),
		'ICD_93' => $this->input->post('ICD_93',TRUE),
		'ICD_94' => $this->input->post('ICD_94',TRUE),
		'ICD_95' => $this->input->post('ICD_95',TRUE),
		'ICD_96' => $this->input->post('ICD_96',TRUE),
		'ICD_97' => $this->input->post('ICD_97',TRUE),
		'ICD_98' => $this->input->post('ICD_98',TRUE),
		'ICD_99' => $this->input->post('ICD_99',TRUE),
		'ICD_910' => $this->input->post('ICD_910',TRUE),
		'ICD_911' => $this->input->post('ICD_911',TRUE),
		'ICD_912' => $this->input->post('ICD_912',TRUE),
		'ICD_913' => $this->input->post('ICD_913',TRUE),
		'ICD_914' => $this->input->post('ICD_914',TRUE),
		'ICD_915' => $this->input->post('ICD_915',TRUE),
		'ICD_916' => $this->input->post('ICD_916',TRUE),
		'ICD_917' => $this->input->post('ICD_917',TRUE),
		'ICD_918' => $this->input->post('ICD_918',TRUE),
		'ICD_919' => $this->input->post('ICD_919',TRUE),
		'ICD_920' => $this->input->post('ICD_920',TRUE),
		'ICD_921' => $this->input->post('ICD_921',TRUE),
		'ICD_922' => $this->input->post('ICD_922',TRUE),
		'ICD_923' => $this->input->post('ICD_923',TRUE),
		'ICD_924' => $this->input->post('ICD_924',TRUE),
		'ICD_925' => $this->input->post('ICD_925',TRUE),
		'ICD_926' => $this->input->post('ICD_926',TRUE),
		'ICD_927' => $this->input->post('ICD_927',TRUE),
		'ICD_928' => $this->input->post('ICD_928',TRUE),
		'ICD_929' => $this->input->post('ICD_929',TRUE),
		'ICD_930' => $this->input->post('ICD_930',TRUE),
		'KLB' => $this->input->post('KLB',TRUE),
		'BEDAH' => $this->input->post('BEDAH',TRUE),
		'JENIS' => $this->input->post('JENIS',TRUE),
		'SUBJECT' => $this->input->post('SUBJECT',TRUE),
		'OBJECT' => $this->input->post('OBJECT',TRUE),
		'ACTION' => $this->input->post('ACTION',TRUE),
		'REKOMENDASI' => $this->input->post('REKOMENDASI',TRUE),
		'SUBJECT_P' => $this->input->post('SUBJECT_P',TRUE),
		'OBJECT_P' => $this->input->post('OBJECT_P',TRUE),
		'ACTION_P' => $this->input->post('ACTION_P',TRUE),
		'REKOMENDASI_P' => $this->input->post('REKOMENDASI_P',TRUE),
		'diastole' => $this->input->post('diastole',TRUE),
		'nadi' => $this->input->post('nadi',TRUE),
		'napas' => $this->input->post('napas',TRUE),
		'suhu' => $this->input->post('suhu',TRUE),
		'idperawat' => $this->input->post('idperawat',TRUE),
		'ALERGI' => $this->input->post('ALERGI',TRUE),
		'jam_input' => $this->input->post('jam_input',TRUE),
	    );

            $this->T_diagnosadanterapi_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('t_diagnosadanterapi/list/'.$nomr.'/'.$idxdaftar));
        }
    }

    public function update($nomr,$idxdaftar,$id)
    {
        $row = $this->T_diagnosadanterapi_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_diagnosadanterapi/update_action'),
		'IDXTERAPI' => set_value('IDXTERAPI', $row->IDXTERAPI),
		'IDXDAFTAR' => set_value('IDXDAFTAR', $row->IDXDAFTAR),
		'NOMR' => set_value('NOMR', $row->NOMR),
		'TANGGAL' => set_value('TANGGAL', $row->TANGGAL),
		'TEKANAN_DARAH' => set_value('TEKANAN_DARAH', $row->TEKANAN_DARAH),
		'GOLONGAN_DARAH' => set_value('GOLONGAN_DARAH', $row->GOLONGAN_DARAH),
		'TINGGI_BADAN' => set_value('TINGGI_BADAN', $row->TINGGI_BADAN),
		'BERAT_BADAN' => set_value('BERAT_BADAN', $row->BERAT_BADAN),
		'DIAGNOSA' => set_value('DIAGNOSA', $row->DIAGNOSA),
		'TERAPI' => set_value('TERAPI', $row->TERAPI),
		'ANAMNESA' => set_value('ANAMNESA', $row->ANAMNESA),
		'KDPOLY' => set_value('KDPOLY', $row->KDPOLY),
		'KDDOKTER' => set_value('KDDOKTER', $row->KDDOKTER),
		'KDTUJUANRUJUK' => set_value('KDTUJUANRUJUK', $row->KDTUJUANRUJUK),
		'NIP' => set_value('NIP', $row->NIP),
		'ICD_CODE' => set_value('ICD_CODE', $row->ICD_CODE),
		'ICD_CODE2' => set_value('ICD_CODE2', $row->ICD_CODE2),
		'ICD_CODE3' => set_value('ICD_CODE3', $row->ICD_CODE3),
		'ICD_CODE4' => set_value('ICD_CODE4', $row->ICD_CODE4),
		'ICD_CODE5' => set_value('ICD_CODE5', $row->ICD_CODE5),
		'ICD_CODE6' => set_value('ICD_CODE6', $row->ICD_CODE6),
		'ICD_CODE7' => set_value('ICD_CODE7', $row->ICD_CODE7),
		'ICD_CODE8' => set_value('ICD_CODE8', $row->ICD_CODE8),
		'ICD_CODE9' => set_value('ICD_CODE9', $row->ICD_CODE9),
		'ICD_CODE10' => set_value('ICD_CODE10', $row->ICD_CODE10),
		'ICD_CODE11' => set_value('ICD_CODE11', $row->ICD_CODE11),
		'ICD_CODE12' => set_value('ICD_CODE12', $row->ICD_CODE12),
		'ICD_CODE13' => set_value('ICD_CODE13', $row->ICD_CODE13),
		'ICD_CODE14' => set_value('ICD_CODE14', $row->ICD_CODE14),
		'ICD_CODE15' => set_value('ICD_CODE15', $row->ICD_CODE15),
		'ICD_CODE16' => set_value('ICD_CODE16', $row->ICD_CODE16),
		'ICD_CODE17' => set_value('ICD_CODE17', $row->ICD_CODE17),
		'ICD_CODE18' => set_value('ICD_CODE18', $row->ICD_CODE18),
		'ICD_CODE19' => set_value('ICD_CODE19', $row->ICD_CODE19),
		'ICD_CODE20' => set_value('ICD_CODE20', $row->ICD_CODE20),
		'ICD_CODE21' => set_value('ICD_CODE21', $row->ICD_CODE21),
		'ICD_CODE22' => set_value('ICD_CODE22', $row->ICD_CODE22),
		'ICD_CODE23' => set_value('ICD_CODE23', $row->ICD_CODE23),
		'ICD_CODE24' => set_value('ICD_CODE24', $row->ICD_CODE24),
		'ICD_CODE25' => set_value('ICD_CODE25', $row->ICD_CODE25),
		'ICD_CODE26' => set_value('ICD_CODE26', $row->ICD_CODE26),
		'ICD_CODE27' => set_value('ICD_CODE27', $row->ICD_CODE27),
		'ICD_CODE28' => set_value('ICD_CODE28', $row->ICD_CODE28),
		'ICD_CODE29' => set_value('ICD_CODE29', $row->ICD_CODE29),
		'ICD_CODE30' => set_value('ICD_CODE30', $row->ICD_CODE30),
		'KUNJUNGAN_BL' => set_value('KUNJUNGAN_BL', $row->KUNJUNGAN_BL),
		'KASUS_BL' => set_value('KASUS_BL', $row->KASUS_BL),
		'ICDCM' => set_value('ICDCM', $row->ICDCM),
		'ICD_9' => set_value('ICD_9', $row->ICD_9),
		'ICD_92' => set_value('ICD_92', $row->ICD_92),
		'ICD_93' => set_value('ICD_93', $row->ICD_93),
		'ICD_94' => set_value('ICD_94', $row->ICD_94),
		'ICD_95' => set_value('ICD_95', $row->ICD_95),
		'ICD_96' => set_value('ICD_96', $row->ICD_96),
		'ICD_97' => set_value('ICD_97', $row->ICD_97),
		'ICD_98' => set_value('ICD_98', $row->ICD_98),
		'ICD_99' => set_value('ICD_99', $row->ICD_99),
		'ICD_910' => set_value('ICD_910', $row->ICD_910),
		'ICD_911' => set_value('ICD_911', $row->ICD_911),
		'ICD_912' => set_value('ICD_912', $row->ICD_912),
		'ICD_913' => set_value('ICD_913', $row->ICD_913),
		'ICD_914' => set_value('ICD_914', $row->ICD_914),
		'ICD_915' => set_value('ICD_915', $row->ICD_915),
		'ICD_916' => set_value('ICD_916', $row->ICD_916),
		'ICD_917' => set_value('ICD_917', $row->ICD_917),
		'ICD_918' => set_value('ICD_918', $row->ICD_918),
		'ICD_919' => set_value('ICD_919', $row->ICD_919),
		'ICD_920' => set_value('ICD_920', $row->ICD_920),
		'ICD_921' => set_value('ICD_921', $row->ICD_921),
		'ICD_922' => set_value('ICD_922', $row->ICD_922),
		'ICD_923' => set_value('ICD_923', $row->ICD_923),
		'ICD_924' => set_value('ICD_924', $row->ICD_924),
		'ICD_925' => set_value('ICD_925', $row->ICD_925),
		'ICD_926' => set_value('ICD_926', $row->ICD_926),
		'ICD_927' => set_value('ICD_927', $row->ICD_927),
		'ICD_928' => set_value('ICD_928', $row->ICD_928),
		'ICD_929' => set_value('ICD_929', $row->ICD_929),
		'ICD_930' => set_value('ICD_930', $row->ICD_930),
		'KLB' => set_value('KLB', $row->KLB),
		'BEDAH' => set_value('BEDAH', $row->BEDAH),
		'JENIS' => set_value('JENIS', $row->JENIS),
		'SUBJECT' => set_value('SUBJECT', $row->SUBJECT),
		'OBJECT' => set_value('OBJECT', $row->OBJECT),
		'ACTION' => set_value('ACTION', $row->ACTION),
		'REKOMENDASI' => set_value('REKOMENDASI', $row->REKOMENDASI),
		'SUBJECT_P' => set_value('SUBJECT_P', $row->SUBJECT_P),
		'OBJECT_P' => set_value('OBJECT_P', $row->OBJECT_P),
		'ACTION_P' => set_value('ACTION_P', $row->ACTION_P),
		'REKOMENDASI_P' => set_value('REKOMENDASI_P', $row->REKOMENDASI_P),
		'diastole' => set_value('diastole', $row->diastole),
		'nadi' => set_value('nadi', $row->nadi),
		'napas' => set_value('napas', $row->napas),
		'suhu' => set_value('suhu', $row->suhu),
		'idperawat' => set_value('idperawat', $row->idperawat),
		'ALERGI' => set_value('ALERGI', $row->ALERGI),
		'jam_input' => set_value('jam_input', $row->jam_input),
	    );
            $this->template->load('template','t_diagnosadanterapi/t_diagnosadanterapi_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_diagnosadanterapi'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        $nomr=$this->input->post('NOMR');
        $idxdaftar=$this->input->post('IDXDAFTAR');
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('IDXTERAPI', TRUE));
        } else {
            $data = array(
		'IDXDAFTAR' => $this->input->post('IDXDAFTAR',TRUE),
		'NOMR' => $this->input->post('NOMR',TRUE),
		'TANGGAL' => $this->input->post('TANGGAL',TRUE),
		'TEKANAN_DARAH' => $this->input->post('TEKANAN_DARAH',TRUE),
		'GOLONGAN_DARAH' => $this->input->post('GOLONGAN_DARAH',TRUE),
		'TINGGI_BADAN' => $this->input->post('TINGGI_BADAN',TRUE),
		'BERAT_BADAN' => $this->input->post('BERAT_BADAN',TRUE),
		'DIAGNOSA' => $this->input->post('DIAGNOSA',TRUE),
		'TERAPI' => $this->input->post('TERAPI',TRUE),
		'ANAMNESA' => $this->input->post('ANAMNESA',TRUE),
		'KDPOLY' => $this->input->post('KDPOLY',TRUE),
		'KDDOKTER' => $this->input->post('KDDOKTER',TRUE),
		'KDTUJUANRUJUK' => $this->input->post('KDTUJUANRUJUK',TRUE),
		'NIP' => $this->input->post('NIP',TRUE),
		'ICD_CODE' => $this->input->post('ICD_CODE',TRUE),
		'ICD_CODE2' => $this->input->post('ICD_CODE2',TRUE),
		'ICD_CODE3' => $this->input->post('ICD_CODE3',TRUE),
		'ICD_CODE4' => $this->input->post('ICD_CODE4',TRUE),
		'ICD_CODE5' => $this->input->post('ICD_CODE5',TRUE),
		'ICD_CODE6' => $this->input->post('ICD_CODE6',TRUE),
		'ICD_CODE7' => $this->input->post('ICD_CODE7',TRUE),
		'ICD_CODE8' => $this->input->post('ICD_CODE8',TRUE),
		'ICD_CODE9' => $this->input->post('ICD_CODE9',TRUE),
		'ICD_CODE10' => $this->input->post('ICD_CODE10',TRUE),
		'ICD_CODE11' => $this->input->post('ICD_CODE11',TRUE),
		'ICD_CODE12' => $this->input->post('ICD_CODE12',TRUE),
		'ICD_CODE13' => $this->input->post('ICD_CODE13',TRUE),
		'ICD_CODE14' => $this->input->post('ICD_CODE14',TRUE),
		'ICD_CODE15' => $this->input->post('ICD_CODE15',TRUE),
		'ICD_CODE16' => $this->input->post('ICD_CODE16',TRUE),
		'ICD_CODE17' => $this->input->post('ICD_CODE17',TRUE),
		'ICD_CODE18' => $this->input->post('ICD_CODE18',TRUE),
		'ICD_CODE19' => $this->input->post('ICD_CODE19',TRUE),
		'ICD_CODE20' => $this->input->post('ICD_CODE20',TRUE),
		'ICD_CODE21' => $this->input->post('ICD_CODE21',TRUE),
		'ICD_CODE22' => $this->input->post('ICD_CODE22',TRUE),
		'ICD_CODE23' => $this->input->post('ICD_CODE23',TRUE),
		'ICD_CODE24' => $this->input->post('ICD_CODE24',TRUE),
		'ICD_CODE25' => $this->input->post('ICD_CODE25',TRUE),
		'ICD_CODE26' => $this->input->post('ICD_CODE26',TRUE),
		'ICD_CODE27' => $this->input->post('ICD_CODE27',TRUE),
		'ICD_CODE28' => $this->input->post('ICD_CODE28',TRUE),
		'ICD_CODE29' => $this->input->post('ICD_CODE29',TRUE),
		'ICD_CODE30' => $this->input->post('ICD_CODE30',TRUE),
		'KUNJUNGAN_BL' => $this->input->post('KUNJUNGAN_BL',TRUE),
		'KASUS_BL' => $this->input->post('KASUS_BL',TRUE),
		'ICDCM' => $this->input->post('ICDCM',TRUE),
		'ICD_9' => $this->input->post('ICD_9',TRUE),
		'ICD_92' => $this->input->post('ICD_92',TRUE),
		'ICD_93' => $this->input->post('ICD_93',TRUE),
		'ICD_94' => $this->input->post('ICD_94',TRUE),
		'ICD_95' => $this->input->post('ICD_95',TRUE),
		'ICD_96' => $this->input->post('ICD_96',TRUE),
		'ICD_97' => $this->input->post('ICD_97',TRUE),
		'ICD_98' => $this->input->post('ICD_98',TRUE),
		'ICD_99' => $this->input->post('ICD_99',TRUE),
		'ICD_910' => $this->input->post('ICD_910',TRUE),
		'ICD_911' => $this->input->post('ICD_911',TRUE),
		'ICD_912' => $this->input->post('ICD_912',TRUE),
		'ICD_913' => $this->input->post('ICD_913',TRUE),
		'ICD_914' => $this->input->post('ICD_914',TRUE),
		'ICD_915' => $this->input->post('ICD_915',TRUE),
		'ICD_916' => $this->input->post('ICD_916',TRUE),
		'ICD_917' => $this->input->post('ICD_917',TRUE),
		'ICD_918' => $this->input->post('ICD_918',TRUE),
		'ICD_919' => $this->input->post('ICD_919',TRUE),
		'ICD_920' => $this->input->post('ICD_920',TRUE),
		'ICD_921' => $this->input->post('ICD_921',TRUE),
		'ICD_922' => $this->input->post('ICD_922',TRUE),
		'ICD_923' => $this->input->post('ICD_923',TRUE),
		'ICD_924' => $this->input->post('ICD_924',TRUE),
		'ICD_925' => $this->input->post('ICD_925',TRUE),
		'ICD_926' => $this->input->post('ICD_926',TRUE),
		'ICD_927' => $this->input->post('ICD_927',TRUE),
		'ICD_928' => $this->input->post('ICD_928',TRUE),
		'ICD_929' => $this->input->post('ICD_929',TRUE),
		'ICD_930' => $this->input->post('ICD_930',TRUE),
		'KLB' => $this->input->post('KLB',TRUE),
		'BEDAH' => $this->input->post('BEDAH',TRUE),
		'JENIS' => $this->input->post('JENIS',TRUE),
		'SUBJECT' => $this->input->post('SUBJECT',TRUE),
		'OBJECT' => $this->input->post('OBJECT',TRUE),
		'ACTION' => $this->input->post('ACTION',TRUE),
		'REKOMENDASI' => $this->input->post('REKOMENDASI',TRUE),
		'SUBJECT_P' => $this->input->post('SUBJECT_P',TRUE),
		'OBJECT_P' => $this->input->post('OBJECT_P',TRUE),
		'ACTION_P' => $this->input->post('ACTION_P',TRUE),
		'REKOMENDASI_P' => $this->input->post('REKOMENDASI_P',TRUE),
		'diastole' => $this->input->post('diastole',TRUE),
		'nadi' => $this->input->post('nadi',TRUE),
		'napas' => $this->input->post('napas',TRUE),
		'suhu' => $this->input->post('suhu',TRUE),
		'idperawat' => $this->input->post('idperawat',TRUE),
		'ALERGI' => $this->input->post('ALERGI',TRUE),
		'jam_input' => $this->input->post('jam_input',TRUE),
	    );

            $this->T_diagnosadanterapi_model->update($this->input->post('IDXTERAPI', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('t_diagnosadanterapi/list/'.$nomr.'/'.$idxdaftar));
        }
    }

    public function delete($id,$nomr,$idxdaftar)
    {
        $row = $this->T_diagnosadanterapi_model->get_by_id($id);

        if ($row) {
            $this->T_diagnosadanterapi_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('t_diagnosadanterapi/list/'.$nomr.'/'.$idxdaftar));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_diagnosadanterapi/list/'.$nomr.'/'.$idxdaftar));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('IDXDAFTAR', 'idxdaftar', 'trim|required');
	$this->form_validation->set_rules('NOMR', 'nomr', 'trim|required');
	$this->form_validation->set_rules('IDXTERAPI', 'IDXTERAPI', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T_diagnosadanterapi.php */
/* Location: ./application/controllers/T_diagnosadanterapi.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-20 18:45:25 */
/* http://harviacode.com */