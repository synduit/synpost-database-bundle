<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 10-09-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Doctrine\ODM\MongoDB\Mapping\Annotations\ReferenceOne;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\EmailBodyLinkRepository")
 */
class EmailBodyLink
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @ReferenceOne(targetDocument="Campaign", simple=true)
     */
    protected $campaign;

    /**
     * @MongoDB\String
     */
    protected $actualLink;

    /**
     * @ReferenceOne(targetDocument="Subscriber", simple=true)
     */
    protected $subscriber;

    /**
     * @ReferenceOne(targetDocument="DripMail", simple=true)
     */
    protected $dripMail;

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
     * Set campaign
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Campaign $campaign
     * @return self
     */
    public function setCampaign(\Synduit\SynpostDatabaseBundle\Document\Campaign $campaign)
    {
        $this->campaign = $campaign;
        return $this;
    }

    /**
     * Get campaign
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Campaign $campaign
     */
    public function getCampaign()
    {
        return $this->campaign;
    }

    /**
     * Set subscriber
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber
     * @return self
     */
    public function setSubscriber(\Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber)
    {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * Get subscriber
     *
     * @return Synduit\SynpostDatabaseBundle\Document\Subscriber $subscriber
     */
    public function getSubscriber()
    {
        return $this->subscriber;
    }


    /**
     * Set actualLink
     *
     * @param string $actualLink
     * @return self
     */
    public function setActualLink($actualLink)
    {
        $this->actualLink = $actualLink;
        return $this;
    }

    /**
     * Get actualLink
     *
     * @return string $actualLink
     */
    public function getActualLink()
    {
        return $this->actualLink;
    }

    /**
     * Set dripMail
     *
     * @param \Synduit\SynpostDatabaseBundle\Document\Subscriber $dripMail
     * @return self
     */
    public function setDripMail(\Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail)
    {
        $this->dripMail = $dripMail;
        return $this;
    }

    /**
     * Get dripMail
     *
     * @return Synduit\SynpostDatabaseBundle\Document\DripMail $dripMail
     */
    public function getDripMail()
    {
        return $this->$dripMail;
    }
}
