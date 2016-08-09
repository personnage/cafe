<?php

namespace App\Jobs;

use Storage;
use App\Jobs\Job;
use App\Models\NewsCategory;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class ReleaseNewsCategory extends Job implements ShouldQueue
{
    /**
     * @var string|null
     */
    protected $thumbnail;

    /**
     * @var bool
     */
    protected $exists;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(NewsCategory $category)
    {
        $this->exists = $category->exists;
        $this->thumbnail = $category->thumbnail;

        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->deleteThumbnail($this->thumbnail);

        if (! $this->exists) {
            // release all resource ...
        }
    }

    /**
     * Delete thumbnail file from disk.
     *
     * @param  string|null  $thumbnail
     * @param  Storage      $storage
     * @return void
     */
    protected function deleteThumbnail($thumbnail)
    {
        if (! is_null($thumbnail)) {
            Storage::disk('public')->delete($thumbnail);
        }
    }
}
