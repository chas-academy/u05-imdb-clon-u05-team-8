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

        @include('menu')


        <nav class=" max-w-5xl mx-auto mt-16 rounded-full py-3 bg-gray-800">
            <ul class="flex items-center justify-between ">
                <li class="lg:mr-14 mr-2 ml-2 lg:text-3xl md:text-2xl text-xs">
                <a class="text-gray-300 hover:underline hover:text-gray-200" href="/">Home</a>
                </li>
                <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
                <a class="text-gray-300 hover:underline hover:text-gray-200" href="/reviews">Reviews</a>
                </li>
                <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
                <a class="text-gray-300 hover:underline hover:text-gray-200" href="#">New Movies</a>
                </li>
                <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
                <a class="text-gray-300 hover:underline hover:text-gray-200" href="#">Top Movies</a>
                </li>
                <li class="lg:mr-14 mr-2 lg:text-3xl md:text-2xl text-xs">
                <a class="text-gray-300 hover:underline hover:text-gray-200" href="/listing">Watchlists</a>
                </li>
            </ul>
        </nav>

        @if(session()->has('message'))

            <div class="alert alert-success p-6 m-10 bg-green-50">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="py-4 lg:mt-36 md:mt-18 mt-9">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-1">
                <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">New Movies</h3>
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div class="lg:w-40 md:w-28 w-16">
                            <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                            <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/title/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false"><path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path></svg>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="py-4 lg:mt-56 md:mt-28 mt-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-1">
                <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">New Tv-Shows</h3>
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div class="lg:w-40 md:w-28 w-16">
                            <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                            <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/title/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false"><path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path></svg>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 lg:mt-56 md:mt-28 mt-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-1">
                <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">Movvie Tips</h3>
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div class="lg:w-40 md:w-28 w-16">
                            <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                            <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/title/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false"><path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path></svg>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 lg:mt-56 md:mt-28 mt-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-1">
                <h3 class="lg:text-4xl mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">TV-Show Tips</h3>
                <div class="bg-white overflow-hidden sm:rounded-lg">
                    <div class="text-2xl pt-6 bg-white grid grid-cols-5 gap-1">
                        @foreach($titles->slice(0, 5) as $title)
                        <div class="lg:w-40 md:w-28 w-16">
                            <p class="lg:text-2xl text-sm lg:h-40 h-28 ml-1 font-semibold">{{$title->name}}</p>
                            <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-1" href="{{ url('/').'/title/'.$title->id}}">More<svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false"><path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path></svg>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="py-12 lg:mt-56 md:mt-28 mt-16">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 px-4">
                <h3 class="lg:text-4xl text-center mb-8 text-2xl pb-6 bg-white border-b-4 border-gray-400">Check out all reviews for some movie inspiration &nbsp;
                     <a class="lg:text-xl text-xs text-gray-500 hover:text-gray-800 hover:underline ml-3" href="{{ url('/').'/reviews/'}}">Go to all reviews <svg class="w-4 inline-block align-baseline" fill="currentColor" aria-hidden="true" viewBox="0 -11 24 24" width="24" height="24" focusable="false"><path d="M13.71 4.29l-1.42 1.42 5.3 5.29H3v2h14.59l-5.3 5.29 1.42 1.42 7.7-7.71-7.7-7.71z"></path></svg>
                </a></h3>
            </div>
        </div>


<footer class="imdb-footer VUGIPjGgHtzvbHiU19iTQ" "mr-16 text-3xl">
<div class="_32mc4FXftSbwhpJwmGCYUQ">
<div class="ipc-page-content-container ipc-page-content-container--center" role="presentation">
<a class="ipc-button ipc-button--double-padding ipc-button--center-align-content ipc-button--default-height ipc-button--core-accent1 ipc-button--theme-baseAlt imdb-footer__open-in-app-button" role="button" tabindex="0" aria-disabled="false" href="/whitelist-offsite?url=https%3A%2F%2Fslyb.app.link%2FSKdyQ6A449&amp;page-action=ft-gettheapp&amp;ref=ft_apps">
<div class="ipc-button__text"><li class="mr-16 text-2xl">The IMDb Media</li></div>
</a>
</div>
</div>
<div class="ipc-page-content-container ipc-page-content-container--center _2AR8CsLqQAMCT1_Q7eidSY" role="presentation">
<div class="imdb-footer__links">
<div class="_2Wc8yXs8SzGv7TVS-oOmhT">
<ul class="ipc-inline-list _1O3-k0VDASm1IeBrfofV4g baseAlt" role="presentation">

        <nav class="flex items-center justify-between max-w-7xl mx-auto sm:px-6 lg:px-8 pl-6 mt-16">
        <ul class="flex">

