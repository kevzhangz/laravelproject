<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // User::create([
        //     'name' => "Kevin",
        //     'email' => "Kevin@gmail.com",
        //     'password' => bcrypt("12345")
        // ]);

        // User::create([
        //     'name' => "Leslie Mervin",
        //     'email' => "Leslie@gmail.com",
        //     'password' => bcrypt("54321")
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul pertama',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-pertama',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.</p><p>Aenean leo leo, sollicitudin non ultricies non, sagittis non elit. Vivamus maximus odio vitae turpis consequat congue. Sed non cursus augue, sit amet lacinia massa. Donec quam ipsum, laoreet at posuere id, facilisis ut massa. Maecenas vehicula convallis dolor ut consequat. Donec nibh lacus, placerat a lacus non, malesuada bibendum lorem. Nam fringilla turpis sed metus varius, sed molestie magna laoreet. Suspendisse at magna a odio ornare blandit. Nunc ultricies volutpat ipsum ac ullamcorper.</p><p>Morbi vulputate, ex nec pulvinar mollis, orci metus convallis ante, eget ultricies tortor arcu a erat. Cras at rutrum dui. Sed porttitor nunc ac mi condimentum pharetra. Vivamus efficitur interdum nunc. Vestibulum vitae fringilla nunc, sit amet euismod est. Duis iaculis nulla vitae dui vehicula pulvinar. Mauris sodales diam diam, suscipit varius nunc tincidunt id. Etiam feugiat tincidunt neque, sed consequat arcu semper sit amet. Phasellus ornare erat quis diam efficitur malesuada. Curabitur dolor sapien, tempor at pharetra non, vulputate vel ex. Maecenas finibus eu leo ut rutrum. Praesent gravida ultricies ipsum. Maecenas iaculis eu ligula sit amet commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis cursus tortor fringilla, pretium odio ac, consectetur justo.</p>"
        // ]);

        // Post::create([
        //     'title' => 'Judul kedua',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-kedua',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.</p><p>Aenean leo leo, sollicitudin non ultricies non, sagittis non elit. Vivamus maximus odio vitae turpis consequat congue. Sed non cursus augue, sit amet lacinia massa. Donec quam ipsum, laoreet at posuere id, facilisis ut massa. Maecenas vehicula convallis dolor ut consequat. Donec nibh lacus, placerat a lacus non, malesuada bibendum lorem. Nam fringilla turpis sed metus varius, sed molestie magna laoreet. Suspendisse at magna a odio ornare blandit. Nunc ultricies volutpat ipsum ac ullamcorper.</p><p>Morbi vulputate, ex nec pulvinar mollis, orci metus convallis ante, eget ultricies tortor arcu a erat. Cras at rutrum dui. Sed porttitor nunc ac mi condimentum pharetra. Vivamus efficitur interdum nunc. Vestibulum vitae fringilla nunc, sit amet euismod est. Duis iaculis nulla vitae dui vehicula pulvinar. Mauris sodales diam diam, suscipit varius nunc tincidunt id. Etiam feugiat tincidunt neque, sed consequat arcu semper sit amet. Phasellus ornare erat quis diam efficitur malesuada. Curabitur dolor sapien, tempor at pharetra non, vulputate vel ex. Maecenas finibus eu leo ut rutrum. Praesent gravida ultricies ipsum. Maecenas iaculis eu ligula sit amet commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis cursus tortor fringilla, pretium odio ac, consectetur justo.</p>"
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.</p><p>Aenean leo leo, sollicitudin non ultricies non, sagittis non elit. Vivamus maximus odio vitae turpis consequat congue. Sed non cursus augue, sit amet lacinia massa. Donec quam ipsum, laoreet at posuere id, facilisis ut massa. Maecenas vehicula convallis dolor ut consequat. Donec nibh lacus, placerat a lacus non, malesuada bibendum lorem. Nam fringilla turpis sed metus varius, sed molestie magna laoreet. Suspendisse at magna a odio ornare blandit. Nunc ultricies volutpat ipsum ac ullamcorper.</p><p>Morbi vulputate, ex nec pulvinar mollis, orci metus convallis ante, eget ultricies tortor arcu a erat. Cras at rutrum dui. Sed porttitor nunc ac mi condimentum pharetra. Vivamus efficitur interdum nunc. Vestibulum vitae fringilla nunc, sit amet euismod est. Duis iaculis nulla vitae dui vehicula pulvinar. Mauris sodales diam diam, suscipit varius nunc tincidunt id. Etiam feugiat tincidunt neque, sed consequat arcu semper sit amet. Phasellus ornare erat quis diam efficitur malesuada. Curabitur dolor sapien, tempor at pharetra non, vulputate vel ex. Maecenas finibus eu leo ut rutrum. Praesent gravida ultricies ipsum. Maecenas iaculis eu ligula sit amet commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis cursus tortor fringilla, pretium odio ac, consectetur justo.</p>"
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'judul-keempat',
        //     'excerpt' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.",
        //     'body' => "<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae viverra metus. Curabitur suscipit quam et varius accumsan. Aenean tincidunt pulvinar nibh, vitae imperdiet urna finibus euismod. Sed at varius justo. Maecenas vitae lacus sapien. Donec a lorem justo. Suspendisse potenti. In ac tincidunt justo, vitae hendrerit quam. Sed vel mi a felis fermentum vehicula consectetur sit amet felis. Vestibulum ac dictum ex, nec consectetur justo.</p><p>Aenean leo leo, sollicitudin non ultricies non, sagittis non elit. Vivamus maximus odio vitae turpis consequat congue. Sed non cursus augue, sit amet lacinia massa. Donec quam ipsum, laoreet at posuere id, facilisis ut massa. Maecenas vehicula convallis dolor ut consequat. Donec nibh lacus, placerat a lacus non, malesuada bibendum lorem. Nam fringilla turpis sed metus varius, sed molestie magna laoreet. Suspendisse at magna a odio ornare blandit. Nunc ultricies volutpat ipsum ac ullamcorper.</p><p>Morbi vulputate, ex nec pulvinar mollis, orci metus convallis ante, eget ultricies tortor arcu a erat. Cras at rutrum dui. Sed porttitor nunc ac mi condimentum pharetra. Vivamus efficitur interdum nunc. Vestibulum vitae fringilla nunc, sit amet euismod est. Duis iaculis nulla vitae dui vehicula pulvinar. Mauris sodales diam diam, suscipit varius nunc tincidunt id. Etiam feugiat tincidunt neque, sed consequat arcu semper sit amet. Phasellus ornare erat quis diam efficitur malesuada. Curabitur dolor sapien, tempor at pharetra non, vulputate vel ex. Maecenas finibus eu leo ut rutrum. Praesent gravida ultricies ipsum. Maecenas iaculis eu ligula sit amet commodo. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis cursus tortor fringilla, pretium odio ac, consectetur justo.</p>"
        // ]);

    }
}
