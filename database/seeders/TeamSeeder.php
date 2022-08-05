<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Team;
class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::create([
            'member_name' => 'George M. Baty',
            'team_slug' => 'LEAD DEVELOPER',
            'member_designation' => 'LEAD DEVELOPER',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => 'EMAIL DESIGN + INTEGRATION',
            'expertise_percent_three' => '90%',
            'expertise_name_four' => 'UI / UX EXPERTISE',
            'expertise_percent_four' => '40%',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => 'https://twitter.com/raj_sorker',
            'google_plus_link' => '',
            'youtube_link' => 'https://www.youtube.com/webtraininginstitute',
            'linkedin_link' => 'https://www.linkedin.com/in/webtraininginstitute/',
            'member_photo' => 'team_membar1.jpg',
            'created_at' => Carbon::now(),
        ]);

        Team::create([
            'member_name' => 'Nellie E. Crawford',
            'team_slug' => 'ART DIRECTOR',
            'member_designation' => 'ART DIRECTOR',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => '',
            'expertise_percent_three' => '',
            'expertise_name_four' => 'UI / UX EXPERTISE',
            'expertise_percent_four' => '40%',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => 'https://twitter.com/raj_sorker',
            'google_plus_link' => '',
            'youtube_link' => 'https://www.youtube.com/webtraininginstitute',
            'linkedin_link' => '',
            'member_photo' => 'team_membar2.jpg',
            'created_at' => Carbon::now(),
        ]);

        Team::create([
            'member_name' => 'Josephine Anderson',
            'team_slug' => 'SENIOR DESIGNER',
            'member_designation' => 'SENIOR DESIGNER',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => '',
            'expertise_percent_three' => '',
            'expertise_name_four' => '',
            'expertise_percent_four' => '',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => 'https://twitter.com/raj_sorker',
            'google_plus_link' => '',
            'youtube_link' => 'https://www.youtube.com/webtraininginstitute',
            'linkedin_link' => 'https://www.linkedin.com/in/webtraininginstitute/',
            'member_photo' => 'team_membar3.jpg',
            'created_at' => Carbon::now(),
        ]);

        Team::create([
            'member_name' => 'Ricardo T. Obrien',
            'team_slug' => 'CEO',
            'member_designation' => 'CEO',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => '',
            'expertise_percent_three' => '',
            'expertise_name_four' => 'WEB DEVELOPMENT',
            'expertise_percent_four' => '80%',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => '',
            'google_plus_link' => '',
            'youtube_link' => '',
            'linkedin_link' => 'https://www.linkedin.com/in/webtraininginstitute/',
            'member_photo' => 'team_membar4.jpg',
            'created_at' => Carbon::now(),
        ]);

        Team::create([
            'member_name' => 'Bill C. Damico',
            'team_slug' => 'MARKETER',
            'member_designation' => 'MARKETER',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => 'GRAPHICS DESIGN',
            'expertise_percent_three' => '66%',
            'expertise_name_four' => 'WEB DEVELOPMENT',
            'expertise_percent_four' => '80%',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => '',
            'google_plus_link' => '',
            'youtube_link' => '',
            'linkedin_link' => '',
            'member_photo' => 'team_membar5.jpg',
            'created_at' => Carbon::now(),
        ]);

        Team::create([
            'member_name' => 'Nicholas A. Davis',
            'team_slug' => 'TESTER',
            'member_designation' => 'LEAD DEVELOPER',
            'member_details' => 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sitmet consetetur sadipscing elitr sed diam nonumy.',
            'member_phone' => '1-800-123-4567',
            'member_email' => 'DotCreative@example.com',
            'expertise_name_one' => 'CUSTOM WEB DESIGN',
            'expertise_percent_one' => '78%',
            'expertise_name_two' => 'RESPONSIVE / MOBILE SITES',
            'expertise_percent_two' => '66%',
            'expertise_name_three' => 'EMAIL DESIGN + INTEGRATION',
            'expertise_percent_three' => '90%',
            'expertise_name_four' => 'UI / UX EXPERTISE',
            'expertise_percent_four' => '40%',
            'facebook_link' => 'https://www.facebook.com/rajsarkar.wti/',
            'twitter_link' => 'https://twitter.com/raj_sorker',
            'google_plus_link' => '',
            'youtube_link' => 'https://www.youtube.com/webtraininginstitute',
            'linkedin_link' => 'https://www.linkedin.com/in/webtraininginstitute/',
            'member_photo' => 'team_membar1.jpg',
            'created_at' => Carbon::now(),
        ]);
    }
}
