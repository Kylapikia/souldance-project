@extends('layout')
@section('title')
    Home
@stop
@section('content')<div id="body" class="home">
    <div class="header">
        <img src="images/group1.jpg" alt="">
        <div>
            <a href="service.html">Soul Dance Academy</a>
        </div>
    </div>
    <div class="body">
        <div>
            <div>
                <h1>NEW CLASS</h1>
                <h2>DANCE</h2>
                <p>Soul Dance Academy is dedicated to bringing quality n excellence of dance to their students n strives to provide a dynamic learning environment.</p>
            </div>
            <img src="images/d5.jpg" alt="">
        </div>
    </div>
    <div class="footer">
        <div>
            <ul>
                <li>
                    <a href="classes" class="service"></a>
                    <h1>SERVICE</h1>
                </li>
                <li>
                    <a href="about" class="about"></a>
                    <h1>OUR STORY</h1>
                </li>
                <li>
                    <a href="news" class="event"></a>
                    <h1>EVENT</h1>
                </li>
                <li>
                    <a href="contact" class="contact"></a>
                    <h1>OUR LOCATION</h1>
                </li>
            </ul>
        </div>
    </div>
</div>
@stop