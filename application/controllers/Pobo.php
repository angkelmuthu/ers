<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pobo extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Pobo_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/pobo/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/pobo/index/';
            $config['first_url'] = base_url() . 'index.php/pobo/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Pobo_model->total_rows($q);
        $pobo = $this->Pobo_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'pobo_data' => $pobo,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','pobo/pobo_list', $data);
    }

    public function read($id)
    {
        $row = $this->Pobo_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'bln' => $row->bln,
		'tahun' => $row->tahun,
		'ttl_kas' => $row->ttl_kas,
		'investasi' => $row->investasi,
		'pbruto' => $row->pbruto,
		'pnetto' => $row->pnetto,
		'persediaan' => $row->persediaan,
		'aset_lancar' => $row->aset_lancar,
		'aset_tetap' => $row->aset_tetap,
		'ttl_aset' => $row->ttl_aset,
		'kewajiban' => $row->kewajiban,
		'ekuitas' => $row->ekuitas,
		'pendapatan_non_pajak' => $row->pendapatan_non_pajak,
		'pendapatan_usaha' => $row->pendapatan_usaha,
		'pendapatan_operasional' => $row->pendapatan_operasional,
		'pendapatan_hibah' => $row->pendapatan_hibah,
		'pendapatan_APBN' => $row->pendapatan_APBN,
		'pendapatan_BLU' => $row->pendapatan_BLU,
		'beban_penyusutan' => $row->beban_penyusutan,
		'beban_operasional' => $row->beban_operasional,
		'beban_subsidi' => $row->beban_subsidi,
		'Surplus_Defisit' => $row->Surplus_Defisit,
		'realisasi_51RM' => $row->realisasi_51RM,
		'realisasi_52RM' => $row->realisasi_52RM,
	    );
            $this->template->load('template','pobo/pobo_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('pobo'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('pobo/create_action'),
	    'id' => set_value('id'),
	    'bln' => set_value('bln'),
	    'tahun' => set_value('tahun'),
	    'ttl_kas' => set_value('ttl_kas'),
	    'investasi' => set_value('investasi'),
	    'pbruto' => set_value('pbruto'),
	    'pnetto' => set_value('pnetto'),
	    'persediaan' => set_value('persediaan'),
	    'aset_lancar' => set_value('aset_lancar'),
	    'aset_tetap' => set_value('aset_tetap'),
	    'ttl_aset' => set_value('ttl_aset'),
	    'kewajiban' => set_value('kewajiban'),
	    'ekuitas' => set_value('ekuitas'),
	    'pendapatan_non_pajak' => set_value('pendapatan_non_pajak'),
	    'pendapatan_usaha' => set_value('pendapatan_usaha'),
	    'pendapatan_operasional' => set_value('pendapatan_operasional'),
	    'pendapatan_hibah' => set_value('pendapatan_hibah'),
	    'pendapatan_APBN' => set_value('pendapatan_APBN'),
	    'pendapatan_BLU' => set_value('pendapatan_BLU'),
	    'beban_penyusutan' => set_value('beban_penyusutan'),
	    'beban_operasional' => set_value('beban_operasional'),
	    'beban_subsidi' => set_value('beban_subsidi'),
	    'Surplus_Defisit' => set_value('Surplus_Defisit'),
	    'realisasi_51RM' => set_value('realisasi_51RM'),
	    'realisasi_52RM' => set_value('realisasi_52RM'),
	);
        $this->template->load('template','pobo/pobo_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'bln' => $this->input->post('bln',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'ttl_kas' => $this->input->post('ttl_kas',TRUE),
		'investasi' => $this->input->post('investasi',TRUE),
		'pbruto' => $this->input->post('pbruto',TRUE),
		'pnetto' => $this->input->post('pnetto',TRUE),
		'persediaan' => $this->input->post('persediaan',TRUE),
		'aset_lancar' => $this->input->post('aset_lancar',TRUE),
		'aset_tetap' => $this->input->post('aset_tetap',TRUE),
		'ttl_aset' => $this->input->post('ttl_aset',TRUE),
		'kewajiban' => $this->input->post('kewajiban',TRUE),
		'ekuitas' => $this->input->post('ekuitas',TRUE),
		'pendapatan_non_pajak' => $this->input->post('pendapatan_non_pajak',TRUE),
		'pendapatan_usaha' => $this->input->post('pendapatan_usaha',TRUE),
		'pendapatan_operasional' => $this->input->post('pendapatan_operasional',TRUE),
		'pendapatan_hibah' => $this->input->post('pendapatan_hibah',TRUE),
		'pendapatan_APBN' => $this->input->post('pendapatan_APBN',TRUE),
		'pendapatan_BLU' => $this->input->post('pendapatan_BLU',TRUE),
		'beban_penyusutan' => $this->input->post('beban_penyusutan',TRUE),
		'beban_operasional' => $this->input->post('beban_operasional',TRUE),
		'beban_subsidi' => $this->input->post('beban_subsidi',TRUE),
		'Surplus_Defisit' => $this->input->post('Surplus_Defisit',TRUE),
		'realisasi_51RM' => $this->input->post('realisasi_51RM',TRUE),
		'realisasi_52RM' => $this->input->post('realisasi_52RM',TRUE),
	    );

            $this->Pobo_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('pobo'));
        }
    }

    public function update($id)
    {
        $row = $this->Pobo_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('pobo/update_action'),
		'id' => set_value('id', $row->id),
		'bln' => set_value('bln', $row->bln),
		'tahun' => set_value('tahun', $row->tahun),
		'ttl_kas' => set_value('ttl_kas', $row->ttl_kas),
		'investasi' => set_value('investasi', $row->investasi),
		'pbruto' => set_value('pbruto', $row->pbruto),
		'pnetto' => set_value('pnetto', $row->pnetto),
		'persediaan' => set_value('persediaan', $row->persediaan),
		'aset_lancar' => set_value('aset_lancar', $row->aset_lancar),
		'aset_tetap' => set_value('aset_tetap', $row->aset_tetap),
		'ttl_aset' => set_value('ttl_aset', $row->ttl_aset),
		'kewajiban' => set_value('kewajiban', $row->kewajiban),
		'ekuitas' => set_value('ekuitas', $row->ekuitas),
		'pendapatan_non_pajak' => set_value('pendapatan_non_pajak', $row->pendapatan_non_pajak),
		'pendapatan_usaha' => set_value('pendapatan_usaha', $row->pendapatan_usaha),
		'pendapatan_operasional' => set_value('pendapatan_operasional', $row->pendapatan_operasional),
		'pendapatan_hibah' => set_value('pendapatan_hibah', $row->pendapatan_hibah),
		'pendapatan_APBN' => set_value('pendapatan_APBN', $row->pendapatan_APBN),
		'pendapatan_BLU' => set_value('pendapatan_BLU', $row->pendapatan_BLU),
		'beban_penyusutan' => set_value('beban_penyusutan', $row->beban_penyusutan),
		'beban_operasional' => set_value('beban_operasional', $row->beban_operasional),
		'beban_subsidi' => set_value('beban_subsidi', $row->beban_subsidi),
		'Surplus_Defisit' => set_value('Surplus_Defisit', $row->Surplus_Defisit),
		'realisasi_51RM' => set_value('realisasi_51RM', $row->realisasi_51RM),
		'realisasi_52RM' => set_value('realisasi_52RM', $row->realisasi_52RM),
	    );
            $this->template->load('template','pobo/pobo_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('pobo'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'bln' => $this->input->post('bln',TRUE),
		'tahun' => $this->input->post('tahun',TRUE),
		'ttl_kas' => $this->input->post('ttl_kas',TRUE),
		'investasi' => $this->input->post('investasi',TRUE),
		'pbruto' => $this->input->post('pbruto',TRUE),
		'pnetto' => $this->input->post('pnetto',TRUE),
		'persediaan' => $this->input->post('persediaan',TRUE),
		'aset_lancar' => $this->input->post('aset_lancar',TRUE),
		'aset_tetap' => $this->input->post('aset_tetap',TRUE),
		'ttl_aset' => $this->input->post('ttl_aset',TRUE),
		'kewajiban' => $this->input->post('kewajiban',TRUE),
		'ekuitas' => $this->input->post('ekuitas',TRUE),
		'pendapatan_non_pajak' => $this->input->post('pendapatan_non_pajak',TRUE),
		'pendapatan_usaha' => $this->input->post('pendapatan_usaha',TRUE),
		'pendapatan_operasional' => $this->input->post('pendapatan_operasional',TRUE),
		'pendapatan_hibah' => $this->input->post('pendapatan_hibah',TRUE),
		'pendapatan_APBN' => $this->input->post('pendapatan_APBN',TRUE),
		'pendapatan_BLU' => $this->input->post('pendapatan_BLU',TRUE),
		'beban_penyusutan' => $this->input->post('beban_penyusutan',TRUE),
		'beban_operasional' => $this->input->post('beban_operasional',TRUE),
		'beban_subsidi' => $this->input->post('beban_subsidi',TRUE),
		'Surplus_Defisit' => $this->input->post('Surplus_Defisit',TRUE),
		'realisasi_51RM' => $this->input->post('realisasi_51RM',TRUE),
		'realisasi_52RM' => $this->input->post('realisasi_52RM',TRUE),
	    );

            $this->Pobo_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('pobo'));
        }
    }

    public function delete($id)
    {
        $row = $this->Pobo_model->get_by_id($id);

        if ($row) {
            $this->Pobo_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('pobo'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('pobo'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('bln', 'bln', 'trim|required');
	$this->form_validation->set_rules('tahun', 'tahun', 'trim|required');
	$this->form_validation->set_rules('ttl_kas', 'ttl kas', 'trim|required');
	$this->form_validation->set_rules('investasi', 'investasi', 'trim|required');
	$this->form_validation->set_rules('pbruto', 'pbruto', 'trim|required');
	$this->form_validation->set_rules('pnetto', 'pnetto', 'trim|required');
	$this->form_validation->set_rules('persediaan', 'persediaan', 'trim|required');
	$this->form_validation->set_rules('aset_lancar', 'aset lancar', 'trim|required');
	$this->form_validation->set_rules('aset_tetap', 'aset tetap', 'trim|required');
	$this->form_validation->set_rules('ttl_aset', 'ttl aset', 'trim|required');
	$this->form_validation->set_rules('kewajiban', 'kewajiban', 'trim|required');
	$this->form_validation->set_rules('ekuitas', 'ekuitas', 'trim|required');
	$this->form_validation->set_rules('pendapatan_non_pajak', 'pendapatan non pajak', 'trim|required');
	$this->form_validation->set_rules('pendapatan_usaha', 'pendapatan usaha', 'trim|required');
	$this->form_validation->set_rules('pendapatan_operasional', 'pendapatan operasional', 'trim|required');
	$this->form_validation->set_rules('pendapatan_hibah', 'pendapatan hibah', 'trim|required');
	$this->form_validation->set_rules('pendapatan_APBN', 'pendapatan apbn', 'trim|required');
	$this->form_validation->set_rules('pendapatan_BLU', 'pendapatan blu', 'trim|required');
	$this->form_validation->set_rules('beban_penyusutan', 'beban penyusutan', 'trim|required');
	$this->form_validation->set_rules('beban_operasional', 'beban operasional', 'trim|required');
	$this->form_validation->set_rules('beban_subsidi', 'beban subsidi', 'trim|required');
	$this->form_validation->set_rules('Surplus_Defisit', 'surplus defisit', 'trim|required');
	$this->form_validation->set_rules('realisasi_51RM', 'realisasi 51rm', 'trim|required');
	$this->form_validation->set_rules('realisasi_52RM', 'realisasi 52rm', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Pobo.php */
/* Location: ./application/controllers/Pobo.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-29 10:56:41 */
/* http://harviacode.com */