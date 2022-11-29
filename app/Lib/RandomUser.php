<?php
namespace App\Lib;
use Exception;
use GuzzleHttp\Client;
use App\Objects\RandomUserObject;

class RandomUser
{
   /**
     * The api endpoint.
     *
     * @var string
     */
    private $apiendPoint;

    public function __construct()
    {
        $this->apiEndPoint = env('API_ENDPOINT');

    }
    /**
     * Function::makeRequest
     * @param::
     * Description:: Getting the user record using endpoint
     */
    public function makeRequest():Array
    {
        $this->client = new Client();
        $response = $this->client->get($this->apiEndPoint);

        if ($response->getStatusCode() == 200) {
            $result = $response->getBody()->getContents();
            return (array)$this->getRandomUserObject(json_decode($result, true));
        } else {
            throw new Exception($response->getStatusCode());
        }
    }

    /**
     * Function::getRandomUserObject
     * @param::$response
     * Description:: Preparing array with $response
     */
    public function getRandomUserObject($response):RandomUserObject
    {
        $response = $response['results'][0];
        $input = [
            'gender'                    => isset($response['gender']) ? $response['gender'] : '',
            'title'                    => isset($response['name']['title']) ? $response['name']['title'] : '',
            'first_name'              => isset($response['name']['first']) ? $response['name']['first'] : '',
            'last_name'         => isset($response['name']['last']) ? $response['name']['last'] : '',
            'street'         => isset($response['location']['street']['name']) ? $response['location']['street']['name'] : '',
            'city'         =>isset($response['location']['city']) ? $response['location']['city'] : '',
            'state'         =>isset($response['location']['state']) ? $response['location']['state'] : '',
            'country'         =>isset($response['location']['country']) ? $response['location']['country'] : '',
            'postcode'         =>isset($response['location']['postcode']) ? $response['location']['postcode'] : '',
            'email'         => isset($response['email']) ? $response['email'] : '',
            'phone'         => isset($response['phone']) ? $response['phone'] : '',
            'picture'         => isset($response['picture']['large']) ? $response['picture']['large'] : ''
        ];
        return  (new RandomUserObject())->fill($input);
    }

    
}