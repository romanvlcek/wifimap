<?php
namespace App\Model;
use Nette;
/**
 * User: Roman
 * Date: 08.09.2015
 * Time: 16:11
 */
class StatisticsSecurity extends Nette\Object {

    /** @var int $id */
    private $id;
    /** @var WifiSecurity $wifiSecurity */
    private $wifiSecurity;
    /** @var int $total_nets */
    private $total_nets;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return WifiSecurity
     */
    public function getWifiSecurity()
    {
        return $this->wifiSecurity;
    }

    /**
     * @param WifiSecurity $wifiSecurity
     */
    public function setWifiSecurity($wifiSecurity)
    {
        $this->wifiSecurity = $wifiSecurity;
    }

    /**
     * @return int
     */
    public function getTotalNets()
    {
        return $this->total_nets;
    }

    /**
     * @param int $total_nets
     */
    public function setTotalNets($total_nets)
    {
        $this->total_nets = $total_nets;
    }





}