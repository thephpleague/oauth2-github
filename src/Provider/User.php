<?php namespace League\OAuth2\Client\Provider;

/**
 * @property array $response
 * @property string $uid
 */
class User extends StandardUser
{
    /**
     * Domain
     *
     * @var string
     */
    protected $domain;

    /**
     * Get user email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get user name
     *
     * @return string
     */
    public function getName()
    {
        return $this->response['name'] ?: null;
    }

    /**
     * Get user nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->response['login'] ?: null;
    }

    /**
     * Get user userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->uid;
    }

    /**
     * Get user url
     *
     * @return string
     */
    public function getUrl()
    {
        return trim($this->domain.'/'.$this->getNickname()) ?: null;
    }

    /**
     * Set user domain
     *
     * @param  string $domain
     *
     * @return User
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }
}