<li role="presentation" class="ipc-inline-list__item"><a class="ipc-icon-link ipc-icon-link--baseAlt ipc-icon-link--onBase" title="Facebook" role="button" tabindex="0" aria-label="Facebook" aria-disabled="false" target="_blank" rel="nofollow noopener" href="/whitelist-offsite?url=https%3A%2F%2Ffacebook.com%2Fimdb&amp;page-action=fol_fb&amp;ref=ft_fol_fb"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="ipc-icon ipc-icon--facebook" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M20.896 2H3.104C2.494 2 2 2.494 2 3.104v17.792C2 21.506 2.494 22 3.104 22h9.579v-7.745h-2.607v-3.018h2.607V9.01c0-2.584 1.577-3.99 3.882-3.99 1.104 0 2.052.082 2.329.119v2.7h-1.598c-1.254 0-1.496.595-1.496 1.47v1.927h2.989l-.39 3.018h-2.6V22h5.097c.61 0 1.104-.494 1.104-1.104V3.104C22 2.494 21.506 2 20.896 2"></path></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a class="ipc-icon-link ipc-icon-link--baseAlt ipc-icon-link--onBase" title="Instagram" role="button" tabindex="0" aria-label="Instagram" aria-disabled="false" target="_blank" rel="nofollow noopener" href="/whitelist-offsite?url=https%3A%2F%2Finstagram.com%2Fimdb&amp;page-action=fol_inst&amp;ref=ft_fol_inst"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="ipc-icon ipc-icon--instagram" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M11.997 2.04c-2.715 0-3.056.011-4.122.06-1.064.048-1.79.217-2.426.463a4.901 4.901 0 0 0-1.771 1.151 4.89 4.89 0 0 0-1.153 1.767c-.247.635-.416 1.36-.465 2.422C2.011 8.967 2 9.307 2 12.017s.011 3.049.06 4.113c.049 1.062.218 1.787.465 2.422a4.89 4.89 0 0 0 1.153 1.767 4.901 4.901 0 0 0 1.77 1.15c.636.248 1.363.416 2.427.465 1.066.048 1.407.06 4.122.06s3.055-.012 4.122-.06c1.064-.049 1.79-.217 2.426-.464a4.901 4.901 0 0 0 1.77-1.15 4.89 4.89 0 0 0 1.154-1.768c.247-.635.416-1.36.465-2.422.048-1.064.06-1.404.06-4.113 0-2.71-.012-3.05-.06-4.114-.049-1.062-.218-1.787-.465-2.422a4.89 4.89 0 0 0-1.153-1.767 4.901 4.901 0 0 0-1.77-1.15c-.637-.247-1.363-.416-2.427-.464-1.067-.049-1.407-.06-4.122-.06m0 1.797c2.67 0 2.985.01 4.04.058.974.045 1.503.207 1.856.344.466.181.8.397 1.15.746.349.35.566.682.747 1.147.137.352.3.88.344 1.853.048 1.052.058 1.368.058 4.032 0 2.664-.01 2.98-.058 4.031-.044.973-.207 1.501-.344 1.853a3.09 3.09 0 0 1-.748 1.147c-.35.35-.683.565-1.15.746-.352.137-.88.3-1.856.344-1.054.048-1.37.058-4.04.058-2.669 0-2.985-.01-4.039-.058-.974-.044-1.504-.207-1.856-.344a3.098 3.098 0 0 1-1.15-.746 3.09 3.09 0 0 1-.747-1.147c-.137-.352-.3-.88-.344-1.853-.049-1.052-.059-1.367-.059-4.031 0-2.664.01-2.98.059-4.032.044-.973.207-1.501.344-1.853a3.09 3.09 0 0 1 .748-1.147c.35-.349.682-.565 1.149-.746.352-.137.882-.3 1.856-.344 1.054-.048 1.37-.058 4.04-.058"></path><path d="M11.997 15.342a3.329 3.329 0 0 1-3.332-3.325 3.329 3.329 0 0 1 3.332-3.326 3.329 3.329 0 0 1 3.332 3.326 3.329 3.329 0 0 1-3.332 3.325m0-8.449a5.128 5.128 0 0 0-5.134 5.124 5.128 5.128 0 0 0 5.134 5.123 5.128 5.128 0 0 0 5.133-5.123 5.128 5.128 0 0 0-5.133-5.124m6.536-.203c0 .662-.537 1.198-1.2 1.198a1.198 1.198 0 1 1 1.2-1.197">
</path>
</svg>
</a>
</li>
<li role="presentation" class="ipc-inline-list__item"><a class="ipc-icon-link ipc-icon-link--baseAlt ipc-icon-link--onBase" title="Twitch" role="button" tabindex="0" aria-label="Twitch" aria-disabled="false" target="_blank" rel="nofollow noopener" href="/whitelist-offsite?url=https%3A%2F%2Ftwitch.tv%2FIMDb&amp;page-action=fol_twch&amp;ref=ft_fol_twch"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="ipc-icon ipc-icon--twitch" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M3.406 2h18.596v12.814l-5.469 5.47H12.47L9.813 22.94H7.001v-2.657H2V5.594L3.406 2zm16.721 11.876v-10H5.125v13.126h4.22v2.656L12 17.002h5l3.126-3.126z">
</path>
<path d="M17.002 7.47v5.469h-1.875v-5.47zM12.001 7.47v5.469h-1.875v-5.47z">
</path>
</svg>
</a>
</li>
<li role="presentation" class="ipc-inline-list__item"><a class="ipc-icon-link ipc-icon-link--baseAlt ipc-icon-link--onBase" title="Twitter" role="button" tabindex="0" aria-label="Twitter" aria-disabled="false" target="_blank" rel="nofollow noopener" href="/whitelist-offsite?url=https%3A%2F%2Ftwitter.com%2Fimdb&amp;page-action=fol_tw&amp;ref=ft_fol_tw"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="ipc-icon ipc-icon--twitter" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M8.29 19.936c7.547 0 11.675-6.13 11.675-11.446 0-.175-.004-.348-.012-.52A8.259 8.259 0 0 0 22 5.886a8.319 8.319 0 0 1-2.356.633 4.052 4.052 0 0 0 1.804-2.225c-.793.46-1.67.796-2.606.976A4.138 4.138 0 0 0 15.847 4c-2.266 0-4.104 1.802-4.104 4.023 0 .315.036.622.107.917a11.728 11.728 0 0 1-8.458-4.203 3.949 3.949 0 0 0-.556 2.022 4 4 0 0 0 1.826 3.348 4.136 4.136 0 0 1-1.858-.503l-.001.051c0 1.949 1.415 3.575 3.292 3.944a4.193 4.193 0 0 1-1.853.07c.522 1.597 2.037 2.76 3.833 2.793a8.34 8.34 0 0 1-5.096 1.722A8.51 8.51 0 0 1 2 18.13a11.785 11.785 0 0 0 6.29 1.807">
</path>
</svg>
</a>
</li>
<li role="presentation" class="ipc-inline-list__item"><a class="ipc-icon-link ipc-icon-link--baseAlt ipc-icon-link--onBase" title="YouTube" role="button" tabindex="0" aria-label="YouTube" aria-disabled="false" target="_blank" rel="nofollow noopener" href="/whitelist-offsite?url=https%3A%2F%2Fyoutube.com%2Fimdb%2F&amp;page-action=fol_yt&amp;ref=ft_fol_yt"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" class="ipc-icon ipc-icon--youtube" viewBox="0 0 24 24" fill="currentColor" role="presentation"><path d="M9.955 14.955v-5.91L15.182 12l-5.227 2.955zm11.627-7.769a2.505 2.505 0 0 0-1.768-1.768C18.254 5 12 5 12 5s-6.254 0-7.814.418c-.86.23-1.538.908-1.768 1.768C2 8.746 2 12 2 12s0 3.254.418 4.814c.23.86.908 1.538 1.768 1.768C5.746 19 12 19 12 19s6.254 0 7.814-.418a2.505 2.505 0 0 0 1.768-1.768C22 15.254 22 12 22 12s0-3.254-.418-4.814z"></path></svg></a></li></ul></div><div>
   </ul>
        </nav>
