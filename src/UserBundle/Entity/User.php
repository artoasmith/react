<?php
namespace UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\Exclude;
use JMS\Serializer\Annotation as Serializer;
use JMS\Serializer\Annotation\Groups;
use JMS\Serializer\Annotation\VirtualProperty;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @Serializer\SerializedName("str")
     * @Assert\NotBlank(
     *     groups={"en"}
     * )
     * @Groups({"en"})
     * @ORM\Column(name="en_str", type="string", length=255, nullable=true)
     */
    private $enStr;

    /**
     * @var string
     * @Serializer\SerializedName("str")
     * @Assert\NotBlank(
     *     groups={"ru"}
     * )
     * @Groups({"ru"})
     * @ORM\Column(name="ru_str", type="string", length=255, nullable=true)
     */
    private $ruStr;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    /**
     * Set enStr
     *
     * @param string $enStr
     * @return User
     */
    public function setEnStr($enStr)
    {
        $this->enStr = $enStr;

        return $this;
    }

    /**
     * Get enStr
     *
     * @return string
     */
    public function getEnStr()
    {
        return $this->enStr;
    }

    /**
     * Set ruStr
     *
     * @param string $ruStr
     * @return User
     */
    public function setRuStr($ruStr)
    {
        $this->ruStr = $ruStr;

        return $this;
    }

    /**
     * Get ruStr
     *
     * @return string
     */
    public function getRuStr()
    {
        return $this->ruStr;
    }
}