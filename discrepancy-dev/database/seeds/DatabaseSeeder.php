
<?php
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
      Eloquent::unguard();

      $this->call('UserTableSeeder');
      $this->call('ErrorsTableSeeder');
  //    $this->call('ErrorDetailsTableSeeder');
  }

}

?>
