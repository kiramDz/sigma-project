<!-- 
Source : https://youtu.be/OofP9BhzQMU

 -->


<?php

    include "logic.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Blog using PHP & MySQL</title>
</head>
<body>

<section >
    <div class="container mt-5">

        <!-- Display any info -->
        

        <!-- Create a new Post button -->
        <div class="flex justify-center ">
            <!-- ini tulisan yang jika di tekan ngrah ke create.php -->
            <a href="create.php" class="inline-block text-black bg-[#C3E93A] font-semibold py-2 px-4 border border-black hover:rounded-full">
            Share your problems, we'll find a solution.
            </a>
        </div>
<!-- 

    Share your problems, we'll find a solution.
    Write down your issues, we'll help you solve them.
    Tell us your troubles, we're here to assist.
    Have a problem? Let us solve it for you.
    Write us about your difficulties, we'll provide a solution.
 -->

         <!-- Display posts from database : ini gambar kartu setelah ita create database -->
        <div class="m-6 flex justify-center items-center">
            <?php foreach($query as $q){ ?>
                <!-- bagian card -->
                <div class="bg-white rounded shadow border p-6 ml-4" style="width: 18rem;">
                    <div class="card-body">
                       <h5 class="text-3xl font-bold mb-4 mt-0"><?php echo $q['title'];?></h5>
                        <p class="text-gray-700 text-sm"><?php echo substr($q['content'], 0, 50);?>...</p>
                       <a href="view.php?id=<?php echo $q['id']?>" class="text-gray-700 text-[16px]">Read More <span class="text-gray-700">&rarr;</span></a>
                    </div>
                </div>
            <?php }?>
        </div>
    </div>
    </section>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>


