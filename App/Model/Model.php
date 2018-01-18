<?php
/**
 * Created by PhpStorm.
 * User: delphinemillotpedrero
 * Date: 30/11/2017
 * Time: 17:35
 */

namespace App\Model;

abstract class Model
{
    protected $db;
    protected $count;

    public function __construct() {
        $this->db = new DbAccess();
        $this->db = $this->db->getPDO();
    }

    public function request($request, $parameters = [], $start = null, $end = null) {
        if ($parameters == null) {
            $req = $this->db->query($request);
            //var_dump($req);
        } elseif ($request !== null && ($parameters != null)) {
            $req = $this->db->prepare($request);
            $reqType = substr($request, 0, 6 );
            $req->execute($parameters);
            if (($reqType == 'INSERT') || ($reqType == 'UPDATE') || ($reqType == 'DELETE')){
                return '';
            }
        }
        $this->count = $req->rowCount();
        return $req->fetchAll();
    }

    protected function getCount() {
        return $this->count;
    }
}
