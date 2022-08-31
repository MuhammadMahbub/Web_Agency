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
            'title' => 'Google Analytics : Une introduction pour les nouveaux utilisateurs',
            'slug' => 'google-analytics:-une-introduction-pour-les-nouveaux-utilisateurs',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 2,
            'title' => 'Erreurs effrayantes de marketing B2B et comment les éviter',
            'slug' => 'erreurs-effrayantes-de-marketing-B2B-et-comment-les-éviter',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 3,
            'title' => 'Atteindre un nouveau public avec des campagnes sociales payantes',
            'slug' => 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 4,
            'title' => 'Atteindre un nouveau public avec des campagnes sociales payantes',
            'slug' => 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 5,
            'title' => 'Atteindre un nouveau public avec des campagnes sociales payantes',
            'slug' => 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Blog::create([
            'user_id' => 1,
            'category_id' => 1,
            'title' => 'Atteindre un nouveau public avec des campagnes sociales payantes',
            'slug' => 'atteindre-un-nouveau-public-avec-des-campagnes-sociales-payantes',
            'editors_comment' => 'Ces gars sont géniaux ! Il est difficile de trouver une entreprise de conception de sites Web',
            'editors_photo' => 'default_editor_img.png',
            's_description' => "Les mesures de suivi sont essentielles pour évaluer l'efficacité de tout projet ou campagne. Il en va de même pour les projets de conception de sites Web B2B...",
            'description' => 'Donec vel sapien ac nibh accumsan dignissim. Nam rutrum lectus vel est bibendum, nec convallis sem finibus. Donec dictum metus ac orci volutpat porta et id nisl. Etiam gravida lobortis mauris nec tincidunt. Nam at facilisis mi. Etiam congue eleifend dolor, ac tempus dolor interdum at. Nullam luctus lorem lectus, eu luctus eros tincidunt eu. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nam ut accumsan dui, ac ultrices ipsum hendrerit posuere.',
            'blog_photo' => 'blog6.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
