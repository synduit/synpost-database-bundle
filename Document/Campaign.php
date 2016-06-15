<?php
/**
 * Created by PhpStorm.
 * User: Tkuldeep
 * Date: 09-07-2015
 * Time: 8:15 PM
 */

namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\CampaignRepository")
 */
class Campaign
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\Bin
     */
    protected $body;

    /**
     * @MongoDB\Raw
     */
    protected $subject;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\Integer
     */
    protected $scheduleDate;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true)
     */
    protected $domain;

    /**
     * @ReferenceOne(targetDocument="Segment", simple=true)
     */
    protected $segment;

    /**
     * @MongoDB\String
     */
    protected $status;

    /**
     * Get id
     *
     * @return id $id
     */
    public function getId()
    {
        return $this->id;
    }

    public function __construct()
    {
        $this->scheduleDate = 0;
    }

    /**
     * Set body
     *
     * @param bin $body
     * @return self
     */
    public function setBody($body)
    {
        $this->body = $body;
        return $this;
    }

    /**
     * Get body
     *
     * @return bin $body
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * Set subject
     *
     * @param raw $subject
     * @return self
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
        return $this;
    }

    /**
     * Get subject
     *
     * @return raw $subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return self
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set scheduleDate
     *
     * @param string $scheduleDate
     * @return self
     */
    public function setScheduleDate($scheduleDate)
    {
        $this->scheduleDate = $scheduleDate;
        return $this;
    }

    /**
     * Get scheduleDate
     *
     * @return string $scheduleDate
     */
    public function getScheduleDate()
    {
        return $this->scheduleDate;
    }

    /**
     * Set segment
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Segment $segment
     * @return self
     */
    public function setSegment(\Synduit\SynpostDatabaseBundle\Document\Segment $segment)
    {
        $this->segment = $segment;
        return $this;
    }

    /**
     * Get segment
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Segment $segment
     */
    public function getSegment()
    {
        return $this->segment;
    }

    /**
     * Set domain
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Domain $domain
     * @return self
     */
    public function setDomain(\Synduit\SynpostDatabaseBundle\Document\Domain $domain)
    {
        $this->domain = $domain;
        return $this;
    }

    /**
     * Get domain
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Domain $domain
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return self
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string $status
     */
    public function getStatus()
    {
        return $this->status;
    }
}
