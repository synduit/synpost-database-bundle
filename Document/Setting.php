<?php
/**
 * Created by PhpStorm.
 * User: tkuldeep
 * Date: 22-10-2015
 * Time: 3:13 PM
 */
namespace Synduit\SynpostDatabaseBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

/**
 * @MongoDB\Document(repositoryClass="Synduit\SynpostDatabaseBundle\Repository\SettingRepository")
 */
class Setting
{
    /**
     * @MongoDB\Id
     */
    protected $id;

    /**
     * @MongoDB\String
     */
    protected $lastDripProcessTime;

    /**
     * @MongoDB\String
     */
    protected $lastCampaignProcessTime;

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
     * Set lastCampaignProcessTime
     *
     * @param string $lastCampaignProcessTime
     * @return self
     */
    public function setLastCampaignProcessTime($lastCampaignProcessTime)
    {
        $this->lastCampaignProcessTime = $lastCampaignProcessTime;
        return $this;
    }

    /**
     * Get lastCampaignProcessTime
     *
     * @return string $lastCampaignProcessTime
     */
    public function getLastCampaignProcessTime()
    {
        return $this->lastCampaignProcessTime;
    }

    /**
     * Set lastDripProcessTime
     *
     * @param string $lastDripProcessTime
     * @return self
     */
    public function setLastDripProcessTime($lastDripProcessTime)
    {
        $this->lastDripProcessTime = $lastDripProcessTime;
        return $this;
    }

    /**
     * Get lastDripProcessTime
     *
     * @return string $lastDripProcessTime
     */
    public function getLastDripProcessTime()
    {
        return $this->lastDripProcessTime;
    }
}
