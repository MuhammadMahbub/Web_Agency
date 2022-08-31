<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'service_name' => 'Marketing',
            'service_slug' => 'merketing',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_1.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);

        Service::create([
            'service_name' => 'Optimisation du référencement',
            'service_slug' => 'optimisation-du-référencement',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_2.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);

        Service::create([
            'service_name' => 'Design',
            'service_slug' => 'design',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_3.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);

        Service::create([
            'service_name' => 'Optimisation du référencement',
            'service_slug' => 'optimisation-du-référencement',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_4.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);

        Service::create([
            'service_name' => 'Commerce électronique',
            'service_slug' => 'commerce-électronique',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_5.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);

        Service::create([
            'service_name' => 'Image de marque',
            'service_slug' => 'image-de-marque',
            'service_short_description' => "Le Lorem Ipsum est tout simplement le texte factice de l'industrie de l'impression et de la composition. Le Lorem Ipsum est le texte factice standard de l'industrie depuis les années 1500, lorsqu'un imprimeur inconnu a pris une galère de caractères et l'a brouillée pour en faire un livre de spécimens de caractères. Il a survécu non seulement à cinq siècles, mais aussi à l'avènement de la composition électronique, restant essentiellement inchangé. Elle a été popularisée dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec des logiciels de publication assistée par ordinateur comme Aldus PageMaker, qui incluent des versions de Lorem Ipsum.",
            'service_long_description' => "Il existe de nombreuses variations de passages de Lorem Ipsum, mais la majorité d'entre eux ont été altérés d'une manière ou d'une autre, par l'injection d'humour ou de mots aléatoires qui ne semblent même pas crédibles. Si vous voulez utiliser un passage de Lorem Ipsum, vous devez être sûr qu'il n'y a rien de gênant caché au milieu du texte. Tous les générateurs de Lorem Ipsum sur Internet ont tendance à répéter des morceaux prédéfinis selon les besoins, ce qui en fait le premier véritable générateur sur Internet. Il utilise un dictionnaire de plus de 200 mots latins, combiné à une poignée de structures de phrases modèles, pour générer un Lorem Ipsum d'apparence raisonnable. Le Lorem Ipsum généré est donc toujours exempt de répétitions, d'humour injecté, de mots non caractéristiques, etc.",
            'service_icon' => 'service_icon_6.png',
            'service_image' => 'default_service_img.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
