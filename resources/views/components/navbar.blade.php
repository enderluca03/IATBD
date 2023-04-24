<div class="navbar">   
    <section class="homebutton">
        <x-application-logo />
        <a href='{{ route('dashboard') }}'>Home</a>
    </section>
    <nav class="navlist">
        <ul>
            <li><a href='{{ route('account') }}'>Account</a></li>
            <li><a href='{{ route('newPost') }}'>New Post</a></li>
        </ul>
    </nav>
</div>