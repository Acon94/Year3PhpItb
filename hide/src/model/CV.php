<?php
/**
 * CV class
 */
namespace Itb\Model;

/**
 * Created in Textpad
 * By:Andrew Connolly B00069517
 *
 *
 *
 * represent CV objects for use in voting system
 *
 *
 *
 */
class CV
{
    /**
     * the objects unique ID
     * @var int
     */
    private $id;

    /**
    *
    * cv owner firstname
    * @var string
    */

	private $first;

	/**
    *
    * location of jobs
    * @var string
    */

	private $surname;

	/**
	*
	* age of owner
	* @var string
	*/

	private $age;

    /**
    *
    * daddressof owner
    * @var string
    */

	private $address;

    /**
    *
    * gender of owner
    * @var string
    */

	private $gender;

   /**
   *
   * experience of owner
   * @var string
   */

	private $experience;


	/**
	*
	* image
	* @var string
	*/

	private $image;


    /**
	 * get id of cv owner
     * @return int
     */
    public function getId()
    	{
    	    return $this->id;
    	}

    /**
	 * get first name
    *	@return string
    */

    public function getFirst()
		{
	        return $this->first;
    	}

    /**
	 * get surname
	*	@return string
	*/

	public function getSurname()
		{
		    return $this->surname;
    	}

    /**
	 * get age
	*	@return string
	*/

	public function getAge()
		{
	        return $this->age;
	    }
	/**
	 * get addresss
	*	@return string
	*/

	public function getAddress()
	    {
	        return $this->address;
	    }

	/**
	 * get gender
	*	@return string
	*/

	public function getGender()
	    {
	        return $this->gender;
	    }

	/**
	 * get experience
	*	@return string
	*/
	public function getExperience()

		{
		    return $this->experience;
	    }

	/**
	 * get image
	*	@return string
	*/

	public function getImage()
		{
		    return $this->image;
	    }

	/**
	 * set id
	 * @param $id
	 */
	public function setId($id)
	    {
	        $this->id = $id;
    	}

	/**
	 * set first
	 * @param $first
	 */
	public function setFirst($first)
	    {
	        $this->first = $first;
    	}

	/**
	 * set surname
	 * @param $surname
	 */
    public function setSurname($surname)
	    {
	        $this->surname = $surname;
    	}

	/**
	 * set age
	 * @param $age
	 */
    public function setAge($age)
	    {
	        $this->age = $age;
    	}

	/**
	 * set Address
	 * @param $address#
	 */
    public function setAddress($address)
	    {
	        $this->address = $address;
    	}

	/**
	 * set gender
	 * @param $gender
	 */
    public function setGender($gender)
	    {
	        $this->gender = $gender;
    	}

	/**
	 * set Experience
	 * @param $experience
	 */
    public function setExperience($experience)
	    {
	        $this->experience = $experience;
    	}

	/**
	 * set image
	 * @param $image
	 */
    public function setImage($image)
		{
	        $this->image = $image;
   		}

}