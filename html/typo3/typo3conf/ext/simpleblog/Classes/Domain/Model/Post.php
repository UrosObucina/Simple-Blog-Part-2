<?php
namespace Simpleblog\Simpleblog\Domain\Model;

/***
 *
 * This file is part of the "Simple Blog Part 2" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2019
 *
 ***/

/**
 * Post
 */
class Post extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * title
     *
     * @var string
     */
    protected $title = '';

    /**
     * descrition
     *
     * @var string
     */
    protected $descrition = '';

    /**
     * postdate
     *
     * @var \DateTime
     */
    protected $postdate = null;

    /**
     * tags
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Tag>
     */
    protected $tags = null;

    /**
     * comments
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Coments>
     * @cascade remove
     */
    protected $comments = null;

    /**
     * author
     *
     * @var \Simpleblog\Simpleblog\Domain\Model\Author
     */
    protected $author = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->tags = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->comments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Returns the descrition
     *
     * @return string $descrition
     */
    public function getDescrition()
    {
        return $this->descrition;
    }

    /**
     * Sets the descrition
     *
     * @param string $descrition
     * @return void
     */
    public function setDescrition($descrition)
    {
        $this->descrition = $descrition;
    }

    /**
     * Returns the postdate
     *
     * @return \DateTime $postdate
     */
    public function getPostdate()
    {
        return $this->postdate;
    }

    /**
     * Sets the postdate
     *
     * @param \DateTime $postdate
     * @return void
     */
    public function setPostdate(\DateTime $postdate)
    {
        $this->postdate = $postdate;
    }

    /**
     * Adds a Tag
     *
     * @param \Simpleblog\Simpleblog\Domain\Model\Tag $tag
     * @return void
     */
    public function addTag(\Simpleblog\Simpleblog\Domain\Model\Tag $tag)
    {
        $this->tags->attach($tag);
    }

    /**
     * Removes a Tag
     *
     * @param \Simpleblog\Simpleblog\Domain\Model\Tag $tagToRemove The Tag to be removed
     * @return void
     */
    public function removeTag(\Simpleblog\Simpleblog\Domain\Model\Tag $tagToRemove)
    {
        $this->tags->detach($tagToRemove);
    }

    /**
     * Returns the tags
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Tag> $tags
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * Sets the tags
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Tag> $tags
     * @return void
     */
    public function setTags(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $tags)
    {
        $this->tags = $tags;
    }

    /**
     * Adds a Coments
     *
     * @param \Simpleblog\Simpleblog\Domain\Model\Coments $comment
     * @return void
     */
    public function addComment(\Simpleblog\Simpleblog\Domain\Model\Coments $comment)
    {
        $this->comments->attach($comment);
    }

    /**
     * Removes a Coments
     *
     * @param \Simpleblog\Simpleblog\Domain\Model\Coments $commentToRemove The Coments to be removed
     * @return void
     */
    public function removeComment(\Simpleblog\Simpleblog\Domain\Model\Coments $commentToRemove)
    {
        $this->comments->detach($commentToRemove);
    }

    /**
     * Returns the comments
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Coments> $comments
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Simpleblog\Simpleblog\Domain\Model\Coments> $comments
     * @return void
     */
    public function setComments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $comments)
    {
        $this->comments = $comments;
    }

    /**
     * Returns the author
     *
     * @return \Simpleblog\Simpleblog\Domain\Model\Author $author
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Sets the author
     *
     * @param \Simpleblog\Simpleblog\Domain\Model\Author $author
     * @return void
     */
    public function setAuthor(\Simpleblog\Simpleblog\Domain\Model\Author $author)
    {
        $this->author = $author;
    }
}
