<?php
/**
 * Created by PhpStorm.
 * User: karthik
 * Date: 21-05-2015
 * Time: 8:15 PM
 */

namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\EmailValidationRepository")
 */
class EmailValidation
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $listId;

    /**
     * @MongoDB\ID
     */
    protected $listDoc;

    /**
     * @MongoDB\String
     */
    protected $jobId;

    /**
     * @MongoDB\String
     */
    protected $jStatus;

    /**
     * @MongoDB\Integer
     */
    protected $comper;

    /**
     * @MongoDB\Date
     */
    protected $ctime;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set listId
     *
     * @param string $listId
     * @return self
     */
    public function setListId($listId)
    {
        $this->listId = $listId;
        return $this;
    }

    /**
     * Get listId
     *
     * @return string $listId
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Get listDoc
     *
     * @return id $listDoc
     */
    public function getListDoc()
    {
        return $this->listDoc;
    }

    /**
     * Set jobId
     *
     * @param string $jobId
     * @return self
     */
    public function setJobId($jobId)
    {
        $this->jobId = $jobId;
        return $this;
    }

    /**
     * Get jobId
     *
     * @return string $jobId
     */
    public function getJobId()
    {
        return $this->jobId;
    }

    /**
     * Set jStatus
     *
     * @param string $jStatus
     * @return self
     */
    public function setJStatus($jStatus)
    {
        $this->jStatus = $jStatus;
        return $this;
    }

    /**
     * Get jStatus
     *
     * @return string $jStatus
     */
    public function getJStatus()
    {
        return $this->jStatus;
    }

    /**
     * Set comper
     *
     * @param integer $comper
     * @return self
     */
    public function setComper($comper)
    {
        $this->comper = $comper;
        return $this;
    }

    /**
     * Get comper
     *
     * @return integer $comper
     */
    public function getComper()
    {
        return $this->comper;
    }

    /**
     * Set ctime
     *
     * @param date $ctime
     * @return self
     */
    public function setCtime($ctime)
    {
        $this->ctime = $ctime;
        return $this;
    }

    /**
     * Get ctime
     *
     * @return date $ctime
     */
    public function getCtime()
    {
        return $this->ctime;
    }
}
