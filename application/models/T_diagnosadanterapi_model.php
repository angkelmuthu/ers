<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class T_diagnosadanterapi_model extends CI_Model
{

    public $table = 't_diagnosadanterapi';
    public $id = 'IDXTERAPI';
    public $order = 'DESC';

    function __construct()
    {
        parent::__construct();
    }

    // get all
    function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    function get_datalist($nomr,$idxdaftar)
    {
        $this->db->where('idxdaftar', $idxdaftar);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('IDXTERAPI', $q);
	$this->db->or_like('IDXDAFTAR', $q);
	$this->db->or_like('NOMR', $q);
	$this->db->or_like('TANGGAL', $q);
	$this->db->or_like('TEKANAN_DARAH', $q);
	$this->db->or_like('GOLONGAN_DARAH', $q);
	$this->db->or_like('TINGGI_BADAN', $q);
	$this->db->or_like('BERAT_BADAN', $q);
	$this->db->or_like('DIAGNOSA', $q);
	$this->db->or_like('TERAPI', $q);
	$this->db->or_like('ANAMNESA', $q);
	$this->db->or_like('KDPOLY', $q);
	$this->db->or_like('KDDOKTER', $q);
	$this->db->or_like('KDTUJUANRUJUK', $q);
	$this->db->or_like('NIP', $q);
	$this->db->or_like('ICD_CODE', $q);
	$this->db->or_like('ICD_CODE2', $q);
	$this->db->or_like('ICD_CODE3', $q);
	$this->db->or_like('ICD_CODE4', $q);
	$this->db->or_like('ICD_CODE5', $q);
	$this->db->or_like('ICD_CODE6', $q);
	$this->db->or_like('ICD_CODE7', $q);
	$this->db->or_like('ICD_CODE8', $q);
	$this->db->or_like('ICD_CODE9', $q);
	$this->db->or_like('ICD_CODE10', $q);
	$this->db->or_like('ICD_CODE11', $q);
	$this->db->or_like('ICD_CODE12', $q);
	$this->db->or_like('ICD_CODE13', $q);
	$this->db->or_like('ICD_CODE14', $q);
	$this->db->or_like('ICD_CODE15', $q);
	$this->db->or_like('ICD_CODE16', $q);
	$this->db->or_like('ICD_CODE17', $q);
	$this->db->or_like('ICD_CODE18', $q);
	$this->db->or_like('ICD_CODE19', $q);
	$this->db->or_like('ICD_CODE20', $q);
	$this->db->or_like('ICD_CODE21', $q);
	$this->db->or_like('ICD_CODE22', $q);
	$this->db->or_like('ICD_CODE23', $q);
	$this->db->or_like('ICD_CODE24', $q);
	$this->db->or_like('ICD_CODE25', $q);
	$this->db->or_like('ICD_CODE26', $q);
	$this->db->or_like('ICD_CODE27', $q);
	$this->db->or_like('ICD_CODE28', $q);
	$this->db->or_like('ICD_CODE29', $q);
	$this->db->or_like('ICD_CODE30', $q);
	$this->db->or_like('KUNJUNGAN_BL', $q);
	$this->db->or_like('KASUS_BL', $q);
	$this->db->or_like('ICDCM', $q);
	$this->db->or_like('ICD_9', $q);
	$this->db->or_like('ICD_92', $q);
	$this->db->or_like('ICD_93', $q);
	$this->db->or_like('ICD_94', $q);
	$this->db->or_like('ICD_95', $q);
	$this->db->or_like('ICD_96', $q);
	$this->db->or_like('ICD_97', $q);
	$this->db->or_like('ICD_98', $q);
	$this->db->or_like('ICD_99', $q);
	$this->db->or_like('ICD_910', $q);
	$this->db->or_like('ICD_911', $q);
	$this->db->or_like('ICD_912', $q);
	$this->db->or_like('ICD_913', $q);
	$this->db->or_like('ICD_914', $q);
	$this->db->or_like('ICD_915', $q);
	$this->db->or_like('ICD_916', $q);
	$this->db->or_like('ICD_917', $q);
	$this->db->or_like('ICD_918', $q);
	$this->db->or_like('ICD_919', $q);
	$this->db->or_like('ICD_920', $q);
	$this->db->or_like('ICD_921', $q);
	$this->db->or_like('ICD_922', $q);
	$this->db->or_like('ICD_923', $q);
	$this->db->or_like('ICD_924', $q);
	$this->db->or_like('ICD_925', $q);
	$this->db->or_like('ICD_926', $q);
	$this->db->or_like('ICD_927', $q);
	$this->db->or_like('ICD_928', $q);
	$this->db->or_like('ICD_929', $q);
	$this->db->or_like('ICD_930', $q);
	$this->db->or_like('KLB', $q);
	$this->db->or_like('BEDAH', $q);
	$this->db->or_like('JENIS', $q);
	$this->db->or_like('SUBJECT', $q);
	$this->db->or_like('OBJECT', $q);
	$this->db->or_like('ACTION', $q);
	$this->db->or_like('REKOMENDASI', $q);
	$this->db->or_like('SUBJECT_P', $q);
	$this->db->or_like('OBJECT_P', $q);
	$this->db->or_like('ACTION_P', $q);
	$this->db->or_like('REKOMENDASI_P', $q);
	$this->db->or_like('diastole', $q);
	$this->db->or_like('nadi', $q);
	$this->db->or_like('napas', $q);
	$this->db->or_like('suhu', $q);
	$this->db->or_like('idperawat', $q);
	$this->db->or_like('ALERGI', $q);
	$this->db->or_like('jam_input', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('IDXTERAPI', $q);
	$this->db->or_like('IDXDAFTAR', $q);
	$this->db->or_like('NOMR', $q);
	$this->db->or_like('TANGGAL', $q);
	$this->db->or_like('TEKANAN_DARAH', $q);
	$this->db->or_like('GOLONGAN_DARAH', $q);
	$this->db->or_like('TINGGI_BADAN', $q);
	$this->db->or_like('BERAT_BADAN', $q);
	$this->db->or_like('DIAGNOSA', $q);
	$this->db->or_like('TERAPI', $q);
	$this->db->or_like('ANAMNESA', $q);
	$this->db->or_like('KDPOLY', $q);
	$this->db->or_like('KDDOKTER', $q);
	$this->db->or_like('KDTUJUANRUJUK', $q);
	$this->db->or_like('NIP', $q);
	$this->db->or_like('ICD_CODE', $q);
	$this->db->or_like('ICD_CODE2', $q);
	$this->db->or_like('ICD_CODE3', $q);
	$this->db->or_like('ICD_CODE4', $q);
	$this->db->or_like('ICD_CODE5', $q);
	$this->db->or_like('ICD_CODE6', $q);
	$this->db->or_like('ICD_CODE7', $q);
	$this->db->or_like('ICD_CODE8', $q);
	$this->db->or_like('ICD_CODE9', $q);
	$this->db->or_like('ICD_CODE10', $q);
	$this->db->or_like('ICD_CODE11', $q);
	$this->db->or_like('ICD_CODE12', $q);
	$this->db->or_like('ICD_CODE13', $q);
	$this->db->or_like('ICD_CODE14', $q);
	$this->db->or_like('ICD_CODE15', $q);
	$this->db->or_like('ICD_CODE16', $q);
	$this->db->or_like('ICD_CODE17', $q);
	$this->db->or_like('ICD_CODE18', $q);
	$this->db->or_like('ICD_CODE19', $q);
	$this->db->or_like('ICD_CODE20', $q);
	$this->db->or_like('ICD_CODE21', $q);
	$this->db->or_like('ICD_CODE22', $q);
	$this->db->or_like('ICD_CODE23', $q);
	$this->db->or_like('ICD_CODE24', $q);
	$this->db->or_like('ICD_CODE25', $q);
	$this->db->or_like('ICD_CODE26', $q);
	$this->db->or_like('ICD_CODE27', $q);
	$this->db->or_like('ICD_CODE28', $q);
	$this->db->or_like('ICD_CODE29', $q);
	$this->db->or_like('ICD_CODE30', $q);
	$this->db->or_like('KUNJUNGAN_BL', $q);
	$this->db->or_like('KASUS_BL', $q);
	$this->db->or_like('ICDCM', $q);
	$this->db->or_like('ICD_9', $q);
	$this->db->or_like('ICD_92', $q);
	$this->db->or_like('ICD_93', $q);
	$this->db->or_like('ICD_94', $q);
	$this->db->or_like('ICD_95', $q);
	$this->db->or_like('ICD_96', $q);
	$this->db->or_like('ICD_97', $q);
	$this->db->or_like('ICD_98', $q);
	$this->db->or_like('ICD_99', $q);
	$this->db->or_like('ICD_910', $q);
	$this->db->or_like('ICD_911', $q);
	$this->db->or_like('ICD_912', $q);
	$this->db->or_like('ICD_913', $q);
	$this->db->or_like('ICD_914', $q);
	$this->db->or_like('ICD_915', $q);
	$this->db->or_like('ICD_916', $q);
	$this->db->or_like('ICD_917', $q);
	$this->db->or_like('ICD_918', $q);
	$this->db->or_like('ICD_919', $q);
	$this->db->or_like('ICD_920', $q);
	$this->db->or_like('ICD_921', $q);
	$this->db->or_like('ICD_922', $q);
	$this->db->or_like('ICD_923', $q);
	$this->db->or_like('ICD_924', $q);
	$this->db->or_like('ICD_925', $q);
	$this->db->or_like('ICD_926', $q);
	$this->db->or_like('ICD_927', $q);
	$this->db->or_like('ICD_928', $q);
	$this->db->or_like('ICD_929', $q);
	$this->db->or_like('ICD_930', $q);
	$this->db->or_like('KLB', $q);
	$this->db->or_like('BEDAH', $q);
	$this->db->or_like('JENIS', $q);
	$this->db->or_like('SUBJECT', $q);
	$this->db->or_like('OBJECT', $q);
	$this->db->or_like('ACTION', $q);
	$this->db->or_like('REKOMENDASI', $q);
	$this->db->or_like('SUBJECT_P', $q);
	$this->db->or_like('OBJECT_P', $q);
	$this->db->or_like('ACTION_P', $q);
	$this->db->or_like('REKOMENDASI_P', $q);
	$this->db->or_like('diastole', $q);
	$this->db->or_like('nadi', $q);
	$this->db->or_like('napas', $q);
	$this->db->or_like('suhu', $q);
	$this->db->or_like('idperawat', $q);
	$this->db->or_like('ALERGI', $q);
	$this->db->or_like('jam_input', $q);
	$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data)
    {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data)
    {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id)
    {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

}

/* End of file T_diagnosadanterapi_model.php */
/* Location: ./application/models/T_diagnosadanterapi_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-20 18:45:25 */
/* http://harviacode.com */