<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>U05</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container mx-auto px-4">
            <div class="flex flex-col">
                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <br>
                        <h1 class="text-2xl">Routes</h1>
                        @include('menu')
<p>
@auth

    <?php
    $user = auth()->user();
    echo ($user->name." - You are logged in now!");
    ?>

@else
    You are not logged in!
@endauth
</p><br />
<?php
$res = DB::select('select MIN(id) as id from titles');
//var_dump($res);

$id = $res[0]->id;
if(empty($id)){

    DB::insert('INSERT INTO titles (name,user_id) VALUES ("Test Title",2) ');


    $res = DB::select('select MIN(id) as id from titles');
    $id = $res[0]->id;
    DB::insert('INSERT INTO genre_title (title_id,genre_id) VALUES ('.$id.',5) ');
}

$appRoutes = array (

  /*   route, controller method  */
  array("user","index()"), //index
  array("genre","index()"), //index
  array("title","index()"), //index
  array("listing","index()"), //index
  array("reviews","index()"), //index
  array("roles","index()"), //index
  array("title/".$id,"show()"), //show
  array("title/".$id."/edit", "edit() -> update() -> index()"), //edit
  array("title/create","create() -> store() -> index()"), //create
  array("title/".$id."/delete","destroy() -> index()"), //delete

);

for ( $i=0; $i< count($appRoutes);$i++){  ?>


<div class="bg-green-100 border border-green-200 overflow-hidden rounded-md">
  <div class="px-4 py-5 sm:px-6">
    <h3 class="text-lg leading-6 font-medium text-gray-900">
     {{ '/'.$appRoutes [$i][0] }}
    </h3>
  </div>

  <div class="border-t border-gray-400">
    <dl>
      <div class="bg-gray-100 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Url
        </dt>
        <dd class="mt-1 underline text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            <?php $del = strpos($appRoutes [$i][0],"delete");
                if($del === false){ ?>
                    <a  href="{{ url('/').'/'.$appRoutes [$i][0] }}"> {{ url('/').'/'.$appRoutes [$i][0] }}</a>
            <?php
                } else { ?>

                <form  class="text-sm font-medium"
                    onsubmit="return confirm('Do you really want to delete?');"
                    action="{{ action([App\Http\Controllers\TitleController::class, 'destroy'], $id )}}"
                    method="POST">
                    @method('DELETE')
                    @csrf
                    <span class=" text-sm text-gray-700">
                        <button type="submit" class="focus:outline-none  underline">
                         {{ url('/').'/'.$appRoutes [$i][0] }}
                        </button>
                    </span>
                </form>
            <?php  } ?>
        </dd>
      </div>
      <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
        <dt class="text-sm font-medium text-gray-500">
          Controller method
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
               {{ $appRoutes [$i][1] }}
        </dd>
      </div>
    </dl>
  </div>
</div>
<br /><br />

<?php } // end for loop over routes array ?>


                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
