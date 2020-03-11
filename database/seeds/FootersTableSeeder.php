<?php

use Illuminate\Database\Seeder;
use App\Footer;

class FootersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Footer::create([
            'tel'        =>   '212 664647978',
            'email'      =>   'shop@gmail.com',
            'adress'     =>   'kenitra ville -maroc-',
            'url_face'   =>   'https://www.facebook.com/',
            'url_inst'   =>   'https://www.instagram.com/',
            'url_google' =>   'https://www.google.com/',
            'url_twiter' =>   'https://twitter.com/',
            'url_pinter' =>   'https://www.youtube.com/',
            'copyright'  =>   'Copyright .',
            'image'  =>   'footers/HDo2Vbut76MXLiEoiAAPai224Bqfwz80SBOt1nSL.png'
             ]);
        }
    
}