<ul class="ipc-inline-list _1O3-k0VDASm1IeBrfofV4g baseAlt" role="presentation"><li role="presentation" class="ipc-inline-list__item zgFV3U-XECrqVQnyDbx2B"><a href="/whitelist-offsite?url=https%3A%2F%2Fslyb.app.link%2FSKdyQ6A449&amp;page-action=ft-gettheapp&amp;ref=ft_apps" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Get the IMDb App</li ><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://help.imdb.com/imdb?ref_=ft_hlp" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Help</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://help.imdb.com/article/imdb/general-information/imdb-site-index/GNCX7BHNSPBTFALQ?ref_=ft_si#so" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Site Index</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://pro.imdb.com?ref_=ft_pro&amp;rf=cons_tf_pro" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">IMDbPro</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://www.boxofficemojo.com" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Box Office Mojo</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://developer.imdb.com/?ref=ft_ds" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">IMDb Developer</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li></ul></div><div><ul class="ipc-inline-list _1O3-k0VDASm1IeBrfofV4g baseAlt" role="presentation"><li role="presentation" class="ipc-inline-list__item"><a href="https://www.imdb.com/pressroom/?ref_=ft_pr" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color"><li class="mr-16 text-2xl">Press Room</li></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://advertising.amazon.com/resources/ad-specs/imdb/?ref_=a20m_us_spcs_imdb" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Advertising</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="https://www.amazon.jobs/en/teams/imdb?ref_=ft_jb" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Jobs</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><a href="/conditions?ref_=ft_cou" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color"><li class="mr-16 text-2xl">Conditions of Use</li></a></li><li role="presentation" class="ipc-inline-list__item"><a href="/privacy?ref_=ft_pvc" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color"><li class="mr-16 text-2xl">Privacy Policy</li></a></li><li role="presentation" class="ipc-inline-list__item"><a href="/whitelist-offsite?url=https%3A%2F%2Fwww.amazon.com%2Fb%2F%3F%26node%3D5160028011%26ref_%3Dft_iba&amp;page-action=ft-iba&amp;ref=ft_iba" target="_blank" class="ipc-link ipc-link--baseAlt ipc-link--touch-target ipc-link--inherit-color ipc-link--launch"><li class="mr-16 text-2xl">Interest-Based Ads</li><svg class="ipc-link__launch-icon" width="10" height="10" viewBox="0 0 10 10" xmlns="http://www.w3.org/2000/svg" fill="#000000"><g><path d="M9,9 L1,9 L1,1 L4,1 L4,0 L-1.42108547e-14,0 L-1.42108547e-14,10 L10,10 L10,6 L9,6 L9,9 Z M6,0 L6,1 L8,1 L2.998122,6.03786058 L3.998122,7.03786058 L9,2 L9,4 L10,4 L10,0 L6,0 Z"></path></g></svg></a></li><li role="presentation" class="ipc-inline-list__item"><div id="teconsent" class="_2mulh8fx3PjJyxvyLovP4w"></div></li></ul></div></div><div class="imdb-footer__logo _1eKbSAFyeJgUyBUy2VbcS_"><svg aria-label="IMDb, an Amazon company" title="IMDb, an Amazon company" width="160" height="18" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><path d="M26.707 2.45c-3.227 2.374-7.906 3.637-11.935 3.637C9.125 6.087 4.04 4.006.193.542-.11.27.161-.101.523.109 4.675 2.517 9.81 3.968 15.111 3.968c3.577 0 7.51-.74 11.127-2.27.546-.23 1.003.358.47.752z" id="ftr__a"></path><path d="M4.113 1.677C3.7 1.15 1.385 1.427.344 1.552c-.315.037-.364-.237-.08-.436C2.112-.178 5.138.196 5.49.629c.354.437-.093 3.462-1.824 4.906-.266.222-.52.104-.401-.19.39-.97 1.261-3.14.848-3.668z" id="ftr__c"></path><path d="M.435 1.805V.548A.311.311 0 0 1 .755.23l5.65-.001c.181 0 .326.13.326.317v1.078c-.002.181-.154.417-.425.791L3.378 6.582c1.087-.026 2.236.137 3.224.69.222.125.282.309.3.49v1.342c0 .185-.203.398-.417.287-1.74-.908-4.047-1.008-5.97.011-.197.104-.403-.107-.403-.292V7.835c0-.204.004-.552.21-.863l3.392-4.85H.761a.314.314 0 0 1-.326-.317z" id="ftr__e"></path><path d="M2.247 9.655H.528a.323.323 0 0 1-.307-.29L.222.569C.222.393.37.253.554.253h1.601a.323.323 0 0 1 .313.295v1.148h.031C2.917.586 3.703.067 4.762.067c1.075 0 1.75.518 2.23 1.629C7.41.586 8.358.067 9.369.067c.722 0 1.508.296 1.99.963.545.74.433 1.813.433 2.757l-.002 5.551a.324.324 0 0 1-.331.317H9.74a.321.321 0 0 1-.308-.316l-.001-4.663c0-.37.032-1.296-.048-1.647-.128-.593-.514-.76-1.011-.76-.418 0-.85.278-1.027.722-.177.445-.161 1.185-.161 1.685v4.662a.323.323 0 0 1-.331.317H5.137a.322.322 0 0 1-.31-.316l-.001-4.663c0-.981.16-2.424-1.059-2.424-1.236 0-1.188 1.406-1.188 2.424v4.662a.324.324 0 0 1-.332.317z" id="ftr__g"></path><path d="M4.037.067c2.551 0 3.931 2.184 3.931 4.96 0 2.684-1.524 4.814-3.931 4.814C1.533 9.84.169 7.656.169 4.935.17 2.195 1.55.067 4.037.067zm.015 1.796c-1.267 0-1.347 1.721-1.347 2.795 0 1.073-.016 3.368 1.332 3.368 1.332 0 1.395-1.851 1.395-2.98 0-.74-.031-1.629-.256-2.332-.193-.61-.578-.851-1.124-.851z" id="ftr__i">
</path>
<path d="M2.206 9.655H.493a.321.321 0 0 1-.308-.316L.182.54a.325.325 0 0 1 .33-.287h1.595c.15.007.274.109.305.245v1.346h.033C2.926.641 3.6.067 4.788.067c.77 0 1.524.277 2.006 1.037.449.703.449 1.887.449 2.739v5.535a.325.325 0 0 1-.33.277H5.19a.324.324 0 0 1-.306-.277V4.602c0-.962.113-2.37-1.075-2.37-.418 0-.803.278-.995.704-.24.537-.273 1.074-.273 1.666v4.736a.328.328 0 0 1-.335.317z" id="ftr__k">
</path><path d="M8.314 8.295c.11.156.134.341-.006.455-.35.294-.974.834-1.318 1.139l-.004-.004a.357.357 0 0 1-.406.04c-.571-.473-.673-.692-.986-1.142-.943.958-1.611 1.246-2.834 1.246-1.447 0-2.573-.89-2.573-2.672 0-1.39.756-2.337 1.833-2.8.933-.409 2.235-.483 3.233-.595V3.74c0-.409.032-.89-.209-1.243-.21-.315-.611-.445-.965-.445-.656 0-1.238.335-1.382 1.029-.03.154-.143.307-.298.315l-1.667-.18c-.14-.032-.297-.144-.256-.358C.859.842 2.684.234 4.32.234c.837 0 1.93.222 2.59.853.836.78.755 1.818.755 2.95v2.67c0 .804.335 1.155.65 1.588zM5.253 5.706v-.37c-1.244 0-2.557.265-2.557 1.724 0 .742.386 1.244 1.045 1.244.483 0 .917-.297 1.19-.78.338-.593.322-1.15.322-1.818z" id="ftr__m">
</path>
<path d="M8.203 8.295c.11.156.135.341-.005.455-.352.294-.976.834-1.319 1.139l-.004-.004a.356.356 0 0 1-.406.04c-.571-.473-.673-.692-.985-1.142-.944.958-1.613 1.246-2.835 1.246-1.447 0-2.573-.89-2.573-2.672 0-1.39.756-2.337 1.833-2.8.933-.409 2.236-.483 3.233-.595V3.74c0-.409.032-.89-.21-1.243-.208-.315-.61-.445-.964-.445-.656 0-1.239.335-1.382 1.029-.03.154-.142.307-.298.315l-1.666-.18C.48 3.184.324 3.072.365 2.858.748.842 2.573.234 4.209.234c.836 0 1.93.222 2.59.853.835.78.755 1.818.755 2.95v2.67c0 .804.335 1.155.649 1.588zM5.142 5.706v-.37c-1.243 0-2.557.265-2.557 1.724 0 .742.386 1.244 1.045 1.244.482 0 .917-.297 1.19-.78.338-.593.322-1.15.322-1.818z" id="ftr__o">
</path><path d="M2.935 10.148c-.88 0-1.583-.25-2.11-.75-.527-.501-.79-1.171-.79-2.011 0-.902.322-1.622.967-2.159.644-.538 1.511-.806 2.602-.806.694 0 1.475.104 2.342.315V3.513c0-.667-.151-1.136-.455-1.408-.304-.271-.821-.407-1.553-.407-.855 0-1.691.123-2.509.37-.285.087-.464.13-.539.13-.148 0-.223-.111-.223-.334v-.5c0-.16.025-.278.075-.352C.79.938.89.87 1.039.808c.383-.173.87-.312 1.459-.417A9.997 9.997 0 0 1 4.255.234c1.177 0 2.045.244 2.602.731.557.489.836 1.233.836 2.233v6.338c0 .247-.124.37-.372.37h-.798c-.236 0-.373-.117-.41-.351l-.093-.612c-.445.383-.939.68-1.477.89-.54.21-1.076.315-1.608.315zm.446-1.39c.41 0 .836-.08 1.282-.241.447-.16.874-.395 1.283-.704v-1.89a8.408 8.408 0 0 0-1.97-.241c-1.401 0-2.1.537-2.1 1.612 0 .47.13.831.39 1.084.26.254.632.38 1.115.38z" id="ftr__q">
</path>
<path d="M.467 9.907c-.248 0-.372-.124-.372-.37V.883C.095.635.219.51.467.51h.817c.125 0 .22.026.288.075.068.05.115.142.14.277l.111.686C3 .672 4.24.234 5.541.234c.904 0 1.592.238 2.063.713.471.476.707 1.165.707 2.066v6.524c0 .246-.124.37-.372.37H6.842c-.248 0-.372-.124-.372-.37V3.625c0-.655-.133-1.137-.4-1.445-.266-.31-.684-.464-1.254-.464-.979 0-1.94.315-2.881.946v6.875c0 .246-.125.37-.372.37H.467z" id="ftr__s">
</path><path d="M4.641 9.859c-1.462 0-2.58-.417-3.355-1.251C.51 7.774.124 6.566.124 4.985c0-1.569.4-2.783 1.2-3.641C2.121.486 3.252.055 4.714.055c.67 0 1.326.118 1.971.353.136.05.232.111.288.185.056.074.083.198.083.37v.501c0 .248-.08.37-.241.37-.062 0-.162-.018-.297-.055a5.488 5.488 0 0 0-1.544-.222c-1.04 0-1.79.262-2.248.787-.459.526-.688 1.362-.688 2.511v.241c0 1.124.232 1.949.697 2.474.465.525 1.198.788 2.203.788a5.98 5.98 0 0 0 1.672-.26c.136-.037.23-.056.279-.056.161 0 .242.124.242.371v.5c0 .162-.025.279-.075.353-.05.074-.148.142-.297.204-.608.259-1.314.389-2.119.389z" id="ftr__u"></path><path d="M4.598 10.185c-1.413 0-2.516-.438-3.31-1.316C.497 7.992.1 6.769.1 5.199c0-1.555.397-2.773 1.19-3.65C2.082.673 3.185.235 4.598.235c1.412 0 2.515.438 3.308 1.316.793.876 1.19 2.094 1.19 3.65 0 1.569-.397 2.792-1.19 3.669-.793.878-1.896 1.316-3.308 1.316zm0-1.483c1.747 0 2.62-1.167 2.62-3.502 0-2.323-.873-3.484-2.62-3.484S1.977 2.877 1.977 5.2c0 2.335.874 3.502 2.62 3.502z" id="ftr__w">
</path><path d="M.396 9.907c-.248 0-.371-.124-.371-.37V.883C.025.635.148.51.396.51h.818a.49.49 0 0 1 .288.075c.068.05.115.142.14.277l.111.594C2.943.64 4.102.234 5.23.234c1.152 0 1.934.438 2.342 1.315C8.798.672 10.025.234 11.25.234c.856 0 1.512.24 1.971.722.458.482.688 1.168.688 2.057v6.524c0 .246-.124.37-.372.37h-1.097c-.248 0-.371-.124-.371-.37V3.533c0-.618-.119-1.075-.354-1.372-.235-.297-.607-.445-1.115-.445-.904 0-1.815.278-2.732.834.012.087.018.18.018.278v6.709c0 .246-.124.37-.372.37H6.42c-.249 0-.372-.124-.372-.37V3.533c0-.618-.118-1.075-.353-1.372-.235-.297-.608-.445-1.115-.445-.942 0-1.847.272-2.714.815v7.006c0 .246-.125.37-.372.37H.396z" id="ftr__y"></path><path d="M.617 13.724c-.248 0-.371-.124-.371-.37V.882c0-.247.123-.37.371-.37h.818c.248 0 .39.123.428.37l.093.594C2.897.648 3.944.234 5.096.234c1.203 0 2.15.435 2.845 1.307.693.87 1.04 2.053 1.04 3.548 0 1.52-.365 2.736-1.096 3.65-.731.915-1.704 1.372-2.918 1.372-1.116 0-2.076-.365-2.881-1.094v4.337c0 .246-.125.37-.372.37H.617zM4.54 8.628c1.71 0 2.566-1.149 2.566-3.447 0-1.173-.208-2.044-.624-2.612-.415-.569-1.05-.853-1.904-.853-.88 0-1.711.284-2.491.853v5.17c.805.593 1.623.889 2.453.889z" id="ftr__A"></path><path d="M2.971 10.148c-.88 0-1.583-.25-2.11-.75-.526-.501-.79-1.171-.79-2.011 0-.902.322-1.622.967-2.159.644-.538 1.512-.806 2.602-.806.694 0 1.475.104 2.342.315V3.513c0-.667-.15-1.136-.455-1.408-.304-.271-.821-.407-1.552-.407-.855 0-1.692.123-2.509.37-.285.087-.465.13-.54.13-.148 0-.223-.111-.223-.334v-.5c0-.16.025-.278.075-.352.05-.074.148-.142.297-.204.384-.173.87-.312 1.46-.417A9.991 9.991 0 0 1 4.29.234c1.177 0 2.045.244 2.603.731.557.489.836 1.233.836 2.233v6.338c0 .247-.125.37-.372.37h-.799c-.236 0-.372-.117-.41-.351l-.092-.612a5.09 5.09 0 0 1-1.478.89 4.4 4.4 0 0 1-1.608.315zm.446-1.39c.41 0 .836-.08 1.283-.241.446-.16.874-.395 1.282-.704v-1.89a8.403 8.403 0 0 0-1.97-.241c-1.4 0-2.1.537-2.1 1.612 0 .47.13.831.39 1.084.26.254.632.38 1.115.38z" id="ftr__C">
</path><path d="M.503 9.907c-.248 0-.371-.124-.371-.37V.883C.132.635.255.51.503.51h.818a.49.49 0 0 1 .288.075c.068.05.115.142.14.277l.111.686C3.037.672 4.277.234 5.578.234c.904 0 1.592.238 2.063.713.47.476.706 1.165.706 2.066v6.524c0 .246-.123.37-.371.37H6.879c-.248 0-.372-.124-.372-.37V3.625c0-.655-.133-1.137-.4-1.445-.266-.31-.684-.464-1.254-.464-.98 0-1.94.315-2.882.946v6.875c0 .246-.124.37-.371.37H.503z" id="ftr__E">
</path>
<path d="M1.988 13.443c-.397 0-.75-.043-1.059-.13-.15-.037-.251-.1-.307-.185a.684.684 0 0 1-.084-.37v-.483c0-.234.093-.352.28-.352.06 0 .154.013.278.037.124.025.291.037.502.037.459 0 .82-.114 1.087-.343.266-.228.505-.633.716-1.213l.353-.945L.167.675C.08.465.037.316.037.23c0-.149.086-.222.26-.222h1.115c.198 0 .334.03.409.093.075.062.148.197.223.407l2.602 7.19 2.51-7.19c.074-.21.148-.345.222-.407.075-.062.211-.093.41-.093h1.04c.174 0 .261.073.261.222 0 .086-.044.235-.13.445l-4.09 10.377c-.334.853-.725 1.464-1.17 1.835-.446.37-1.017.556-1.711.556z" id="ftr__G"></path></defs><g fill="none" fill-rule="evenodd"><g transform="translate(31.496 11.553)"><mask id="ftr__b" fill="currentColor"><use xlink:href="#ftr__a"></use></mask><path fill="currentColor" mask="url(#ftr__b)" d="M.04 6.088h26.91V.04H.04z"></path></g><g transform="translate(55.433 10.797)"><mask id="ftr__d" fill="currentColor"><use xlink:href="#ftr__c"></use></mask><path fill="currentColor" mask="url(#ftr__d)" d="M.05 5.664h5.564V.222H.05z"></path></g><g transform="translate(55.433 .97)"><mask id="ftr__f" fill="currentColor"><use xlink:href="#ftr__e"></use></mask><path fill="currentColor" mask="url(#ftr__f)" d="M.11 9.444h6.804V.222H.111z"></path></g><g transform="translate(33.008 .97)"><mask id="ftr__h" fill="currentColor"><use xlink:href="#ftr__g"></use></mask><path fill="currentColor" mask="url(#ftr__h)" d="M.191 9.655h11.611V.04H.192z"></path></g><g transform="translate(62.992 .97)"><mask id="ftr__j" fill="currentColor"><use xlink:href="#ftr__i"></use></mask><path fill="currentColor" mask="url(#ftr__j)" d="M.141 9.867h7.831V.04H.142z"></path></g><g transform="translate(72.063 .97)"><mask id="ftr__l" fill="currentColor"><use xlink:href="#ftr__k"></use></mask><path fill="currentColor" mask="url(#ftr__l)" d="M.171 9.655h7.076V.04H.17z"></path></g><g transform="translate(46.11 .718)"><mask id="ftr__n" fill="currentColor"><use xlink:href="#ftr__m"></use></mask><path fill="currentColor" mask="url(#ftr__n)" d="M.181 10.059h8.225V.232H.18z"></path></g><g transform="translate(23.685 .718)"><mask id="ftr__p" fill="currentColor"><use xlink:href="#ftr__o"></use></mask><path fill="currentColor" mask="url(#ftr__p)" d="M.05 10.059h8.255V.232H.05z"></path></g><g transform="translate(0 .718)"><mask id="ftr__r" fill="currentColor"><use xlink:href="#ftr__q"></use></mask><path fill="currentColor" mask="url(#ftr__r)" d="M.03 10.15h7.68V.231H.03z"></path></g><g transform="translate(10.33 .718)"><mask id="ftr__t" fill="currentColor"><use xlink:href="#ftr__s"></use></mask><path fill="currentColor" mask="url(#ftr__t)" d="M.07 9.907h8.255V.232H.071z"></path></g><g transform="translate(84.157 .97)"><mask id="ftr__v" fill="currentColor"><use xlink:href="#ftr__u"></use></mask><path fill="currentColor" mask="url(#ftr__v)" d="M.11 9.867h7.046V.04H.11z"></path></g><g transform="translate(92.472 .718)"><mask id="ftr__x" fill="currentColor"><use xlink:href="#ftr__w"></use></mask><path fill="currentColor" mask="url(#ftr__x)" d="M.08 10.21h9.041V.232H.081z"></path></g><g transform="translate(103.811 .718)"><mask id="ftr__z" fill="currentColor"><use xlink:href="#ftr__y"></use></mask><path fill="currentColor" mask="url(#ftr__z)" d="M.02 9.907H13.93V.232H.02z"></path></g><g transform="translate(120.189 .718)"><mask id="ftr__B" fill="currentColor"><use xlink:href="#ftr__A"></use></mask><path fill="currentColor" mask="url(#ftr__B)" d="M.242 13.747H9.01V.232H.242z"></path></g><g transform="translate(130.772 .718)"><mask id="ftr__D" fill="currentColor"><use xlink:href="#ftr__C"></use></mask><path fill="currentColor" mask="url(#ftr__D)" d="M.06 10.15h7.68V.231H.06z"></path></g><g transform="translate(141.102 .718)"><mask id="ftr__F" fill="currentColor"><use xlink:href="#ftr__E"></use></mask><path fill="currentColor" mask="url(#ftr__F)" d="M.131 9.907h8.224V.232H.131z"></path></g><g transform="translate(150.677 1.222)"><mask id="ftr__H" fill="currentColor"><use xlink:href="#ftr__G"></use></mask><path fill="currentColor" mask="url(#ftr__H)" d="M.02 13.455h9.071V0H.021z"></path></g></g></svg></div><p class="imdb-footer__copyright _2-iNNCFskmr4l2OFN2DRsf"><li class="mr-16 text-2xl">© 1990-<!-- -->2021<!-- --> by IMDB-CLONE.com, Inc.</li>
</p>
            </div>
        </div>

</div>
</footer>


    </body>
</html>

