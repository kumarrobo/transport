<?php
class report extends common {
    function __construct() {
        $this->checklogin();
        $this->table_prefix();
        parent:: __construct();
    }
    function vehicledetail() {
        $_REQUEST['start_date'] = $sdate = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date("Y-m-01");
        $_REQUEST['end_date'] = $edate = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date("Y-m-d");
        $_REQUEST['vehno'] = $vehno = isset($_REQUEST['vehno']) ? $_REQUEST['vehno'] : "";
        $sql = "SELECT b.*, a.name AS aname, c.name AS cname FROM {$this->prefix}billdet b, {$this->prefix}company c, {$this->prefix}area a WHERE (b.date >= '$sdate' AND b.date <= '$edate') AND b.vehno='$vehno' AND b.id_from_area=a.id_area AND b.id_company=c.id_company ORDER BY date";
        $data = $this->m->sql_getall($sql);
        $this->sm->assign("data", $data);
    }
    function despatchregister() {
        $_REQUEST['start_date'] = $sdate = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date("Y-m-01");
        $_REQUEST['end_date'] = $edate = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date("Y-m-d");
        $_REQUEST['vehno'] = $vehno = isset($_REQUEST['vehno']) ? $_REQUEST['vehno'] : "";
        $sql = "SELECT b.*, a.name AS aname, c.name AS cname FROM {$this->prefix}billdet b, {$this->prefix}company c, {$this->prefix}area a WHERE (b.date >= '$sdate' AND b.date <= '$edate') AND b.vehno='$vehno' AND b.id_from_area=a.id_area AND b.id_company=c.id_company ORDER BY date";
        $data = $this->m->sql_getall($sql);
        $this->sm->assign("data", $data);
    }
    function shortagedetail() {
    }
    function tripsummary() {
        $_REQUEST['start_date'] = $sdate = isset($_REQUEST['start_date']) ? $_REQUEST['start_date'] : date("Y-m-01");
        $_REQUEST['end_date'] = $edate = isset($_REQUEST['end_date']) ? $_REQUEST['end_date'] : date("Y-m-d");
        $_REQUEST['vehno'] = $vehno = isset($_REQUEST['vehno']) ? $_REQUEST['vehno'] : "";

        $res1 = $this->m->query("SELECT * FROM {$this->prefix}company WHERE status=0 ORDER BY name");
        $this->sm->assign("company", $this->m->getall($res1, 2, "name", "id_company"));
        $res1 = $this->m->query("SELECT * FROM {$this->prefix}area WHERE status=0 ORDER BY name");
        $this->sm->assign("area", $this->m->getall($res1, 2, "name", "id_area"));


        $sql = "SELECT b.*, a.name AS aname, c.name AS cname FROM {$this->prefix}billdet b, {$this->prefix}company c, {$this->prefix}area a WHERE (b.date >= '$sdate' AND b.date <= '$edate') AND b.vehno='$vehno' AND b.id_from_area=a.id_area AND b.id_company=c.id_company ORDER BY date";
        $data = $this->m->sql_getall($sql);
        $this->sm->assign("data", $data);
    }
}
?>