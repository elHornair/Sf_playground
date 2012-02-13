<?php

namespace Demo\BlogBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class BlogPost
{

    /**
    * @Assert\NotBlank()
    */
    protected $title;
    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    protected $date;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDate()
    {
        return $this->date;
    }
    public function setDate(\DateTime $date = null)
    {
        $this->date = $date;
    }

}
