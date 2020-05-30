<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_assesment_awal_rjjiwa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('T_assesment_awal_rjjiwa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {

    }

    public function read($id)
    {
        $row = $this->T_assesment_awal_rjjiwa_model->get_by_id($id);
        if ($row) {
            $data = array('id' => $row->ID_ASS,
		'ID_ASS' => $row->ID_ASS,
		'IDXDAFTAR' => $row->IDXDAFTAR,
		'NOMR' => $row->NOMR,
		'ALERGI' => $row->ALERGI,
		'JAMMULAI' => $row->JAMMULAI,
		'ANAMNESE' => $row->ANAMNESE,
		'KELUHAN_UTAMA' => $row->KELUHAN_UTAMA,
		'RIWAYAT_PENYAKIT_SEKARANG' => $row->RIWAYAT_PENYAKIT_SEKARANG,
		'RIWAYAT_PENYAKIT_DULU_SEKARANG' => $row->RIWAYAT_PENYAKIT_DULU_SEKARANG,
		'RIWAYAT_KELUARGA' => $row->RIWAYAT_KELUARGA,
		'PEMERIKSAAN_STATUS_MENTAL' => $row->PEMERIKSAAN_STATUS_MENTAL,
		'PEMERIKSAAN_PENUNJANG' => $row->PEMERIKSAAN_PENUNJANG,
		'DIAGNOSA_KERJA' => $row->DIAGNOSA_KERJA,
		'TERAPI' => $row->TERAPI,
		'KONTROL_ULANG_TGL' => $row->KONTROL_ULANG_TGL,
		'RAWAT_INAP' => $row->RAWAT_INAP,
		'RUJUK_LUAR' => $row->RUJUK_LUAR,
		'RUJUK_LAINNYA' => $row->RUJUK_LAINNYA,
		'TTD_PASIEN' => $row->TTD_PASIEN,
		'TTD_DOKTER' => $row->TTD_DOKTER,
		'ID_DOKTER' => $row->ID_DOKTER,
	    );
            $this->template->load('template','t_assesment_awal_rjjiwa/t_assesment_awal_rjjiwa_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa'));
        }
    }

    public function list($NOMR,$IDXDAFTAR)
    {
        $data = array(
            'datalist' => $this->T_assesment_awal_rjjiwa_model->get_datalist($NOMR,$IDXDAFTAR),
        );
        $this->template->load('template', 't_assesment_awal_rjjiwa/t_assesment_awal_rjjiwa_list', $data);
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_assesment_awal_rjjiwa/create_action'),
	    'ID_ASS' => set_value('ID_ASS'),
	    'IDXDAFTAR' => set_value('IDXDAFTAR'),
	    'NOMR' => set_value('NOMR'),
	    'ALERGI' => set_value('ALERGI'),
	    'JAMMULAI' => set_value('JAMMULAI'),
	    'ANAMNESE' => set_value('ANAMNESE'),
	    'KELUHAN_UTAMA' => set_value('KELUHAN_UTAMA'),
	    'RIWAYAT_PENYAKIT_SEKARANG' => set_value('RIWAYAT_PENYAKIT_SEKARANG'),
	    'RIWAYAT_PENYAKIT_DULU_SEKARANG' => set_value('RIWAYAT_PENYAKIT_DULU_SEKARANG'),
	    'RIWAYAT_KELUARGA' => set_value('RIWAYAT_KELUARGA'),
	    'PEMERIKSAAN_STATUS_MENTAL' => set_value('PEMERIKSAAN_STATUS_MENTAL'),
	    'PEMERIKSAAN_PENUNJANG' => set_value('PEMERIKSAAN_PENUNJANG'),
	    'DIAGNOSA_KERJA' => set_value('DIAGNOSA_KERJA'),
	    'TERAPI' => set_value('TERAPI'),
	    'KONTROL_ULANG_TGL' => set_value('KONTROL_ULANG_TGL'),
	    'RAWAT_INAP' => set_value('RAWAT_INAP'),
	    'RUJUK_LUAR' => set_value('RUJUK_LUAR'),
	    'RUJUK_LAINNYA' => set_value('RUJUK_LAINNYA'),
	    'TTD_PASIEN' => set_value('TTD_PASIEN'),
	    'TTD_DOKTER' => set_value('TTD_DOKTER'),
	    'ID_DOKTER' => set_value('ID_DOKTER'),
	);
        $this->template->load('template','t_assesment_awal_rjjiwa/t_assesment_awal_rjjiwa_form', $data);
    }

    public function create_action()
    {
        $this->_rules();
        $NOMR=$this->input->post('NOMR');
        $IDXDAFTAR=$this->input->post('IDXDAFTAR');
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'IDXDAFTAR' => $this->input->post('IDXDAFTAR',TRUE),
		'NOMR' => $this->input->post('NOMR',TRUE),
		'ALERGI' => $this->input->post('ALERGI',TRUE),
		'JAMMULAI' => $this->input->post('JAMMULAI',TRUE),
		'ANAMNESE' => $this->input->post('ANAMNESE',TRUE),
		'KELUHAN_UTAMA' => $this->input->post('KELUHAN_UTAMA',TRUE),
		'RIWAYAT_PENYAKIT_SEKARANG' => $this->input->post('RIWAYAT_PENYAKIT_SEKARANG',TRUE),
		'RIWAYAT_PENYAKIT_DULU_SEKARANG' => $this->input->post('RIWAYAT_PENYAKIT_DULU_SEKARANG',TRUE),
		'RIWAYAT_KELUARGA' => $this->input->post('RIWAYAT_KELUARGA',TRUE),
		'PEMERIKSAAN_STATUS_MENTAL' => $this->input->post('PEMERIKSAAN_STATUS_MENTAL',TRUE),
		'PEMERIKSAAN_PENUNJANG' => $this->input->post('PEMERIKSAAN_PENUNJANG',TRUE),
		'DIAGNOSA_KERJA' => $this->input->post('DIAGNOSA_KERJA',TRUE),
		'TERAPI' => $this->input->post('TERAPI',TRUE),
		'KONTROL_ULANG_TGL' => $this->input->post('KONTROL_ULANG_TGL',TRUE),
		'RAWAT_INAP' => $this->input->post('RAWAT_INAP',TRUE),
		'RUJUK_LUAR' => $this->input->post('RUJUK_LUAR',TRUE),
		'RUJUK_LAINNYA' => $this->input->post('RUJUK_LAINNYA',TRUE),
		'TTD_PASIEN' => $this->input->post('TTD_PASIEN',TRUE),
		'TTD_DOKTER' => $this->input->post('TTD_DOKTER',TRUE),
		'ID_DOKTER' => $this->input->post('ID_DOKTER',TRUE),
	    );

            $this->T_assesment_awal_rjjiwa_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa/list/'.$NOMR.'/'.$IDXDAFTAR));
        }
    }

    public function update($NOMR,$IDXDAFTAR,$id)
    {
        $row = $this->T_assesment_awal_rjjiwa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_assesment_awal_rjjiwa/update_action'),
		'ID_ASS' => set_value('ID_ASS', $row->ID_ASS),
		'IDXDAFTAR' => set_value('IDXDAFTAR', $row->IDXDAFTAR),
		'NOMR' => set_value('NOMR', $row->NOMR),
		'ALERGI' => set_value('ALERGI', $row->ALERGI),
		'JAMMULAI' => set_value('JAMMULAI', $row->JAMMULAI),
		'ANAMNESE' => set_value('ANAMNESE', $row->ANAMNESE),
		'KELUHAN_UTAMA' => set_value('KELUHAN_UTAMA', $row->KELUHAN_UTAMA),
		'RIWAYAT_PENYAKIT_SEKARANG' => set_value('RIWAYAT_PENYAKIT_SEKARANG', $row->RIWAYAT_PENYAKIT_SEKARANG),
		'RIWAYAT_PENYAKIT_DULU_SEKARANG' => set_value('RIWAYAT_PENYAKIT_DULU_SEKARANG', $row->RIWAYAT_PENYAKIT_DULU_SEKARANG),
		'RIWAYAT_KELUARGA' => set_value('RIWAYAT_KELUARGA', $row->RIWAYAT_KELUARGA),
		'PEMERIKSAAN_STATUS_MENTAL' => set_value('PEMERIKSAAN_STATUS_MENTAL', $row->PEMERIKSAAN_STATUS_MENTAL),
		'PEMERIKSAAN_PENUNJANG' => set_value('PEMERIKSAAN_PENUNJANG', $row->PEMERIKSAAN_PENUNJANG),
		'DIAGNOSA_KERJA' => set_value('DIAGNOSA_KERJA', $row->DIAGNOSA_KERJA),
		'TERAPI' => set_value('TERAPI', $row->TERAPI),
		'KONTROL_ULANG_TGL' => set_value('KONTROL_ULANG_TGL', $row->KONTROL_ULANG_TGL),
		'RAWAT_INAP' => set_value('RAWAT_INAP', $row->RAWAT_INAP),
		'RUJUK_LUAR' => set_value('RUJUK_LUAR', $row->RUJUK_LUAR),
		'RUJUK_LAINNYA' => set_value('RUJUK_LAINNYA', $row->RUJUK_LAINNYA),
		'TTD_PASIEN' => set_value('TTD_PASIEN', $row->TTD_PASIEN),
		'TTD_DOKTER' => set_value('TTD_DOKTER', $row->TTD_DOKTER),
		'ID_DOKTER' => set_value('ID_DOKTER', $row->ID_DOKTER),
	    );
            $this->template->load('template','t_assesment_awal_rjjiwa/t_assesment_awal_rjjiwa_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa'));
        }
    }

    public function update_action()
    {
        $this->_rules();
        $NOMR=$this->input->post('NOMR');
        $IDXDAFTAR=$this->input->post('IDXDAFTAR');
        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('ID_ASS', TRUE));
        } else {
            $data = array(
		'IDXDAFTAR' => $this->input->post('IDXDAFTAR',TRUE),
		'NOMR' => $this->input->post('NOMR',TRUE),
		'ALERGI' => $this->input->post('ALERGI',TRUE),
		'JAMMULAI' => $this->input->post('JAMMULAI',TRUE),
		'ANAMNESE' => $this->input->post('ANAMNESE',TRUE),
		'KELUHAN_UTAMA' => $this->input->post('KELUHAN_UTAMA',TRUE),
		'RIWAYAT_PENYAKIT_SEKARANG' => $this->input->post('RIWAYAT_PENYAKIT_SEKARANG',TRUE),
		'RIWAYAT_PENYAKIT_DULU_SEKARANG' => $this->input->post('RIWAYAT_PENYAKIT_DULU_SEKARANG',TRUE),
		'RIWAYAT_KELUARGA' => $this->input->post('RIWAYAT_KELUARGA',TRUE),
		'PEMERIKSAAN_STATUS_MENTAL' => $this->input->post('PEMERIKSAAN_STATUS_MENTAL',TRUE),
		'PEMERIKSAAN_PENUNJANG' => $this->input->post('PEMERIKSAAN_PENUNJANG',TRUE),
		'DIAGNOSA_KERJA' => $this->input->post('DIAGNOSA_KERJA',TRUE),
		'TERAPI' => $this->input->post('TERAPI',TRUE),
		'KONTROL_ULANG_TGL' => $this->input->post('KONTROL_ULANG_TGL',TRUE),
		'RAWAT_INAP' => $this->input->post('RAWAT_INAP',TRUE),
		'RUJUK_LUAR' => $this->input->post('RUJUK_LUAR',TRUE),
		'RUJUK_LAINNYA' => $this->input->post('RUJUK_LAINNYA',TRUE),
		'TTD_PASIEN' => $this->input->post('TTD_PASIEN',TRUE),
		'TTD_DOKTER' => $this->input->post('TTD_DOKTER',TRUE),
		'ID_DOKTER' => $this->input->post('ID_DOKTER',TRUE),
	    );

            $this->T_assesment_awal_rjjiwa_model->update($this->input->post('ID_ASS', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa/list/'.$NOMR.'/'.$IDXDAFTAR));
        }
    }

    public function delete($id,$NOMR,$IDXDAFTAR)
    {
        $row = $this->T_assesment_awal_rjjiwa_model->get_by_id($id);

        if ($row) {
            $this->T_assesment_awal_rjjiwa_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa/list/'.$NOMR.'/'.$IDXDAFTAR));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_assesment_awal_rjjiwa/list/'.$NOMR.'/'.$IDXDAFTAR));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('IDXDAFTAR', 'idxdaftar', 'trim|required');
	$this->form_validation->set_rules('NOMR', 'nomr', 'trim|required');
	$this->form_validation->set_rules('ALERGI', 'alergi', 'trim|required');
	$this->form_validation->set_rules('JAMMULAI', 'jammulai', 'trim|required');
	$this->form_validation->set_rules('ANAMNESE', 'anamnese', 'trim|required');
	$this->form_validation->set_rules('KELUHAN_UTAMA', 'keluhan utama', 'trim|required');
	$this->form_validation->set_rules('RIWAYAT_PENYAKIT_SEKARANG', 'riwayat penyakit sekarang', 'trim|required');
	$this->form_validation->set_rules('RIWAYAT_PENYAKIT_DULU_SEKARANG', 'riwayat penyakit dulu sekarang', 'trim|required');
	$this->form_validation->set_rules('RIWAYAT_KELUARGA', 'riwayat keluarga', 'trim|required');
	$this->form_validation->set_rules('PEMERIKSAAN_STATUS_MENTAL', 'pemeriksaan status mental', 'trim|required');
	$this->form_validation->set_rules('PEMERIKSAAN_PENUNJANG', 'pemeriksaan penunjang', 'trim|required');
	$this->form_validation->set_rules('DIAGNOSA_KERJA', 'diagnosa kerja', 'trim|required');
	$this->form_validation->set_rules('TERAPI', 'terapi', 'trim|required');
	$this->form_validation->set_rules('KONTROL_ULANG_TGL', 'kontrol ulang tgl', 'trim|required');
	$this->form_validation->set_rules('RAWAT_INAP', 'rawat inap', 'trim|required');
	$this->form_validation->set_rules('RUJUK_LUAR', 'rujuk luar', 'trim|required');
	$this->form_validation->set_rules('RUJUK_LAINNYA', 'rujuk lainnya', 'trim|required');
	$this->form_validation->set_rules('TTD_PASIEN', 'ttd pasien', 'trim|required');
	$this->form_validation->set_rules('TTD_DOKTER', 'ttd dokter', 'trim|required');
	$this->form_validation->set_rules('ID_DOKTER', 'id dokter', 'trim|required');

	$this->form_validation->set_rules('ID_ASS', 'ID_ASS', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file T_assesment_awal_rjjiwa.php */
/* Location: ./application/controllers/T_assesment_awal_rjjiwa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-30 05:46:09 */
/* http://harviacode.com */