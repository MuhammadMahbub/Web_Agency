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
            'faq_question' => 'QUE FAIT VOTRE SOCIÉTÉ DE CONSEIL ?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => "DANS QUELS SECTEURS D'ACTIVITÉ ÊTES-VOUS SPÉCIALISÉ ?",
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'COMMENT FONCTIONNE LE PROCESSUS ?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => "DANS QUELS SECTEURS D'ACTIVITÉ ÊTES-VOUS SPÉCIALISÉ ?",
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'POUVEZ-VOUS GARANTIR QUE NOTRE PLAN PERMETTRA DE LEVER DES CAPITAUX ?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => "QU'EST-CE QUI REND VOS PROJECTIONS FINANCIÈRES SPÉCIALES ?",
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
        Faq::create([
            'faq_question' => 'HOW DOES THE PROCESS WORK?',
            'faq_answer' => "Nous aidons les entrepreneurs à se préparer à lever des capitaux. Cela consiste généralement en une partie ou la totalité des services suivants : Veuillez noter que nous ne pouvons pas aider nos clients à lever des capitaux. Il s'agit d'un service qui est fortement réglementé. En général, seuls les courtiers agréés par la Financial Industry Regulatory Authority (FINRA) peuvent légalement proposer ce type de service. Veuillez vous assurer que tout trouveur auquel vous parlez est dûment autorisé par la FINRA avant de l'engager.",
            'created_at' => Carbon::now(),
        ]);
    }
}
