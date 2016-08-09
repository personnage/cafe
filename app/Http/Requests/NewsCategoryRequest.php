<?php

namespace App\Http\Requests;

abstract class NewsCategoryRequest extends Request
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
        return $this->hasFile($this->getCategoryThumbnailField()) &&
            $this->file($this->getCategoryThumbnailField())->isValid();
    }

    /**
     * Get raw data uploaded file.
     *
     * @return string
     */
    public function getThumbnail()
    {
        return file_get_contents(
            $this->file($this->getCategoryThumbnailField())->getRealPath()
        );
    }

    /**
     * Get the name of the "category_thumbnail" field.
     *
     * @return string
     */
    protected function getCategoryThumbnailField()
    {
        if (property_exists($this, 'categoryThumbnail')) {
            return $this->categoryThumbnail;
        }

        return 'category_thumbnail';
    }
}
