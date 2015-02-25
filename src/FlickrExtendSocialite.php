<?php
namespace SocialiteProviders\Flickr;

use SocialiteProviders\Manager\SocialiteWasCalled;

class FlickrExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'flickr', __NAMESPACE__.'\Provider', __NAMESPACE__.'\Server'
        );
    }
}
