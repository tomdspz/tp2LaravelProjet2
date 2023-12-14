<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Photothèque</title>
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
        
        <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li><a href="/"><i class='bx bx-image' ></i></a></li>
                    <li><a href="/albums"><i class='bx bx-images' ></i></a></li>
                    <li class="menu"><input type="text" id="name" name="name" required minlength="4" maxlength="8" size="20" /> <a href=""><i class='bx bx-search' ></i></a></li>
                    <li><a href="/account"><i class='bx bxs-face'></i></a></li>
                </ul>
            </nav>
        </header>

        <main>
			<?php echo $__env->yieldContent("content"); ?>
		</main>

    </body>
</html>





<?php /**PATH /Users/tomdesprez/tp2LaravelProjet/resources/views/template.blade.php ENDPATH**/ ?>