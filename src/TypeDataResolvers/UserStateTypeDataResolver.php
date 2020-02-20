<?php
namespace PoP\UserStateWP\TypeDataResolvers;

use PoP\UserState\TypeDataResolvers\UserStateTypeDataResolverInterface;

class UserStateTypeDataResolver implements UserStateTypeDataResolverInterface {

    public function isUserLoggedIn(): bool
    {
        return \is_user_logged_in();
    }
    public function getCurrentUser()
    {
        return \wp_get_current_user();
    }
    public function getCurrentUserId()
    {
        return \get_current_user_id();
    }

}
