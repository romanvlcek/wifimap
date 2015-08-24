<?php
/**
 * User: Roman
 * Date: 23.08.2015
 * Time: 20:03
 */
namespace App\Model;
class Coords {


    private $lat_start; /** @var  float */
    private $lat_end; /** @var  float */
    private $lon_start; /** @var  float */
    private $lon_end; /** @var float */


    /**
     * @param string|float $lat1
     * @param string|float $lat2
     * @param string|float $lon1
     * @param string|float $lon2
     */
    public function __construct($lat1=0.0,$lat2=0.0,$lon1=0.0,$lon2=0.0) {
        $this->sortCoordsLatLngBySize($lat1,$lat2,$lon1,$lon2);
    }

    /**
     * gets doubleval of all values and sort them by size
     *  and set as object values
     *
     * @param string|float $lat1
     * @param string|float $lat2
     * @param string|float $lon1
     * @param string|float $lon2
     * @return array
     */
    public function sortCoordsLatLngBySize($lat1,$lat2,$lon1,$lon2) {
        $lat1 = doubleval($lat1);
        $lat2 = doubleval($lat2);
        $lon1 = doubleval($lon1);
        $lon2 = doubleval($lon2);

        if($lat1 > $lat2) {
            $tmp = $lat2;
            $lat2 = $lat1;
            $lat1 = $tmp;
        }
        if($lon1 > $lon2) {
            $tmp = $lon2;
            $lon2 = $lon1;
            $lon1 = $tmp;
        }

        $this->lat_start = $lat1;
        $this->lat_end = $lat2;
        $this->lon_start = $lon1;
        $this->lon_end = $lon2;
    }

    /**
     * sort latitude and longitude by size
     */
    public function sortBySize() {
        $this->sortCoordsLatLngBySize($this->lat_start,$this->lat_end,$this->lon_start,$this->lon_end);
    }

    /**
     * get absolute value of latitude difference (delta latitude)
     * @return number
     */
    public function getDeltaLat() {
        return abs($this->lat_end - $this->lat_start);
    }

    /**
     * get absolute value of longitude difference (delta longitude)
     * @return number
     */
    public function getDeltaLon() {
        return abs($this->lon_end - $this->lon_start);
    }


    /**
     * enlarge latitude range by $k * deltaLatitude
     * @param float $k
     */
    public function increaseLatRange($k) {
        $deltaLat = $this->getDeltaLat();
        $this->lat_start = $this->lat_start - ($k * $deltaLat);
        $this->lat_end = $this->lat_end + ($k * $deltaLat);
    }

    /**
     * enlarge longitude range by $k * deltaLongitude
     * @param float $k
     */
    public function increaseLonRange($k) {
        $deltaLon = $this->getDeltaLon();
        $this->lon_start = $this->lon_start - ($k * $deltaLon);
        $this->lon_end = $this->lon_end + ($k * $deltaLon);
    }


    /**
     * @return string
     */
    public function toString() {
        return 'latitude: from:' . $this->getLatStart() . ',to:' . $this->getLatEnd() . ', longitude: from: ' . $this->getLonStart() . ',to:' . $this->getLonEnd();
    }


    /**
     * @return mixed
     */
    public function getLatStart()
    {
        return $this->lat_start;
    }

    /**
     * @param mixed $lat_start
     */
    public function setLatStart($lat_start)
    {
        $this->lat_start = $lat_start;
    }

    /**
     * @return float
     */
    public function getLatEnd()
    {
        return $this->lat_end;
    }

    /**
     * @param float $lat_end
     */
    public function setLatEnd($lat_end)
    {
        $this->lat_end = $lat_end;
    }

    /**
     * @return float
     */
    public function getLonStart()
    {
        return $this->lon_start;
    }

    /**
     * @param float $lon_start
     */
    public function setLonStart($lon_start)
    {
        $this->lon_start = $lon_start;
    }

    /**
     * @return float
     */
    public function getLonEnd()
    {
        return $this->lon_end;
    }

    /**
     * @param float $lon_end
     */
    public function setLonEnd($lon_end)
    {
        $this->lon_end = $lon_end;
    }







}