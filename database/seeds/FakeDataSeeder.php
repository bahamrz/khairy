<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class FakeDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // -------------------------------- Category Data --------------------------------------------------//
        // DB::table('categories')->truncate();//REmove if Laragon
        DB::table('categories')->insert(array(
            array(
              'name' => 'ملايس',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
              'name' => 'منزلية',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
              'name' => 'أدوية',
              'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
              'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ),
            array(
                'name' => 'مفروشات',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              array(
                'name' => 'ادوت مدرسية',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              array(
                'name' => 'مواد بناء',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              array(
                'name' => 'احذيه',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
              array(
                'name' => 'تحف',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
              ),
          ));
// ------------------------------------- Status Data ---------------------------------------------//
// DB::table('product_statuses')->truncate();//REmove if Laragon
DB::table('product_statuses')->insert(array(
    array(
        'name' => 'جديد',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'name' =>  'مستعمل',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'name' => 'قديم',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
));
// ------------------------------------- Organizations Data ---------------------------------------------//
// DB::table('organizations')->truncate();//REmove if Laragon
DB::table('organizations')->insert(array(
    array(
        'Org_Name' => 'تطوير',
        'Org_Desc' => 'منظمة تطوير للأبحاث',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'Org_Name' => 'H2O',
        'Org_Desc' => 'منظمة أتش تو أو للأعمال التطوعية',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'Org_Name' => 'طرابلس الخير',
        'Org_Desc' => 'جمعية طرابلس الخير الخيرية',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
));
// ------------------------------------- Sample Products Data ---------------------------------------------//
// DB::table('products')->truncate(); //REmove if Laragon
DB::table('products')->insert(array(
    array(
        'user_id' => '1',
        'category_id' => '1',
        'status_id' => '1',
        'name' => 'دواء بنادول',
        'description' => ' دواء بنادول يشفي صداع الرأس',
        'image'=>'BH5MCdobiz6vLYRWfGiX9TcQjIfrR3uoj7eljgpw.jpeg',
        'orders' => '0',
        'Available' => '0',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'user_id' => '3',
        'category_id' => '2',
        'status_id' => '2',
        'name' => 'بطاطين أطفال',
        'description' => 'بطاطين أطفال تحمي من صقع الشتاء',
        'image'=>'nLEo6ET7Iqij4YLvsFD9swrvTrtnL1lbqminPvlD.png',
        'orders' => '0',
        'Available' => '0',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'user_id' => '3',
        'category_id' => '3',
        'status_id' => '3',
        'name' => 'توصيل ركاب',
        'description' => 'توصيل ركاب داخل نطاق مدينة طرابلس',
        'image'=>'coAPoGd3aDsTsByiBWBxTl2WKEtnLLJqqwZOd1cs.jpeg',
        'orders' => '0',
        'Available' => '0',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
));
// ------------------------------------- Sample Events Data ---------------------------------------------//
// DB::table('events')->truncate();//REmove if Laragon
DB::table('events')->insert(array(
    array(
        'name' => 'توزيع دواء بنادول',
        'Date' => Carbon::now()->addDays(11)->format('Y-m-d'),
        'description' => ' دواء بنادول يشفي صداع الرأس',
        'organization_id' => '1',
        'image'=>'BH5MCdobiz6vLYRWfGiX9TcQjIfrR3uoj7eljgpw.jpeg',
        'Place' => 'عين زارة',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'name' => 'توزيع بطاطين أطفال',
        'Date' => Carbon::now()->addDays(12)->format('Y-m-d'),
        'description' => 'بطاطين أطفال تحمي من صقع الشتاء',
        'organization_id' => '2',
        'image'=>'nLEo6ET7Iqij4YLvsFD9swrvTrtnL1lbqminPvlD.png',
        'Place' => 'طريق السكة',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
    array(
        'name' => ' تدوير ركاب لتوصيلهم',
        'Date' => Carbon::now()->addDays(19)->format('Y-m-d'),
        'description' => 'توصيل ركاب داخل نطاق مدينة طرابلس',
        'organization_id' => '3',
        'image'=>'coAPoGd3aDsTsByiBWBxTl2WKEtnLLJqqwZOd1cs.jpeg',
        'Place' => 'رابلس المركز',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
    ),
));




}
}
