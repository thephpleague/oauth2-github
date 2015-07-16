<?php namespace League\OAuth2\Client\Provider;

/**
 * @property array $response
 * @property string $resourceOwnerId
 */
class GithubResourceOwner extends GenericResourceOwner
{
    /**
     * Domain
     *
     * @var string
     */
    protected $domain;

    /**
     * Get resource owner email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->response['email'] ?: null;
    }

    /**
     * Get resource owner name
     *
     * @return string
     */
    public function getName()
    {
        return $this->response['name'] ?: null;
    }

    /**
     * Get resource owner nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->response['login'] ?: null;
    }

    /**
     * Get resource owner id
     *
     * @return string
     */
    public function getId()
    {
        return $this->resourceOwnerId;
    }

    /**
     * Get resource owner url
     *
     * @return string
     */
    public function getUrl()
    {
        return trim($this->domain.'/'.$this->getNickname()) ?: null;
    }

    /**
     * Set resource owner domain
     *
     * @param  string $domain
     *
     * @return ResourceOwner
     */
    public function setDomain($domain)
    {
        $this->domain = $domain;

        return $this;
    }
}
