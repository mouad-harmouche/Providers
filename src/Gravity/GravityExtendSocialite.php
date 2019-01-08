<?php

namespace SocialiteProviders\Gravity;

use SocialiteProviders\Manager\SocialiteWasCalled;

class GravityExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'gravity', __NAMESPACE__.'\Provider', __NAMESPACE__.'\Server'
        );
    }
}
