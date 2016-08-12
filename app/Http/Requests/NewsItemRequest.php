<?php

namespace App\Http\Requests;

abstract class NewsItemRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // admin or editor_role or create_new_post permission
        return $this->user()->admin;
    }

    /**
     * Determine if the uploaded data contains a file and
     * determine whether the file was uploaded successfully.
     *
     * @return bool
     */
    public function hasThumbnail()
    {
        return $this->hasFile($this->getNewsThumbnailField()) &&
            $this->file($this->getNewsThumbnailField())->isValid();
    }

    /**
     * Get raw data uploaded file.
     *
     * @return string
     */
    public function getThumbnail()
    {
        return file_get_contents(
            $this->file($this->getNewsThumbnailField())->getRealPath()
        );
    }

    /**
     * Get the name of the "news_thumbnail" field.
     *
     * @return string
     */
    protected function getNewsThumbnailField()
    {
        if (property_exists($this, 'newsThumbnail')) {
            return $this->newsThumbnail;
        }

        return 'news_thumbnail';
    }
}
