@extends('layouts.app')

@section('content')
<div class="home-container">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-4">
                <!-- <div> -->
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                            <path d="M256,31C132,31,31,131.9,31,256c0,124,101,225,225,225s225-101,225-225C481,131.9,380,31,256,31z M53.7,256
		                    c0-29.3,6.3-57.2,17.5-82.3l96.5,264.4C100.2,405.2,53.7,336,53.7,256z M256,458.3c-19.9,0-39-2.9-57.2-8.3l60.7-176.4l62.1,170.4
		                    c0.5,1,0.9,1.9,1.5,2.8C302.2,454.2,279.6,458.3,256,458.3z M283.9,161.2c12.2-0.6,23.1-1.9,23.1-1.9c10.9-1.3,9.6-17.3-1.3-16.7
		                    c0,0-32.8,2.5-53.9,2.5c-19.9,0-53.3-2.5-53.3-2.5c-10.9-0.6-12.2,16.1-1.3,16.7c0,0,10.3,1.3,21.2,1.9l31.5,86.4l-44.3,132.7
		                    l-73.7-219.1c12.2-0.6,23.1-1.9,23.1-1.9c10.9-1.3,9.6-17.3-1.3-16.7c0,0-32.8,2.5-53.9,2.5c-3.8,0-8.3-0.1-13.1-0.3
		                    c36.2-54.9,98.3-91.2,169-91.2c52.6,0,100.6,20.1,136.6,53.1c-0.9-0.1-1.7-0.2-2.6-0.2c-19.9,0-33.9,17.3-33.9,35.9
		                    c0,16.7,9.6,30.8,19.9,47.4c7.7,13.4,16.7,30.8,16.7,55.8c0,17.3-6.6,37.4-15.4,65.4l-20.1,67.4L283.9,161.2L283.9,161.2z
		                     M357.7,430.8l61.8-178.6c11.5-28.9,15.4-51.9,15.4-72.5c0-7.4-0.5-14.3-1.4-20.8c15.8,28.9,24.8,61.9,24.8,97.1
		                    C458.3,330.7,417.9,395.8,357.7,430.8z" />
                        </g>
                    </svg>
                <!-- </div> -->
            </div>
        </div>
        <div class="jumbo-text row justify-content-center">
            <h1>Boolpress</h1>
            <p>Il 42% dei siti web usa la tecnologia WordPress. Blogger, piccole attività e grandi aziende nella lista Fortune 500 usano WordPress più di tutte le alternative messe insieme. Unisciti ai milioni di utenti che hanno scelto WordPress.com.</p>
            <a href="{{ route('home') }}">
                <button class="btn btn-light">Entra nel sito</button>
            </a>
        </div>
    </div>
</div>
@endsection