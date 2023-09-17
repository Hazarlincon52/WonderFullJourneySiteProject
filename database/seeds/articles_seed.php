<?php

use Illuminate\Database\Seeder;

class articles_seed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
        [
            'title' => 'Pantai Pasir Putih, Jakarta',
            'user_id' => '3',
            'category_id' => '1',
            'description' =>'Nama kawasan Pantai Indah Kapuk tengah naik daun di kalangan pecinta wisata kuliner. Namun, di sana juga ada pantai pasir putih yang bisa jadi rekomendasi. Berlokasi di kawasan Pantai Indah Kapuk 2 atau yang biasa disingkat PIK2, nama Pantai Pasir Putih segera menjadi buah bibir di kalangan traveler. Lokasinya persis setelah jembatan yang viral beberapa waktu lalu.',
            'image'=>'pasir putih.png'
        ]
        ,
        [
            'title' => 'Gunung Hayu, Cirebon',
            'user_id' => '3',
            'category_id' => '2',
            'description' =>'Wisata Situ Gunung Hayu Kuningan merupakan tempat wisata baru di kuningan yang masih dalam tahap pembangunan dan pembangunan. Situ Gunung Hayu sudah di buka untuk umum, keindahan alam dan sejuknya udara di situ gunung membuat wisatawan merasa betah dan nyaman.',
            'image'=>'gunung hayu.png'
        ]
        ,
        [
            'title' => 'Schitzo Hills, Citepus',
            'user_id' => '4',
            'category_id' => '3',
            'description' =>'kami berada di atas bukit dengan pemandangan indah Teluk Pelabuhan Ratu, dan di belakang kami terdapat hutan pegunungan yang rimbun. Semua dalam jangkauan dekat Anda akan menemukan air terjun yang indah, pantai yang indah, ombak selancar yang luar biasa, dan kota pantai yang sepi namun menawan dengan banyak tempat menarik untuk dikunjungi.',
            'image'=>'schitzo hills.png'
        ]
        ,
        [
            'title' => 'Pantai Indah Kapuk, Jakarta Utara',
            'user_id' => '4',
            'category_id' => '1',
            'description' =>'Pantai Indah Kapuk adalah area perumahan yang terkenal dengan kehidupan malamnya, yang meliputi taman bir, bar karaoke, dan klub dansa mainstream yang ramai. ',
            'image'=>'pantai indah kapuk.png'
        ]
        ]);
    }
}
