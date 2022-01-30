<?php

namespace Database\Seeders;

use App\Domain\Partner\Factory\PartnerFactory;
use App\Domain\Person\Factory\PersonFactory;
use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        PartnerFactory::new()->count(10)->create();
        PersonFactory::new()->count(100)->create();

        $this->call(SetupSeeder::class);
    }


}