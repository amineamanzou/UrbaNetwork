<?php

namespace Urbanet\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UrbanetUserBundle extends Bundle
{
    public function getParent() {
        return 'ApplicationSonataUserBundle';
    }
}
