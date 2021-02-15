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
<?php
$appRoutes = array (
  /*   route, controller method  */

  array("user","index()"), //index
  array("title","index()"), //index
  array("title/1","show()"), //show
  array("title/1/edit", "edit() -> update() -> index()"), //edit
  array("title/create","create() -> store() -> index()"), //create
  array("title/1/delete","destroy() -> index()        //   Not implemented here."), //delete

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
          <a  href="{{ url('/').'/'.$appRoutes [$i][0] }}"> {{ url('/').'/'.$appRoutes [$i][0] }}</a>
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


                        {{-- <div class="shadow overflow-hidden border-b border-gray-300 sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-blue-100">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Route
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Link
                                    </th>
                                     <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-800 uppercase tracking-wider">
                                        Controller method
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                    <!-- User (index) -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                               /user
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                <a href="<?php /*echo( URL::to('/'));?>/user"><?php echo( URL::to('/')); */?>/user</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                index()
                                            </span>
                                        </td>
                                    </tr>
                                    <!-- Title (index) -->
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                /title
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                <a href="<?php /*echo( URL::to('/'));?>/title"><?php echo( URL::to('/')); */?>/title</a>
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <span class="px-6 py-4 whitespace-nowrap text-sm text-gray-600">
                                                index()
                                            </span>
                                        </td>
                                    </tr>
                            </tbody>
                            </table>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
