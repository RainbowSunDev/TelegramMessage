<?php

namespace MyApp;
require dirname(__DIR__) . '/vendor/autoload.php';

use Ratchet\MessageComponentInterface;
use Ratchet\ConnectionInterface;
use DateTime;

class Socket implements MessageComponentInterface {
    
    public function __construct($sqlConn)
    {
	    $this->clients = new \SplObjectStorage;
        $this->sqlConn = $sqlConn;
    }
    
    public function onOpen(ConnectionInterface $socketConn) {
        $this->clients->attach($socketConn);
        echo "New connection! ({$socketConn->resourceId})\n";       
    }

    public function onMessage(ConnectionInterface $from, $msg) {
        echo "received message : $msg\n";
        $data = json_decode($msg, false);
        $data = json_decode(json_encode($data), true);
    
        $m_Icon = isset($data['Icon']) ? $data['Icon'] : "None";
        $m_Rank = isset($data['Rank']) ? $data['Rank'] : "None";
        $m_Name = isset($data['Name']) ? $data['Name'] : "None";
        $m_Symbol = isset($data['Symbol']) ? $data['Symbol'] : "None";
        $m_Contract = isset($data['Contract']) ? explode(" ", $data['Contract'])[0] : "None";
        $m_Creator = isset($data['Creator']) ? explode(" ", $data['Creator'])[0] : "None";
        $m_Balance = isset($data['balance']) ? explode(" ", $data['balance'])[0] : "None";
        $m_Maxbuy = isset($data['maxbuy']) ? explode(" ", $data['maxbuy'])[0] : "None";
        $m_Buytax = isset($data['buytax']) ? explode(" ", $data['buytax'])[0] : "None";
        $m_Selltax = isset($data['selltax']) ? explode(" ", $data['selltax'])[0] : "None";
        $m_Enablemethod = isset($data['enablemethod']) ? explode(" ", $data['enablemethod'])[0] : "None";
        $m_Airisk = isset($data["Ai Rug Risk"]) ? $data["Ai Rug Risk"] : "None";

        $sql = 'INSERT INTO  tbl_logs (`rank`, `rare_new`, `name`, `contract`, `balance`, `max_buy`, `max_tax`, `sell_tax`, `enable`, `ai_risk`) VALUES("'.$m_Icon.'", "' . $m_Rank . '", "'.$m_Name.'", "' . $m_Contract . '", "' . $m_Balance . '", "' . $m_Maxbuy . '", "' . $m_Buytax . '", "' . $m_Selltax . '", "' . $m_Enablemethod . '", "' . $data["Ai Rug Risk"] . '")';    
        $result = $this->sqlConn->query($sql);
        print_r($result);
    }
    public function onClose(ConnectionInterface $conn) {
    }

    public function onError(ConnectionInterface $conn, \Exception $e) {
    }
}
?>