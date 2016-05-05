<?php

namespace wp\AssociationBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TimeLine
 *
 * @ORM\Table(name="time_line")
 * @ORM\Entity(repositoryClass="wp\AssociationBundle\Repository\TimeLineRepository")
 */
class TimeLine
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="Annee", type="date")
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="Commentaire", type="string", length=255)
     */
    private $commentaire;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set annee
     *
     * @param \DateTime $annee
     * @return TimeLine
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return \DateTime 
     */
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     * @return TimeLine
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string 
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }
}
