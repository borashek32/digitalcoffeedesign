@extends('layouts.main')

@section('title')DigitalCoffeeeDesign.com @endsection

@section('content')
    <div class="container">
        <div class="home">
            <a href=""></a>
            <p class="col-lg-7 offset-lg-1 col-md-7 offset-md-1 col-sm-7 offset-sm-1">
                Hello, my name is Nataly and I'm a great coffeelover mmm!<br>Here is my site porfolio. I deal with any kind of web technologies. As a backend developer I prefer Laravel 8 or 9 version. From frontend frameworks I like Tailwind CSS more and, of course, I use Bootstrap 4. Also I use JavaScript and Jquery. I have a little bit experience with Vue JS and less experience with React JS. Sometimes I work with Livewire (it's kinda for both frontend and backend). As a webserver I have MAMP Pro and built in MySql with PhpMyAdmin. Feel free to contact me using a form in the bottom of my site:)
            </p>
        </div>
    </div>

    <div class="portfolio">
        <a href="{{ route('project1') }}">Project 1</a>
        <a href="{{ route('project2') }}">Project 2</a>
        <a href="{{ route('project3') }}">Project 3</a>
        <a href="{{ route('project4') }}">Project 4</a>
    </div>
@endsection
