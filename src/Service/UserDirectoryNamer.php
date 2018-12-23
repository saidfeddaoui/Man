<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 22/12/2018
 * Time: 14:34
 */

namespace App\Service;


use App\Entity\User;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Vich\UploaderBundle\Mapping\PropertyMapping;
use Vich\UploaderBundle\Naming\DirectoryNamerInterface;

class UserDirectoryNamer implements DirectoryNamerInterface
{

    protected $tokenStorage;

    public function __construct(TokenStorage $tokenStorage)
    {
        $this->tokenStorage = $tokenStorage;
    }

    public function directoryName($object, PropertyMapping $mapping): string
    {
        return "said";
    }

    protected function getUser()
    {
        $token = $this->tokenStorage->getToken();

        return $token->getUser();
    }


}