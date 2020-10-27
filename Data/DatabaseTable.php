<?php
	

	
	class DatabaseTable {
		private $pdo;
		private $table;
		private $primaryKey;
		
		public function __construct($table, $primaryKey) {
			
			// Database connection information.
			$this->pdo = new PDO('mysql:host=v.je; dbname=GolfDB; charset=utf8', 'student', 'student',
				[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
			
			$this->table = $table;
			$this->primaryKey = $primaryKey;
		}
		
		public function find($field, $value) {
			
			$stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . ' = :value');

			$stmt->execute(['value' => $value]);
			
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}

		public function findAll() {
			
			$stmt = $this->pdo->prepare('SELECT * FROM ' . $this->table);
			
			$stmt->execute();
			
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		
		private function insert($record) {
			
			$keys = array_keys($record);
			
			$values = implode(', ', $keys);
			$valuesWithColon = implode(', :', $keys);
			
			$query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
			
			$stmt = $this->pdo->prepare($query);
			
			$stmt->execute($record);
		}

        private function update($record) {

            $query = 'UPDATE ' . $this->table . ' SET ';

            $parameters = [];
            foreach ($record as $key => $value) {
                $parameters[] = $key . ' = :' .$key;
            }

            $query .= implode(', ', $parameters);
            $query .= ' WHERE ' . $this->primaryKey . ' = :primaryKey';

            $record['primaryKey'] = $record[$this->primaryKey];

            $stmt = $this->pdo->prepare($query);

            $stmt->execute($record);
        }
		
		public function delete($id) {
			$stmt = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $this->primaryKey . ' = :id');
			$criteria = [
				'id' => $id
			];
			$stmt->execute($criteria);
		}
		
		
		public function save($record) {
			try {
				$this->insert($record);
			}
			catch (Exception $e) {
				$this->update($record);
			}
		}
	}