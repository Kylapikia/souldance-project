@extends('layout')
@section('content')
<h1>Contcact Me!</h1>
<form action="??" method="post">
    <label for="name">Name</label>
    <input type="text" name="name" id="email">
    <label for="email">Email</label>
    <input type="text" name="email" id="email">
    <label for="comment">Comment</label>
    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
    <input type="submit">
</form>
@stop
@section('footer')
    <script>
        document.write("HIHI")
    </script>
@stop