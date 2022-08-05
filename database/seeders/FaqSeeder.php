<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Faq::create([
            'faq_question' => 'WHAT DOES YOUR COMPANY CONSULTING DO?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'WHAT INDUSTRIES DO YOU SPECIALIZE IN?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'HOW DOES THE PROCESS WORK?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'CAN YOU GUARANTEE THAT OUR PLAN WILL RAISE CAPITAL?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'WHAT INDUSTRIES DO YOU SPECIALIZE IN?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'CAN YOU GUARANTEE THAT OUR PLAN WILL RAISE CAPITAL?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'WHAT MAKES YOUR BUSINESS PLANS SO SPECIAL?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'WHAT MAKES YOUR FINANCIAL PROJECTIONS SPECIAL?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'HOW DOES THE PROCESS WORK?',
            'faq_answer' => 'We help entrepreneurs get ready to raise capital. This usually consists of some or all of the following services: Please note that we cannot help our clients raise capital. This is a service that is heavily regulated. In general, only brokers licensed with the Financial Industry Regulatory Authority (FINRA) can legally offer this type of service. Please make sure that any "finder" you talk to is properly licensed with FINRA before you hire them.',
            'created_at' => Carbon::now(),
        ]);
    }
}
