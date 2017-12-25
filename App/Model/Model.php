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

    public function request($request, $parameters = []) {
        if ($parameters == null) {
            $req = $this->db->query($request);
            return $req->fetchAll(\PDO::FETCH_ASSOC);

        } elseif ($request !== null && ($parameters != null)) {
            $req = $this->db->prepare($request);
            $reqType = substr($request, 0, 6 );
            $req->execute($parameters);
            if (($reqType == 'INSERT') || ($reqType == 'UPDATE') || ($reqType == 'DELETE')){
                return '';
            }
            $this->count = $req->rowCount();
            if ($this->count > 1) {
                return $req->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                return $req->fetch(\PDO::FETCH_ASSOC);
            }
        }
    }

    public function getCount() {
        return $this->count;
    }
}
