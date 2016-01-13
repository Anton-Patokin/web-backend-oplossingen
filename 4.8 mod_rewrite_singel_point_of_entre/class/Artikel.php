<?php

	class Artikel
	{
		private $db;

		public function __construct( $database )
		{
			$this->db = $database;
		}
        
        public function query( $queryString, $placeholders = false )
		{
			$statement = $this->db->prepare( $queryString );

			if ( $placeholders )
			{
				foreach( $placeholders as $placeholderName => $placeholderValue )
				{
					$statement->bindValue( $placeholderName, $placeholderValue );
				}
			}

			$statement->execute();

			$result	=	array();

			while ( $row = $statement->fetch( PDO::FETCH_ASSOC ) )
			{
				$result[]	=	$row;
			}

			if ( empty( $result ) )
			{
				$result = false;
			}

			return $result;
		}
        
        
		public function add( $titel, $artikelBody, $kernwoorden, $datum )
		{
			$isAdded	=	false;

			$addQuery	=	           'INSERT INTO `artikel` 
                                         ( `Titel`, 
                                            `artikel`, 
                                            `Kernwoorden`, 
                                            `datum`) 
                                        VALUES 
                                         (  :titel, 
                                            :artikel, 
                                            :kernwoorden, 
                                            :datum)';
            
           $addParameters	=	array( ":titel" => $titel,
										":artikel" => $artikelBody,
										":kernwoorden" => $kernwoorden,
										":datum" => $datum
										);

			$result = $this->query( $addQuery, $addParameters );

			$isAdded	=	true;

			return $isAdded;
		}
        
        public function edit( $id, $titel, $artikelBody, $kernwoorden, $datum, $is_active )
		{
			$isEdited	=	false;

			$editQuery	=	'UPDATE artikels 
								SET titel = :titel,
									artikel = :artikel, 
									kernwoorden = :kernwoorden, 
									datum = :datum, 
									is_active = :is_active
								WHERE id = :id';
var_dump($editQuery);
			$editParameters	=	array( 
										":titel" => $titel,
										":artikel" => $artikelBody,
										":kernwoorden" => $kernwoorden,
										":datum" => $datum,
										":is_active" => $is_active,
										":id"	=> $id);

			$result = $this->db->query( $editQuery, $editParameters );

			$isEdited	=	true;

			return $isEdited;
		}

		public function get( $id = false,$artikel = false,$datum = false )
		{
			$queryString	=	'SELECT * FROM `artikel`';

			$placeholders	=	false;
			
			if ( $id )
			{
				$queryString 	.= 	'  WHERE `Index` LIKE "'.$id.'"';
				
			}
            if ( $artikel )
			{
				$queryString 	.= 	"WHERE `artikel` LIKE  '%".$artikel."%'";
				
			}
            if ( $datum )
			{ 
				$queryString 	.= 	"WHERE `datum` LIKE '%".$datum."%'";
				
			}

			$result = $this->query( $queryString, $placeholders );

			return $result;
		}

		

		public function delete( $id )
		{
			$delete	=	false;

			$deleteQuery	=	'UPDATE artikels
									SET is_archived = 1
									WHERE id = :id
									LIMIT 1';

			$deletePlaceholders	=	array( ':id' => $id );

			$this->db->query( $deleteQuery, $deletePlaceholders );

			$delete = true;

			return $delete;
		}

		
	}

?>