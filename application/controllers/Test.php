<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Test extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('Test_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->uri->segment(3));

        if ($q <> '') {
            $config['base_url'] = base_url() . '.php/c_url/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'index.php/test/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'index.php/test/index/';
            $config['first_url'] = base_url() . 'index.php/test/index/';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = FALSE;
        $config['total_rows'] = $this->Test_model->total_rows($q);
        $test = $this->Test_model->get_limit_data($config['per_page'], $start, $q);
        $config['full_tag_open'] = '<ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>';
        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'test_data' => $test,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->template->load('template','test/test_list', $data);
    }

    public function read($id)
    {
        $row = $this->Test_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'kdtest' => $row->kdtest,
		'nama' => $row->nama,
		'tgl' => $row->tgl,
		'alamat' => $row->alamat,
	    );
            $this->template->load('template','test/test_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('test'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('test/create_action'),
	    'id' => set_value('id'),
	    'kdtest' => set_value('kdtest'),
	    'nama' => set_value('nama'),
	    'tgl' => set_value('tgl'),
	    'alamat' => set_value('alamat'),
	);
        $this->template->load('template','test/test_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'kdtest' => $this->input->post('kdtest',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Test_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('test'));
        }
    }

    public function update($id)
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('test/update_action'),
		'id' => set_value('id', $row->id),
		'kdtest' => set_value('kdtest', $row->kdtest),
		'nama' => set_value('nama', $row->nama),
		'tgl' => set_value('tgl', $row->tgl),
		'alamat' => set_value('alamat', $row->alamat),
	    );
            $this->template->load('template','test/test_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('test'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'kdtest' => $this->input->post('kdtest',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'tgl' => $this->input->post('tgl',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
	    );

            $this->Test_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('test'));
        }
    }

    public function delete($id)
    {
        $row = $this->Test_model->get_by_id($id);

        if ($row) {
            $this->Test_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('test'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('test'));
        }
    }

    public function _rules()
    {
	$this->form_validation->set_rules('kdtest', 'kdtest', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('tgl', 'tgl', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Test.php */
/* Location: ./application/controllers/Test.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-13 19:14:30 */
/* http://harviacode.com */