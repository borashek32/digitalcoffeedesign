<?php

namespace Database\Seeders\Projects\Project11;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title'        => 'Как писать код быстро и безболезненно?',
                'cat_id'  => '2',
                'desc'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptas ut maiores sint quo? Assumenda distinctio soluta vel nihil perferendis, totam similique fuga error optio eaque sapiente, aperiam facere laudantium libero natus iusto ad tempore, omnis voluptatum. Est voluptas corporis ipsam dolorum magni doloribus culpa earum similique nam necessitatibus, ipsum nisi provident mollitia, eum, debitis quasi dicta! Eaque, sunt! Maxime iste vel enim at nisi ratione inventore quasi odit eaque repudiandae quam voluptas in neque aperiam accusamus autem, veritatis officiis. Qui cupiditate numquam aliquam deleniti dicta minima enim, necessitatibus, nemo doloribus optio tempore quos iste labore suscipit! Ab, dolore nulla, soluta quod repellat maiores, nihil quia vel cumque eligendi officia omnis libero eos est! Saepe impedit inventore architecto maxime repudiandae similique nostrum molestiae atque? Nam aliquam officia mollitia voluptas, ex exercitationem optio accusantium. Dolorum modi voluptate velit repellat, recusandae deserunt accusantium in nisi voluptates eum officiis, labore exercitationem earum sit voluptatem a, deleniti consequatur? Sequi laudantium assumenda quidem nulla aliquam soluta architecto repellendus earum exercitationem? Natus voluptatum itaque, eligendi laboriosam ipsum, suscipit soluta tenetur vero exercitationem vel iure ullam velit. Cum voluptatum numquam magni consequatur distinctio, animi quasi sit enim eos dignissimos obcaecati, consectetur accusantium voluptatibus voluptatem ducimus sed architecto unde, veniam eligendi. Accusamus minus facilis quidem, sapiente fugit, eligendi perspiciatis quos fugiat voluptates quo rem unde laborum, quaerat eum numquam ea! Quod et ad praesentium at assumenda, doloremque nam molestias vero, perspiciatis quaerat itaque, incidunt deserunt. Error harum quae aut commodi maiores, optio ducimus neque amet, perspiciatis earum modi sed ea sapiente exercitationem eveniet. Adipisci corrupti reiciendis non. Doloribus animi facere rem? Illo voluptatem modi culpa earum eveniet qui error nam hic placeat. Excepturi iusto commodi, voluptatibus adipisci, consequuntur illum atque voluptate, totam dolorem nisi eos nam molestiae animi explicabo magnam corrupti velit doloribus ex. Provident consectetur facere voluptas?',
                'img'          => '/img/projects/project_11/post1.jpg',
                'video'        => null,
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50'
            ],
            [
                'title'        => 'Купил новый ноутбук за 150 000 руб',
                'cat_id'  => '3',
                'desc'         => null,
                'img'          => '',
                'video'        => '<iframe width="560" height="315" src="https://www.youtube.com/embed/p4zbV1MBJNs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50'
            ],
            [
                'title'        => 'Как я сходил на FrontEnd Conf 2021',
                'cat_id'  => '1',
                'desc'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptas ut maiores sint quo? Assumenda distinctio soluta vel nihil perferendis, totam similique fuga error optio eaque sapiente, aperiam facere laudantium libero natus iusto ad tempore, omnis voluptatum. Est voluptas corporis ipsam dolorum magni doloribus culpa earum similique nam necessitatibus, ipsum nisi provident mollitia, eum, debitis quasi dicta! Eaque, sunt! Maxime iste vel enim at nisi ratione inventore quasi odit eaque repudiandae quam voluptas in neque aperiam accusamus autem, veritatis officiis. Qui cupiditate numquam aliquam deleniti dicta minima enim, necessitatibus, nemo doloribus optio tempore quos iste labore suscipit! Ab, dolore nulla, soluta quod repellat maiores, nihil quia vel cumque eligendi officia omnis libero eos est! Saepe impedit inventore architecto maxime repudiandae similique nostrum molestiae atque? Nam aliquam officia mollitia voluptas, ex exercitationem optio accusantium. Dolorum modi voluptate velit repellat, recusandae deserunt accusantium in nisi voluptates eum officiis, labore exercitationem earum sit voluptatem a, deleniti consequatur? Sequi laudantium assumenda quidem nulla aliquam soluta architecto repellendus earum exercitationem? Natus voluptatum itaque, eligendi laboriosam ipsum, suscipit soluta tenetur vero exercitationem vel iure ullam velit. Cum voluptatum numquam magni consequatur distinctio, animi quasi sit enim eos dignissimos obcaecati, consectetur accusantium voluptatibus voluptatem ducimus sed architecto unde, veniam eligendi. Accusamus minus facilis quidem, sapiente fugit, eligendi perspiciatis quos fugiat voluptates quo rem unde laborum, quaerat eum numquam ea! Quod et ad praesentium at assumenda, doloremque nam molestias vero, perspiciatis quaerat itaque, incidunt deserunt. Error harum quae aut commodi maiores, optio ducimus neque amet, perspiciatis earum modi sed ea sapiente exercitationem eveniet. Adipisci corrupti reiciendis non. Doloribus animi facere rem? Illo voluptatem modi culpa earum eveniet qui error nam hic placeat. Excepturi iusto commodi, voluptatibus adipisci, consequuntur illum atque voluptate, totam dolorem nisi eos nam molestiae animi explicabo magnam corrupti velit doloribus ex. Provident consectetur facere voluptas?',
                'img'          => '/img/projects/project_11/post1.jpg',
                'video'        => null,
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50'
            ],
            [
                'title'        => null,
                'cat_id'  => '3',
                'desc'         => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque voluptas ut maiores sint quo? Assumenda distinctio soluta vel nihil perferendis, totam similique fuga error optio eaque sapiente, aperiam facere laudantium libero natus iusto ad tempore, omnis voluptatum. Est voluptas corporis ipsam dolorum magni doloribus culpa earum similique nam necessitatibus, ipsum nisi provident mollitia, eum, debitis quasi dicta! Eaque, sunt! Maxime iste vel enim at nisi ratione inventore quasi odit eaque repudiandae quam voluptas in neque aperiam accusamus autem, veritatis officiis. Qui cupiditate numquam aliquam deleniti dicta minima enim, necessitatibus, nemo doloribus optio tempore quos iste labore suscipit! Ab, dolore nulla, soluta quod repellat maiores, nihil quia vel cumque eligendi officia omnis libero eos est! Saepe impedit inventore architecto maxime repudiandae similique nostrum molestiae atque? Nam aliquam officia mollitia voluptas, ex exercitationem optio accusantium. Dolorum modi voluptate velit repellat, recusandae deserunt accusantium in nisi voluptates eum officiis, labore exercitationem earum sit voluptatem a, deleniti consequatur? Sequi laudantium assumenda quidem nulla aliquam soluta architecto repellendus earum exercitationem? Natus voluptatum itaque, eligendi laboriosam ipsum, suscipit soluta tenetur vero exercitationem vel iure ullam velit. Cum voluptatum numquam magni consequatur distinctio, animi quasi sit enim eos dignissimos obcaecati, consectetur accusantium voluptatibus voluptatem ducimus sed architecto unde, veniam eligendi. Accusamus minus facilis quidem, sapiente fugit, eligendi perspiciatis quos fugiat voluptates quo rem unde laborum, quaerat eum numquam ea! Quod et ad praesentium at assumenda, doloremque nam molestias vero, perspiciatis quaerat itaque, incidunt deserunt. Error harum quae aut commodi maiores, optio ducimus neque amet, perspiciatis earum modi sed ea sapiente exercitationem eveniet. Adipisci corrupti reiciendis non. Doloribus animi facere rem? Illo voluptatem modi culpa earum eveniet qui error nam hic placeat. Excepturi iusto commodi, voluptatibus adipisci, consequuntur illum atque voluptate, totam dolorem nisi eos nam molestiae animi explicabo magnam corrupti velit doloribus ex. Provident consectetur facere voluptas?',
                'img'          => null,
                'video'        => null,
                'created_at'   => '2022-06-03 13:53:50',
                'updated_at'   => '2022-06-03 13:53:50'
            ],
        ]);
    }
}
