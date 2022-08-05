<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Blog;
use Carbon\Carbon;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Blog::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Google Analytics: An Introduction for New Users',
            'slug' => 'google-analytics:-n-introduction-for-new-users',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Scary B2B Marketing Mistakes & How to Avoid Them',
            'slug' => 'scary-b2b-marketing-mistakes-&-how-to-avoid-them',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Reach a New Audience with Paid Social Campaigns',
            'slug' => 'reach-a-new-audience-with-paid-social-campaigns',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'Reach a New Audience with Paid Social Campaigns',
            'slug' => 'reach-a-new-audience-with-paid-social-campaigns',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Reach a New Audience with Paid Social Campaigns',
            'slug' => 'reach-a-new-audience-with-paid-social-campaigns',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Reach a New Audience with Paid Social Campaigns',
            'slug' => 'reach-a-new-audience-with-paid-social-campaigns',
            'editors_comment' => 'This guys are awesome! It is hard to find a web design company',
            'editors_photo' => 'default_editor_img.png',
            's_description' => 'Tracking metrics are essential to evaluate the efficacy of any project or campaign. The same rings true for B2B website design projects...',
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog6.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
