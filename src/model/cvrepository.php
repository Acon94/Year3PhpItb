<?php
/**
 * cv repo file for getting a cv
 * 
 * /
namespace Itb\Model;
/**
 * Class repo used in fetching a cv
 * 
 * /

class DvdRepository extends DatabaseTableRepository
{
  /**
	* CONSTRUCT FUNCTION
	* @var string
    */
    public function __construct()
    {
        parent::__construct('CV', 'cvss');
    }
    /**
     * 
     * param @$searchText
     * /

    public function searchByTitleOrCategory($searchText)
    {
        $db = new DatabaseManager();
        $connection = $db->getDbh();

        // wrap wildcard '%' around the serach text for the SQL query
        $searchText = '%' . $searchText . '%';

        $statement = $connection->prepare('SELECT * from cvs WHERE id = 1');
        $statement->bindParam(':id', $id, \PDO::PARAM_STR);
        $statement->setFetchMode(\PDO::FETCH_CLASS, '\\Itb\\CV');
        $statement->execute();

        $cvs = $statement->fetchAll();

        return $cvs;
    }




}
