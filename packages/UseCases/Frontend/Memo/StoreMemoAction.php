<?php


namespace Packages\UseCases\Frontend\Memo;

use Packages\Domain\Memo\Memo;
use Packages\Domain\Memo\MemoRepositoryInterface;
use Packages\Domain\Memo\MemoUuid;
use Packages\Domain\User\User;
use Packages\Domain\User\UserRepositoryInterface;
use Packages\Domain\User\UserUuid;
use Packages\Domain\UserProfile\UserProfile;
use Packages\Domain\UserProfile\UserProfileRepositoryInterface;
use Packages\Domain\UserProfile\UserProfileUuid;
use Packages\Infrastructure\EloquentModels\Memo as MemoModel;

class StoreMemoAction
{
    /**
     * @var MemoRepositoryInterface
     */
    private $memoRepositoryInterface;

    public function __construct()
    {
        $this->memoRepositoryInterface = app(MemoRepositoryInterface::class);
    }

    /**
     * @param array $attributes
     * @return MemoModel
     */
    public function store(array $attributes) :MemoModel
    {
        $memoDomain = new Memo(
            $attributes['course_id'],
            $attributes['cc_id'],
            $attributes['rank'],
            $attributes['memo'] ?? null,
        );
        $memoDomain->setId();
        $memoDomain->setPlayDate();

        return $this->memoRepositoryInterface
            ->create($memoDomain->toArray());
    }
}
