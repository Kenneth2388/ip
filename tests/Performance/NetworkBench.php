<?php declare(strict_types=1);

namespace Darsyn\IP\Tests\Performance;

use Darsyn\IP\Version\IPv4;
use Darsyn\IP\Version\IPv6;
use Darsyn\IP\Version\Multi;

class NetworkBench
{
    private $ipv4;
    private $ipv6;
    private $multi;

    public function __construct()
    {
        $this->ipv4 = IPv4::factory('192.0.2.1');
        $this->ipv6 = IPv6::factory('2001:db8:a::');
        $this->multi = Multi::factory('192.0.2.2');
    }

    /**
     * @Revs(100000)
     */
    public function benchNetworkV4()
    {
        $this->ipv4->getNetworkIp(31);
    }

    /**
     * @Revs(100000)
     */
    public function benchNetworkV6()
    {
        $this->ipv6->getNetworkIp(33);
    }

    /**
     * @Revs(100000)
     */
    public function benchNetworkMultiV4()
    {
        $this->multi->getNetworkIp(31);
    }

    /**
     * @Revs(100000)
     */
    public function benchNetworkMultiV6()
    {
        $this->multi->getNetworkIp(33);
    }
}
