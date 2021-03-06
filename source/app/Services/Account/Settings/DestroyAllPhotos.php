<?php

namespace App\Services\Account\Settings;

use App\Models\Account\Photo;
use App\Services\BaseService;

class DestroyAllPhotos extends BaseService
{
    /**
     * Get the validation rules that apply to the service.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'account_id' => 'required|integer|exists:accounts,id',
        ];
    }

    /**
     * Destroy all photos in an account.
     *
     * @param  array  $data
     * @return bool
     */
    public function execute(array $data): bool
    {
        $this->validate($data);

        $photos = Photo::where('account_id', $data['account_id'])
            ->get();

        foreach ($photos as $photo) {
            $photo->delete();
        }

        return true;
    }
}
