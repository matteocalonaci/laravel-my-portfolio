<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $newTechnology = new Technology();
        $newTechnology->name = 'Front-end';
        $newTechnology->description = 'A Front-End Developer is someone who creates websites and web applications. The difference between Front-End and Back-End is that Front-End refers to how a web page looks, while back-end refers to how it works.';
        $newTechnology->icon ="fa-solid fa-laptop";
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'Back-end';
        $newTechnology->description = 'The Back-end developer works "behind the scenes" of a site or web application and takes care of its operation on the data and server side, therefore on what users do not see when visiting the site.';
        $newTechnology->icon ="fa-solid fa-database";
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'Full stack';
        $newTechnology->description = "Full-stack developers design and create websites and applications for various platforms. A full-stack developer's job description might include the following: Develop and maintain web services and interfaces. Contribute to front-end and back-end development processes. Build new product features or APIs.";
        $newTechnology->icon ='fa-solid fa-graduation-cap';
        $newTechnology->save();

        $newTechnology = new Technology();
        $newTechnology->name = 'Designer';
        $newTechnology->description = 'The design engineer, also known as a design engineer, is the professional figure responsible for carrying out complex tasks in the design, development and testing of the physical components of products and systems.';
        $newTechnology->icon ="fa-solid fa-pen-nib";
        $newTechnology->save();



    }
}
