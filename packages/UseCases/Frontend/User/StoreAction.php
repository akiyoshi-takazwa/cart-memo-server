<?php


namespace Packages\UseCases\Frontend\User;


use Illuminate\Support\Facades\Auth;
use Packages\Domain\User\User;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Domain\User\UserUuid;
use Packages\Domain\UserProfile\UserProfile;
use Packages\Domain\UserProfile\UserProfileRepositoryInterface;
use Packages\Domain\UserProfile\UserProfileUuid;
use Packages\Infrastructure\EloquentModels\User as UserModel;

class StoreAction
{
    /**
     * @var UserRepositoryInterface
     */
    private $userRepositoryInterface;

    /**
     * @var UserProfileRepositoryInterface
     */
    private $userProfileRepositoryInterface;

    public function __construct()
    {
        $this->userRepositoryInterface = app(UserRepositoryInterface::class);
        $this->userProfileRepositoryInterface = app(UserProfileRepositoryInterface::class);
    }

    /**
     * @param array $attributes
     * @return UserModel
     */
    public function create(array $attributes) :UserModel
    {
        $profileArray = [
            'id'   => UserProfileUuid::make(),
        ];
        $userProfile = $this->userProfileRepositoryInterface
            ->create($profileArray);

        $userDomain = new User($attributes['username'], $attributes['password']);

        $userArray = [
            'id'       => UserUuid::make(),
            'username' => $userDomain->getUsername(),
            'password' => $userDomain->getPassword(),
            'profile_type' => 'user',
            'profile_id'   => $userProfile->id,
        ];

        return $this->userRepositoryInterface
            ->create($userArray);
    }
}
