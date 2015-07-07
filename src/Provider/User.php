<?php namespace League\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\UserInterface;

class User implements UserInterface
{
    /**
     * User email
     *
     * @var string
     */
    protected $email;

    /**
     * User name
     *
     * @var string
     */
    protected $name;

    /**
     * User nickname
     *
     * @var string
     */
    protected $nickname;

    /**
     * User userId
     *
     * @var string
     */
    protected $userId;

    /**
     * User url
     *
     * @var string
     */
    protected $url;

    /**
     * Create new user
     *
     * @param array $attributes
     */
    public function __construct($attributes = [])
    {
        array_walk($attributes, [$this, 'mergeAttribute']);
    }

    /**
     * Attempt to merge individual attributes with user properties
     *
     * @param  mixed   $value
     * @param  string  $key
     *
     * @return void
     */
    private function mergeAttribute($value, $key)
    {
        $method = 'set'.ucfirst($key);

        if (method_exists($this, $method)) {
            $this->$method($value);
        }
    }

    /**
     * Get user email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set user email
     *
     * @param  string $email
     *
     * @return this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get user name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set user name
     *
     * @param  string $name
     *
     * @return this
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get user nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set user nickname
     *
     * @param  string $nickname
     *
     * @return this
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get user userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set user userId
     *
     * @param  string $userId
     *
     * @return this
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get user url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set user url
     *
     * @param  string $url
     *
     * @return this
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }
}
