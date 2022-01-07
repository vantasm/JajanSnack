<style>
img{
    width: 20%;
}    
</style>

@extends("layouts/app")

@section("content")
    
    
<div class="container">
    <div class="row justify-content-center">
        <h2 class="mb-5" style="padding-bottom: ">Upload Evidence of Transfer</h2>
    </div>
</div>
    

{{-- Display evidence of transfer --}}
<div class="container">

{{-- versi 1 --}}
    <?php 
        $directory = "images/payment";
        $images = glob($directory . "/*.*");
        foreach($images as $image)
        {
    
            echo '<img src="'.$image.'" style=" width: 20%;"><br/> '; 
    ?>
            <form action="" method="post" enctype="multipart/form-data">             
                <input type="button" class="btn btn-danger py-3 px-5" value="Confirm Payment">
            </form>
    <?php
        }
    ?>

{{-- versi 2 --}}
    <?php
        // $directory = "images/payment";
        // $images = glob($directory . "/*.*");
        // $countImages = count($images) ;

        // $imagesPerRow = 5 ;

        // for ($i = 0 ; $i < $countImages; $i++) {
        //     //display image here
        //     $image = $images[$i] ;
        //     echo "<img src='$image'>" ; 
    ?>
            {{-- Confirm --}}
            {{-- Move picture to payment_done --}}
            {{-- <form action="" method="post" enctype="multipart/form-data">             
                <input type="button" class="btn btn-danger py-3 px-5" value="Confirm Payment">
            </form> --}}
    <?php
        //     if ($i % $imagesPerRow == 0) {
        //         //have displayed an entire row
        //         echo '<br>' ;
        //     }
        // }
    ?>
</div>

</section>
@endsection