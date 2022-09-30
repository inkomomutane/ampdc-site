<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(UsersTableSeeder::class);
        $this->call(PasswordResetsTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(GroupUserTableSeeder::class);
        $this->call(PasswordActivationsTableSeeder::class);
        $this->call(TaxonomiesTableSeeder::class);
        $this->call(TaxonomyTermsTableSeeder::class);
        $this->call(GlobalSetsTableSeeder::class);
        $this->call(NavigationsTableSeeder::class);
        $this->call(TreesTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(BlueprintsTableSeeder::class);
        $this->call(FieldsetsTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(FormSubmissionsTableSeeder::class);
        $this->call(AssetContainersTableSeeder::class);
        $this->call(AssetsMetaTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(EntriesTableSeeder::class);
    }
}
