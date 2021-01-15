<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement(
            "INSERT INTO `pages` (`name`, `title`, `content`, `created_at`, `updated_at`) VALUES
            ('contact', 'Kontakt', '<div class=\"row\">\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"service-wrapper\">\r\n<h3>Aliquam in adipiscing</h3>\r\n<p>Praesent rhoncus mauris ac sollicitudin vehicula. Nam fringilla turpis turpis, at posuere turpis aliquet sit amet condimentum</p>\r\n<a class=\"btn\" href=\"#\">Read more</a></div>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"service-wrapper\">\r\n<h3>Curabitur mollis</h3>\r\n<p>Suspendisse eget libero mi. Fusce ligula orci, vulputate nec elit ultrices, ornare faucibus orci. Aenean lectus sapien, vehicula</p>\r\n<a class=\"btn\" href=\"#\">Read more</a></div>\r\n</div>\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"service-wrapper\">\r\n<h3>Vivamus mattis</h3>\r\n<p>Phasellus posuere et nisl ac commodo. Nulla facilisi. Sed tincidunt bibendum cursus. Aenean vulputate aliquam risus rutrum scelerisque</p>\r\n<a class=\"btn\" href=\"#\">Read more</a></div>\r\n</div>\r\n</div>\r\n<div class=\"row\">\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"box-simple\">\r\n<div class=\"icon\"><i class=\"icon-map-marker\"></i></div>\r\n<h3>Adresa</h3>\r\n<p>DOO Firma, Njego&scaron;eva 19 <br />19300 Negotin, <strong>Srbija</strong></p>\r\n</div>\r\n<!-- /.box-simple --></div>\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"box-simple\">\r\n<div class=\"icon\"><i class=\"icon-phone\"></i></div>\r\n<h3>Call center</h3>\r\n<p class=\"text-muted\">Kontaktirajte korisničku podr&scaron;ku.<br /> Radnim danima od 08:00 do 16:30 <br />subotom od 09:00 do 15:00.<br /> <strong> 011.3333.111, 011.3344.888</strong></p>\r\n</div>\r\n<!-- /.box-simple --></div>\r\n<div class=\"col-md-4 col-sm-6\">\r\n<div class=\"box-simple\">\r\n<div class=\"icon\"><i class=\"icon-envelope\"></i></div>\r\n<h3>E-mail</h3>\r\n<p class=\"text-muted\">Napi&scaron;ite nam e-mail.<br /> Odgovor ćete dobiti u najkraćem mogućem roku.<br /><strong><a href=\"#\">support@domain.com</a></strong></p>\r\n</div>\r\n<!-- /.box-simple --></div>\r\n</div>', '2021-01-15 11:56:17', '2021-01-15 11:56:17')"
        );
    }
}
