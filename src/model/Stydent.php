<?php
/**
 * Stydent class
 *
 */
namespace Itb\Model;
/**
 * class stydent represnts student objects
 */
class Stydent
{
    /**
     * the objects unique ID
     * @var int
     */
    private $id;

    /**
     * first name
     * @var string $first
     */

   private $first;

   /**
    * surname
    * @var string $surname
     */
    private $surname;



    /**
     * employment status
     * @var string
     */
    private $status;


    /**
     * id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * get first name
     * @return string
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     *
     * get the surname
     * @return string
     *
     */
    public function getSurname()
	{
	        return $this->surname;
    }

    /**
     * get the status
     * @return string
     *
     */

    public function getStatus()
    {
        return $this->status;
    }

}