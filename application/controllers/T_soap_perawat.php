<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_soap_perawat extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        is_login();
        $this->load->model('T_soap_perawat_model');
        $this->load->library('form_validation');
        $this->load->library('datatables');
    }

    public function list($idxdaftar)
    {
        $data = array(
            'datalist' => $this->T_soap_perawat_model->get_datalist($idxdaftar),
        );
        $this->template->load('template', 't_soap_perawat/t_soap_perawat_list', $data);
    }

    public function read($id)
    {
        $row = $this->T_soap_perawat_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id' => $row->id,
                'idxdaftar' => $row->idxdaftar,
                'nomr' => $row->nomr,
                's' => $row->s,
                'o' => $row->o,
                'a' => $row->a,
                'p' => $row->p,
                'id_users' => $row->id_users,
                'tgl' => $row->tgl,
            );
            $this->template->load('template', 't_soap_perawat/t_soap_perawat_read', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_soap_perawat'));
        }
    }

    public function create()
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('t_soap_perawat/create_action'),
            'id' => set_value('id'),
            'idxdaftar' => set_value('idxdaftar'),
            'nomr' => set_value('nomr'),
            's' => set_value('s'),
            'o' => set_value('o'),
            'a' => set_value('a'),
            'p' => set_value('p'),
            'id_users' => set_value('id_users'),
            'tgl' => set_value('tgl'),
        );
        $this->template->load('template', 't_soap_perawat/t_soap_perawat_form', $data);
    }

    public function create_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $idxdaftar = $this->input->post('idxdaftar');
            $nomr = $this->input->post('nomr');
            $data = array(
                'idxdaftar' => $this->input->post('idxdaftar', TRUE),
                'nomr' => $this->input->post('nomr', TRUE),
                's' => $this->input->post('s', TRUE),
                'o' => $this->input->post('o', TRUE),
                'a' => $this->input->post('a', TRUE),
                'p' => $this->input->post('p', TRUE),
                'id_users' => $this->input->post('id_users', TRUE),
                'tgl' => $this->input->post('tgl', TRUE),
            );

            $this->T_soap_perawat_model->insert($data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Create Record Success 2</strong></div>');
            redirect(site_url('t_soap_perawat/list/' . $idxdaftar . '/' . $nomr));
        }
    }

    public function update($id)
    {
        $row = $this->T_soap_perawat_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('t_soap_perawat/update_action'),
                'id' => set_value('id', $row->id),
                'idxdaftar' => set_value('idxdaftar', $row->idxdaftar),
                'nomr' => set_value('nomr', $row->nomr),
                's' => set_value('s', $row->s),
                'o' => set_value('o', $row->o),
                'a' => set_value('a', $row->a),
                'p' => set_value('p', $row->p),
                'id_users' => set_value('id_users', $row->id_users),
                'tgl' => set_value('tgl', $row->tgl),
            );
            $this->template->load('template', 't_soap_perawat/t_soap_perawat_form', $data);
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_soap_perawat'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
                'idxdaftar' => $this->input->post('idxdaftar', TRUE),
                'nomr' => $this->input->post('nomr', TRUE),
                's' => $this->input->post('s', TRUE),
                'o' => $this->input->post('o', TRUE),
                'a' => $this->input->post('a', TRUE),
                'p' => $this->input->post('p', TRUE),
                'id_users' => $this->input->post('id_users', TRUE),
                'tgl' => $this->input->post('tgl', TRUE),
            );

            $this->T_soap_perawat_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Update Record Success</strong></div>');
            redirect(site_url('t_soap_perawat'));
        }
    }

    public function delete($id)
    {
        $row = $this->T_soap_perawat_model->get_by_id($id);

        if ($row) {
            $this->T_soap_perawat_model->delete($id);
            $this->session->set_flashdata('message', '<div class="alert bg-info-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Delete Record Success</strong></div>');
            redirect(site_url('t_soap_perawat'));
        } else {
            $this->session->set_flashdata('message', '<div class="alert bg-warning-500" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true"><i class="fal fa-times"></i></span>
            </button><strong> Record Not Found</strong></div>');
            redirect(site_url('t_soap_perawat'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('idxdaftar', 'idxdaftar', 'trim|required');
        $this->form_validation->set_rules('nomr', 'nomr', 'trim|required');
        $this->form_validation->set_rules('s', 's', 'trim|required');
        $this->form_validation->set_rules('o', 'o', 'trim|required');
        $this->form_validation->set_rules('a', 'a', 'trim|required');
        $this->form_validation->set_rules('p', 'p', 'trim|required');
        $this->form_validation->set_rules('id_users', 'id users', 'trim|required');
        $this->form_validation->set_rules('tgl', 'tgl', 'trim|required');

        $this->form_validation->set_rules('id', 'id', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

/* End of file T_soap_perawat.php */
/* Location: ./application/controllers/T_soap_perawat.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-08 20:05:45 */
/* http://harviacode.com */
