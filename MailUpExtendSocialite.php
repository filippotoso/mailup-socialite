<?php

namespace SocialiteProviders\MailUp;

use SocialiteProviders\Manager\SocialiteWasCalled;

class MailUpExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('mailup', __NAMESPACE__.'\Provider');
    }
}
