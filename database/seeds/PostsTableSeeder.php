<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            Post::create([
                'name'          =>   'Ford DE ',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1600',
                'price_promo'   =>   '1890',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '1',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);

            Post::create([
                'name'          =>   'Opel 2',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1400',
                'price_promo'   =>   '1890',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '2',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                 ]);
            Post::create([
                'name'          =>   'Toyota Corola',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1600',
                'price_promo'   =>   '1660',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '3',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Audi 12 ',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1600',
                'price_promo'   =>   '1980',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '4',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'BMW GOLF',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1600',
                'price_promo'   =>   '1880',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '5',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Chevrolet TT ',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1900',
                'price_promo'   =>   '2550',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '6',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);

            Post::create([
                'name'          =>   'Datsun BS',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '3400',
                'price_promo'   =>   '5660',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '7',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
    
            Post::create([
                'name'          =>   'Ferrari BENZ',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1450',
                'price_promo'   =>   '2330',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '8',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Honda CHN',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1340',
                'price_promo'   =>   '1890',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '9',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Mercedes Class',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1600',
                'price_promo'   =>   '1760',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '10',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Nissan DB',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1200',
                'price_promo'   =>   '1850',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '11',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
            Post::create([
                'name'          =>   'Porsche d4',
                'description'   =>   'What is Lorem Ipsum?',
                'content'       =>   '<div>What is Lorem Ipsum?<br><br></div><div><strong>
                                    Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry s standard dummy text ever since the 1500s 
                                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries, but also the leap into electronic typesetting,
                                    remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets 
                                    containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker
                                    including versions of Lorem Ipsum.<br><br></div>',
                'price'         =>   '1200',
                'price_promo'   =>   '1440',
                'published_at'  =>   '2020-03-12 12:00:00',
                'category_id'   =>   '12',
                'image'  =>   'posts/bmq66oeHophEx9ZM91W5b3QVG4vQtajizKc4YI1x.jpeg'
                    ]);
    }
}


    
    