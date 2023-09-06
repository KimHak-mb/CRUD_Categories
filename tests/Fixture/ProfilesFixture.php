<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'user_id' => 1,
                'mobile' => 1,
                'created' => '2023-09-06 05:38:04',
                'modified' => '2023-09-06 05:38:04',
            ],
        ];
        parent::init();
    }
}
