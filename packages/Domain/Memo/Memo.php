<?php

namespace Packages\Domain\Memo;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class Memo
{
    /**
     * @var int
     */
    private $courseId;
    /**
     * @var int
     */
    private $ccId;
    /**
     * @var Carbon
     */
    private $playDate;
    /**
     * @var int
     */
    private $rank;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $id;

    /**
     * @param int $courseId
     * @param int $ccId
     * @param int $rank
     * @param string|null $memo
     */
    public function __construct(int $courseId, int $ccId, int $rank, ?string $memo)
    {
        $this->courseId = $courseId;
        $this->ccId = $ccId;
        $this->rank = $rank;
        $this->memo = $memo;
    }

    /**
     * @return string
     */
    public function setId(): string
    {
        return $this->id = MemoUuid::make();
    }

    /**
     * @return Carbon
     */
    public function setPlayDate(): Carbon
    {
        return $this->playDate = Carbon::now();
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id'        => $this->id,
            'user_id'   => Auth::id(),
            'course_id' => $this->courseId,
            'cc_id'     => $this->ccId,
            'play_date' => $this->playDate,
            'rank'      => $this->rank,
            'memo'      => $this->memo,
        ];
    }
}
