<?php
/**
 * Created by PhpStorm.
 * User: karthik
 * Date: 29-04-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceMany;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\SubscriberRepository")
 */
class Subscriber
{
    const SUBSCRIBER_STATUS_NOT_VERIFIED = 'Not Verified';

    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @ReferenceOne(targetDocument="Domain", simple=true, cascade={"persist"})
     */
    protected $domain;

    /**
     * @MongoDB\String
     */
    protected $email;

    /**
     * @MongoDB\String
     */
    protected $status;

    /**
     * @MongoDB\String
     */
    protected $grade;

    /**
     * @ReferenceMany(targetDocument="Term", simple=true, cascade={"persist"})
     */
    protected $terms;

    /**
     * @MongoDB\Integer
     */
    protected $emailClick;

    /**
     * @MongoDB\Integer
     */
    protected $emailSent;

    /**
     * @MongoDB\Integer
     */
    protected $emailOpen;

    /**
     * @MongoDB\String
     */
    protected $fields;

    /**
     * @MongoDB\String
     */
    protected $name;

    /**
     * @MongoDB\String
     */
    protected $fname;

    /**
     * @MongoDB\String
     */
    protected $lname;

    /**
     * @ReferenceMany(targetDocument="Drip", simple=true)
     */
    protected $drips;

    /**
     * @MongoDB\Integer
     */
    protected $created;

    /**
     * @MongoDB\Integer
     */
    protected $updated;

    /**
     * @MongoDB\Boolean
     */
    protected $active;

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
     * Set email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     *
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
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

    /**
     * Set grade
     *
     * @param string $grade
     * @return self
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
        return $this;
    }

    /**
     * Get grade
     *
     * @return string $grade
     */
    public function getGrade()
    {
        return $this->grade;
    }

    public function __construct()
    {
        $this->terms = new \Doctrine\Common\Collections\ArrayCollection();
        $this->emailClick = 0;
        $this->emailOpen = 0;
        $this->emailSent = 0;
        $this->drips = new \Doctrine\Common\Collections\ArrayCollection();
        $this->status = self::SUBSCRIBER_STATUS_NOT_VERIFIED;
        $this->active = true;
    }

    /**
     * Add term
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Term $term
     */
    public function addTerm(\Synduit\SynpostDatabaseBundle\Document\Term $term)
    {
        //$this->terms[] = $term;
        if (!$this->terms->contains($term)) {
          $this->terms[] = $term;
        }
    }

    /**
     * Remove term
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Term $term
     */
    public function removeTerm(\Synduit\SynpostDatabaseBundle\Document\Term $term)
    {
        $this->terms->removeElement($term);
    }

    /**
     * Get term
     *
     * @return \Doctrine\Common\Collections\Collection $term
     */
    public function getTerms()
    {
        return $this->terms;
    }

    /**
     * Set emailClick
     *
     * @param integer $emailClick
     * @return self
     */
    public function setEmailClick($emailClick)
    {
        $this->emailClick = $emailClick;
        return $this;
    }

    /**
     * Get emailClick
     *
     * @return integer $emailClick
     */
    public function getEmailClick()
    {
        return $this->emailClick;
    }

    /**
     * Set emailSent
     *
     * @param integer $emailSent
     * @return self
     */
    public function setEmailSent($emailSent)
    {
        $this->emailSent = $emailSent;
        return $this;
    }

    /**
     * Get emailSent
     *
     * @return integer $emailSent
     */
    public function getEmailSent()
    {
        return $this->emailSent;
    }

    /**
     * Set emailOpen
     *
     * @param integer $emailOpen
     * @return self
     */
    public function setEmailOpen($emailOpen)
    {
        $this->emailOpen = $emailOpen;
        return $this;
    }

    /**
     * Get emailOpen
     *
     * @return integer $emailOpen
     */
    public function getEmailOpen()
    {
        return $this->emailOpen;
    }

    /**
     * Set fields
     *
     * @param string $fields
     * @return self
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
        return $this;
    }

    /**
     * Get fields
     *
     * @return string $fields
     */
    public function getFields()
    {
        return $this->fields;
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
     * Set fname
     *
     * @param string $fname
     * @return self
     */
    public function setFname($fname)
    {
        $this->fname = $fname;
        return $this;
    }

    /**
     * Get fname
     *
     * @return string $fname
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set lname
     *
     * @param string $lname
     * @return self
     */
    public function setLname($lname)
    {
        $this->lname = $lname;
        return $this;
    }

    /**
     * Get lname
     *
     * @return string $lname
     */
    public function getLname()
    {
        return $this->lname;
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
     * Add drip
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Drip $drip
     */
    public function addDrip(\Synduit\SynpostDatabaseBundle\Document\Drip $drip)
    {
        $this->drips[] = $drip;
    }

    /**
     * Remove drip
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Drip $drip
     */
    public function removeDrip(\Synduit\SynpostDatabaseBundle\Document\Drip $drip)
    {
        $this->drips->removeElement($drip);
    }

    /**
     * Get drips
     *
     * @return \Doctrine\Common\Collections\Collection $drips
     */
    public function getDrips()
    {
        return $this->drips;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return self
     */
    public function setCreated($created)
    {
        $this->created = $created;
        return $this;
    }

    /**
     * Get created
     *
     * @return integer $created
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return self
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        return $this;
    }

    /**
     * Get updated
     *
     * @return integer $updated
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set active
     *
     * @param boolean $active
     * @return self
     */
    public function setActive($active)
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean $active
     */
    public function isActive()
    {
        return $this->active;
    }

}
