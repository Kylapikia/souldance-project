@extends('layout')
@section('title')
    About
@stop
@section('content')
    <div id="body">
        <div class="header">
            <div>
                <h1>Blog</h1>
            </div>
        </div>
        <div class="blog">
            <div class="featured">
                <ul>
                    <li>
                        <img src="images/group7.jpg" alt="">
                        <div>
                            <h1>NEW CHILLS FOR SUMMER</h1>
                            <span>By Admin on October 09, 2017</span>
                            <p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
                            <a href="singlepost.html" class="more">Read More</a>
                        </div>
                    </li>
                    <li>
                        <img src="images/group12.jpg" alt="">
                        <div>
                            <h1>BERRIES ON THE GROVE</h1>
                            <span>By Admin on October 09, 2017</span>
                            <p>You can replace all this text with your own text. You can remove any link to our website from this website template, you're free to use this website template without linking back to us. If you're having problems editing this website template.</p>
                            <a href="singlepost.html" class="more">Read More</a>
                        </div>
                    </li>
                </ul>
                <a href="blog.html" class="load">Load More</a>
            </div>
            <div class="sidebar">
                <h1>Recent Posts</h1>
                <img src="images/d2.jpg" alt="">
                <h2>Dance Class</h2>
                <span>By Admin on October 09, 2017</span>
                <p>You can replace all this text with your own text. You can remove any link to our website from this website template.</p>
                <a href="singlepost.html" class="more">Read More</a>
            </div>
        </div>
    </div>
@stop