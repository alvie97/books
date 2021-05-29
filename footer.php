<footer class="flex flex-row justify-center space-x-6 p-11 bg-red-50">
    <div id="newsletter" class="flex flex-col space-y-3 justify-items-center p-5 bg-red-400 w-1/4">
        <h1 class="text-center text-2xl font-medium text-red-100">Get the latests news</h1>
        <input type="text" placeholder="First Name" class="px-5 py-3 font-medium placeholder-gray-700">
        <input type="email" placeholder="Email" class="px-5 py-3 font-medium placeholder-gray-700">
        <button class="my-1 text-red-200 bg-red-500 py-1 hover:bg-red-600 rounded">Join The Crew</button>
        <div class="py-5"></div>
    </div>

    <div id="links" class="flex flex-col items-center space-y-1 w-1/4">
        <h3 class="font-medium my-5">LOGO</h3>
        <hr class="border-yellow-400 w-full">
        <nav class="flex flex-col items-center py-4 space-y-1">
            <h2 class="text-red-500 font-medium text-lg">Find my books</h2>
            <a href="#" class="text-red-400">Amazon</a>
            <a href="#" class="text-red-400">Goodreads</a>
            <a href="#" class="text-red-400">Bookbub</a>
        </nav>
        <hr class="border-yellow-400 w-full">
        <div class="flex flex-col items-center">
            <h1 class="text-red-500 text-lg font-medium">Follow Me</h1>
            <nav class="flex flex-row space-x-3">
                <a href="#"><i class="text-yellow-300 fab fa-instagram-square text-4xl"></i></a>
                <a href="#"><i class="text-yellow-300 fab fa-facebook-square text-4xl"></i></a>
                <a href="#"><i class="text-yellow-300 fab fa-twitter-square text-4xl"></i></a>
                <a href="#"><i class="text-yellow-300 fab fa-pinterest-square text-4xl"></i></a>
            </nav>
        </div>
    </div>
</footer>
<div class="flex flex-row justify-end bg-red-50 px-10 py-3">
    <p class="text-xs text-red-400">Copyright | Alfredo Viera | 2021</p>
</div>
<?php wp_footer(); ?>
</body>

</html>