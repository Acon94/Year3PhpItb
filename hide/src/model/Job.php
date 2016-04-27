<?php
/**
 *
 * Job Model class
 *
 *
 *
 */
namespace Itb\Model;

/**
 * Created by PhpStorm.
 *
 * represent Job variables
 *
 *
<th> ID </th>

 *
 */
class Job
{
    /**
     * the objects unique ID
     * @var int
     */
    private $id;

    /**
    *
    * positions of job
    * @var string
    */

	private $position;
	 /**
	    *
	    * location of jobs
	    * @var string
	    */

	private $location;


	 /**
	 *
	 * date of jobs
	 * @var string
	 */

	private $timestamp;


    /**
	 * get id of the job
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
	*	get the position of the job
    *	@return string
    */
    public function getPosition()
	{
	        return $this->position;
    }
     /**
	  *	get the location of the job
	  * @return string
	    */
	public function getLocation()
	{
		        return $this->location;
    }

	/**
	 *get time job expires
	 * @return \DateTime
	 */
	public function getexpires()
	   {
	        $dateTimeObject = new \DateTime();
	        $dateTimeObject->setTimestamp($this->timestamp);

		     return $dateTimeObject;
	   }






}