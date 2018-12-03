<?php declare(strict_types=1);

namespace Darsyn\IP\Tests\Performance;

use Darsyn\IP\Version\IPv4;
use Darsyn\IP\Version\IPv6;
use Darsyn\IP\Version\Multi;

class IpFactoryBench
{
    /**
     * @Revs(100000)
     */
    public function benchCreateIpV4()
    {
        IPv4::factory('192.0.2.1');
    }

    /**
     * @Revs(100000)
     */
    public function benchCreateIpV6()
    {
        IPv6::factory('2001:db8:a::');
    }

    /**
     * @Revs(100000)
     */
    public function benchCreateIpMulti()
    {
        Multi::factory('192.0.2.2');
    }
}
