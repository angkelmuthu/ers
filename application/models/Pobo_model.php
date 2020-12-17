<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Pobo_model extends CI_Model
{

    public $table = 'pobo';
    public $id = 'id';
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

    // get data by id
    function get_by_id($id)
    {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id', $q);
	$this->db->or_like('bln', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('ttl_kas', $q);
	$this->db->or_like('investasi', $q);
	$this->db->or_like('pbruto', $q);
	$this->db->or_like('pnetto', $q);
	$this->db->or_like('persediaan', $q);
	$this->db->or_like('aset_lancar', $q);
	$this->db->or_like('aset_tetap', $q);
	$this->db->or_like('ttl_aset', $q);
	$this->db->or_like('kewajiban', $q);
	$this->db->or_like('ekuitas', $q);
	$this->db->or_like('pendapatan_non_pajak', $q);
	$this->db->or_like('pendapatan_usaha', $q);
	$this->db->or_like('pendapatan_operasional', $q);
	$this->db->or_like('pendapatan_hibah', $q);
	$this->db->or_like('pendapatan_APBN', $q);
	$this->db->or_like('pendapatan_BLU', $q);
	$this->db->or_like('beban_penyusutan', $q);
	$this->db->or_like('beban_operasional', $q);
	$this->db->or_like('beban_subsidi', $q);
	$this->db->or_like('Surplus_Defisit', $q);
	$this->db->or_like('realisasi_51RM', $q);
	$this->db->or_like('realisasi_52RM', $q);
	$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id', $q);
	$this->db->or_like('bln', $q);
	$this->db->or_like('tahun', $q);
	$this->db->or_like('ttl_kas', $q);
	$this->db->or_like('investasi', $q);
	$this->db->or_like('pbruto', $q);
	$this->db->or_like('pnetto', $q);
	$this->db->or_like('persediaan', $q);
	$this->db->or_like('aset_lancar', $q);
	$this->db->or_like('aset_tetap', $q);
	$this->db->or_like('ttl_aset', $q);
	$this->db->or_like('kewajiban', $q);
	$this->db->or_like('ekuitas', $q);
	$this->db->or_like('pendapatan_non_pajak', $q);
	$this->db->or_like('pendapatan_usaha', $q);
	$this->db->or_like('pendapatan_operasional', $q);
	$this->db->or_like('pendapatan_hibah', $q);
	$this->db->or_like('pendapatan_APBN', $q);
	$this->db->or_like('pendapatan_BLU', $q);
	$this->db->or_like('beban_penyusutan', $q);
	$this->db->or_like('beban_operasional', $q);
	$this->db->or_like('beban_subsidi', $q);
	$this->db->or_like('Surplus_Defisit', $q);
	$this->db->or_like('realisasi_51RM', $q);
	$this->db->or_like('realisasi_52RM', $q);
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

/* End of file Pobo_model.php */
/* Location: ./application/models/Pobo_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2020-05-29 10:56:41 */
/* http://harviacode.com */