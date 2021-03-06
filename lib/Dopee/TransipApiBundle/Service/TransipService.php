<?PHP

namespace Dopee\TransipApiBundle\Service;

use Transip;

class TransipService
{
    protected $client;

    public function __construct($transipConfig)
    {
        $this->client = new Transip\Client(
            $transipConfig['login'],
            $transipConfig['private_key'],
            $transipConfig['read_only'],
            $transipConfig['endpoint'],
            array_key_exists('proxy', $transipConfig) ? $transipConfig['proxy'] : false
        );
    }

    public function api($name)
    {
        return $this->client->api($name);
    }
}
