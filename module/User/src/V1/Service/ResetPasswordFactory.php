<?php
namespace User\V1\Service;

use Zend\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class ResetPasswordFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $resetPasswordMapper = $container->get('User\Mapper\ResetPassword');
        $userMapper = $container->get('Aqilix\OAuth2\Mapper\OauthUsers');
        return new ResetPassword($resetPasswordMapper, $userMapper);
    }
}
