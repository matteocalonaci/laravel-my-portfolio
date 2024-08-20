<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newLanguage = new Language();
        $newLanguage->name = 'JavaScript';
        $newLanguage->description = 'In informatica JavaScript è un linguaggio di programmazione multi paradigma orientato agli eventi, utilizzato sia nella programmazione lato client web che lato server per la creazione di RESTful API, ...';
        $newLanguage->icon = "fa-brands fa-js";
        $newLanguage->save();

        $newLanguage = new Language();
        $newLanguage->name = 'Laravel';
        $newLanguage->description = 'Laravel è un framework open source di tipo MVC scritto in PHP per lo sviluppo di applicazioni web, creato nel 2011 da Taylor Otwell come derivazione di Symfony.';
        $newLanguage->icon = "fa-brands fa-laravel";
        $newLanguage->save();

        $newLanguage = new Language();
        $newLanguage->name = 'PHP';
        $newLanguage->description = "PHP è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche. L'interprete PHP è un software libero distribuito sotto la licenza PHP.";
        $newLanguage->icon = "fa-brands fa-php";
        $newLanguage->save();

        $newLanguage = new Language();
        $newLanguage->name = 'Vue JS';
        $newLanguage->description = 'Vue.js è un framework JavaScript open source in configurazione Model–view–viewmodel per la creazione di interfacce utente e single-page applications. È stato creato da Evan You ed è gestito da lui stesso e i membri attivi del core team, provenienti da varie società come Netlify e Netguru. ';
        $newLanguage->icon = "fa-brands fa-vuejs";
        $newLanguage->save();

        $newLanguage = new Language();
        $newLanguage->name = 'HTML';
        $newLanguage->description = 'HTML è un acronimo che significa letteralmente "Hyper Text Markup Language", ovvero "Linguaggio a marcatori per ipertesti". Si può spiegare in maniera più semplice: HTML è un linguaggio che permette di impaginare e formattare pagine collegate fra di loro attraverso link - ovvero, i siti web. ';
        $newLanguage->icon = "fa-brands fa-html5";
        $newLanguage->save();


        $newLanguage = new Language();
        $newLanguage->name = 'CSS';
        $newLanguage->description = "CSS, o Cascading Style Sheets, è un linguaggio usato per programmare la resa grafica di documenti scritti in un linguaggio di markup, come HTML e XML. Le classi CSS sono usate per specificare attributi grafici come font, dimensione, colore, spaziatura, bordo e posizione degli elementi all'interno di una rappresentazione web.";
        $newLanguage->icon = "fa-brands fa-css3";
        $newLanguage->save();

    }
}
