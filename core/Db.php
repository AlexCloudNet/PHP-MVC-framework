<?
namespace core;

use PDO;

class Db
{
    protected $pdo;

    public function __construct(){
        $config = require './config/db.php';

        	$this->pdo = new PDO(
            	'mysql:host=' . $config['host'] . 
            	';dbname='    . $config['dbname'] . 
				';charset='   . $config['charset'], $config['user'], $config['password']
			);
		
    }
	//Параметры обязательны для исключения инъекций
    public function query($sql, $params = []) {
		$stmt = $this->pdo->prepare($sql);
		if (!empty($params)) {
			foreach ($params as $key => $val) {
				$stmt->bindValue(':'.$key, $val);
			}
		}
		$stmt->execute();
		return $stmt;
    }
    
	public function row($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchAll(PDO::FETCH_ASSOC);
	}
	public function column($sql, $params = []) {
		$result = $this->query($sql, $params);
		return $result->fetchColumn();
    }


}
