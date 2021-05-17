<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class for my model.
 */
class MY_Model extends CI_Model {

	/**
	 * Adds a data.
	 * @param      <type>  $data   The data
	 * @param      <type>  $table  The table
	 */
  public function addData($data,$table){
		$this->db->insert($table,$data);
	}

	/**
	 * Gets the detail.
	 * @param      <type>  $where  The data edit
	 * @param      <type>  $table      The table
	 * @return     <type>  The detail.
	 */
  public function getDetail($where, $table){
    return $this->db->get_where($table, $where);
	}

	/**
	 * { function_description }
	 *
	 * @param      <type>  $where  The where
	 * @param      <type>  $data   The data
	 * @param      <type>  $table  The table
	 */
  public function updateData($where,$data,$table){
    $this->db->where($where);
    $this->db->update($table,$data);
  }

  /**
   * { function_description }
   * @param      <type>  $where  The where
   * @param      <type>  $table  The table
   */
  public function deleteData($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  /**
   * { function_description }
   * @param      <type>  $data   The data
   * @param      <type>  $table  The table
   * @return     <type>  ( description_of_the_return_value )
   */
  public function insertReturnId($data, $table){
    $this->db->insert($table, $data);
    $id = $this->db->insert_id();
    return (isset($id)) ? $id : FALSE;
  }

  /**
   * Gets all 1 table.
   * @param      <type>  $table  The table
   * @return     <type>  All 1 table.
   */
  public function getAllOneTable($select, $table){
    $this->db->select($select);
    return $this->db->get($table);
  }

  /**
   * EX :
   * getAllTwoTable('ms_kontrak','ms_customer','ms_kontrak.id_customer','ms_customer.id_customer')
   * @param      <type>  $tableA     The table a
   * @param      <type>  $tableB     The table b
   * @param      string  $idTableB   The identifier table b
   * @param      <type>  $idTableAB  The identifier table ab
   * @return     <type>  All 2 table.
   */
  public function getAllTwoTable($select, $tableA, $tableB, $join1){
    $this->db->select($select);
    $this->db->join($tableB, $join1, 'LEFT');
    return $this->db->get($tableA);
  }

    /**
     * EX :
     * getAllThreeTable('ms_kontrak a',
     *              'tbl_detail_mobil b','b.id_detail_mobil','a.id_detail_mobil',
     *              'ms_customer c','c.id_customer','a.id_customer')
     * Gets all 3 table join.
     * @param      <type>  $tableA       The table a
     * @param      <type>  $tableB       The table b
     * @param      string  $joinTableB   The join table b
     * @param      <type>  $joinTableAB  The join table ab
     * @param      <type>  $tableC       The table c
     * @param      string  $joinTableC   The join table c
     * @param      <type>  $joinTableAC  The join table ac
     * @return     <type>  All 3 table join.
     */
    public function getAllThreeTable($select, $tableA, $tableB, $join1 ,$tableC, $join2){
      $this->db->select($select);
      $this->db->join($tableB, $join1, 'LEFT');
      $this->db->join($tableC, $join2, 'LEFT');
      return $this->db->get($tableA);
    }

    /**
     * Gets all 4 table.
     * @param      <type>  $tableA     The table a
     * @param      <type>  $tableB     The table b
     * @param      string  $idTableB   The identifier table b
     * @param      <type>  $idTableAB  The identifier table ab
     * @param      <type>  $tableC     The table c
     * @param      string  $idTableC   The identifier table c
     * @param      <type>  $idTableAC  The identifier table ac
     * @param      <type>  $tableD     The table d
     * @param      string  $idTableD   The identifier table d
     * @param      <type>  $idTableAD  The identifier table ad
     * @return     <type>  All 4 table.
     */
    public function getAllFourTable($select, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3){
      $this->db->select($select);
      $this->db->join($tableB, $join1, 'LEFT');
      $this->db->join($tableC, $join2, 'LEFT');
      $this->db->join($tableD, $join3, 'LEFT');
      return $this->db->get($tableA);
    }

    /**
     * Gets all 5 table.
     * @param      <type>  $tableA     The table a
     * @param      <type>  $tableB     The table b
     * @param      string  $idTableB   The identifier table b
     * @param      <type>  $idTableAB  The identifier table ab
     * @param      <type>  $tableC     The table c
     * @param      string  $idTableC   The identifier table c
     * @param      <type>  $idTableAC  The identifier table ac
     * @param      <type>  $tableD     The table d
     * @param      string  $idTableD   The identifier table d
     * @param      <type>  $idTableAD  The identifier table ad
     * @param      <type>  $tableE     The table e
     * @param      string  $idTableE   The identifier table e
     * @param      <type>  $idTableAE  The identifier table ae
     * @return     <type>  All 5 table.
     */
    public function getAllFiveTable($select, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3, $tableE, $join4){
      $this->db->select($select);
      $this->db->join($tableB, $join1, 'LEFT');
      $this->db->join($tableC, $join2, 'LEFT');
      $this->db->join($tableD, $join3, 'LEFT');
      $this->db->join($tableE, $join4, 'LEFT');
      return $this->db->get($tableA);
    }

  /**
   * Gets all 6 table.
   *
   * @param      <type>  $tableA     The table a
   * @param      <type>  $tableB     The table b
   * @param      string  $idTableB   The identifier table b
   * @param      <type>  $idTableAB  The identifier table ab
   * @param      <type>  $tableC     The table c
   * @param      string  $idTableC   The identifier table c
   * @param      <type>  $idTableAC  The identifier table ac
   * @param      <type>  $tableD     The table d
   * @param      string  $idTableD   The identifier table d
   * @param      <type>  $idTableAD  The identifier table ad
   * @param      <type>  $tableE     The table e
   * @param      string  $idTableE   The identifier table e
   * @param      <type>  $idTableAE  The identifier table ae
   * @param      <type>  $tableF     The table f
   * @param      string  $idTableF   The identifier table f
   * @param      <type>  $idTableAF  The identifier table af
   *
   * @return     <type>  All 6 table.
   */
  public function getAllSixTable($select, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3, $tableE, $join4, $tableF, $join5){
    $this->db->select($select);
    $this->db->join($tableB, $join1, 'LEFT');
    $this->db->join($tableC, $join2, 'LEFT');
    $this->db->join($tableD, $join3, 'LEFT');
    $this->db->join($tableE, $join4, 'LEFT');
    $this->db->join($tableF, $join5, 'LEFT');
    return $this->db->get($tableA);
  }


  /**
   * Gets the detail 2 table where.
   * @param      <type>  $where   The where
   * @param      <type>  $tableA  The table a
   * @param      <type>  $tableB  The table b
   * @param      <type>  $clause  The clause
   * @return     <type>  The detail 2 table where.
   */
  public function getDetailTwoTableWhere($select, $where, $tableA , $tableB ,$join1){
    $this->db->select($select);
		$this->db->join($tableB, $join1, 'LEFT');
		$this->db->where($where);
		return $this->db->get($tableA);
	}


  /**
   * Gets the detail 3 table where.
   * @param      <type>  $where    The where
   * @param      <type>  $tableA   The table a
   * @param      <type>  $tableB   The table b
   * @param      <type>  $clause1  The clause 1
   * @param      <type>  $tableC   The table c
   * @param      <type>  $clause2  The clause 2
   * @return     <type>  The detail 3 table where.
   */
  public function getDetailThreeTableWhere($select, $where, $tableA, $tableB, $join1 ,$tableC, $join2){
    $this->db->select($select);
		$this->db->join($tableB, $join1, 'LEFT');
    $this->db->join($tableC, $join2, 'LEFT');
		$this->db->where($where);
		return $this->db->get($tableA);
	}


  /**
   * Gets the detail 4 table where.
   * @param      <type>  $where    The where
   * @param      <type>  $tableA   The table a
   * @param      <type>  $tableB   The table b
   * @param      <type>  $clause1  The clause 1
   * @param      <type>  $tableC   The table c
   * @param      <type>  $clause2  The clause 2
   * @param      <type>  $tableD   The table d
   * @param      <type>  $clause3  The clause 3
   * @return     <type>  The detail 4 table where.
   */
  public function getDetailFourTableWhere($select, $where, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3){
    $this->db->select($select);
    $this->db->join($tableB, $join1, 'LEFT');
    $this->db->join($tableC, $join2, 'LEFT');
    $this->db->join($tableD, $join3, 'LEFT');
    $this->db->where($where);
    return $this->db->get($tableA);
  }



  /**
   * Gets the detail 5 table where.
   * @param      <type>  $where         The where
   * @param      <type>  $table         The table
   * @param      <type>  $tableJoin1    The table join 1
   * @param      <type>  $tableJoin2    The table join 2
   * @param      <type>  $tableJoin3    The table join 3
   * @param      <type>  $tableJoin4    The table join 4
   * @param      string  $IDtableJoin1  I dtable join 1
   * @param      <type>  $IDtableJoin2  I dtable join 2
   * @param      <type>  $IDtableJoin3  I dtable join 3
   * @param      string  $IDtableJoin4  I dtable join 4
   * @param      string  $IDtableJoin5  I dtable join 5
   * @param      <type>  $IDtableJoin6  I dtable join 6
   * @param      string  $IDtableJoin7  I dtable join 7
   * @param      <type>  $IDtableJoin8  I dtable join 8
   * @return     <type>  The detail 5 table where.
   */
  public function getDetailFiveTableWhere($select, $where, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3, $tableE, $join4){
    $this->db->select($select);
    $this->db->join($tableB, $join1, 'LEFT');
    $this->db->join($tableC, $join2, 'LEFT');
    $this->db->join($tableD, $join3, 'LEFT');
    $this->db->join($tableE, $join4, 'LEFT');
    $this->db->where($where);
    return $this->db->get($table);
  }

  /**
   * Gets the detail 6 table where.
   *
   * @param      <type>  $where    The where
   * @param      <type>  $tableA   The table a
   * @param      <type>  $tableB   The table b
   * @param      <type>  $clause1  The clause 1
   * @param      <type>  $tableC   The table c
   * @param      <type>  $clause2  The clause 2
   * @param      <type>  $tableD   The table d
   * @param      <type>  $clause3  The clause 3
   * @param      <type>  $tableE   The table e
   * @param      <type>  $clause4  The clause 4
   * @param      <type>  $tableF   The table f
   * @param      <type>  $clause5  The clause 5
   *
   * @return     <type>  The detail six table where.
   */
  public function getDetailSixTableWhere($select, $where, $tableA, $tableB, $join1 ,$tableC, $join2, $tableD, $join3, $tableE, $join4, $tableF, $join5){
    $this->db->select($select);
    $this->db->join($tableB, $join1, 'LEFT');
    $this->db->join($tableC, $join2, 'LEFT');
    $this->db->join($tableD, $join3, 'LEFT');
    $this->db->join($tableE, $join4, 'LEFT');
    $this->db->join($tableF, $join5, 'LEFT');
    $this->db->where($where);
    return $this->db->get($table);
  }

}
