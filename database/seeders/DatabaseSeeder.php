<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(AssetContainersTableSeeder::class);
        $this->call(AssetsMetaTableSeeder::class);
        $this->call(BlueprintsTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(EntriesTableSeeder::class);
        $this->call(FailedJobsTableSeeder::class);
        $this->call(FieldsetsTableSeeder::class);
        $this->call(FormSubmissionsTableSeeder::class);
        $this->call(FormsTableSeeder::class);
        $this->call(GlobalSetVariablesTableSeeder::class);
        $this->call(GlobalSetsTableSeeder::class);
        $this->call(GroupUserTableSeeder::class);
        $this->call(NavigationsTableSeeder::class);
        $this->call(PasswordActivationTokensTableSeeder::class);
        $this->call(PasswordResetTokensTableSeeder::class);
        $this->call(PersonalAccessTokensTableSeeder::class);
        $this->call(RevisionsTableSeeder::class);
        $this->call(RoleUserTableSeeder::class);
        $this->call(TaxonomiesTableSeeder::class);
        $this->call(TaxonomyTermsTableSeeder::class);
        $this->call(TreesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
    }
}
