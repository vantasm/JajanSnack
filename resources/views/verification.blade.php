@extends('layouts/app_login')
@section('content')
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                <table class="table">
                    <thead class="thead-rpimary">
                        <tr class="text-center">
                            <th>Images</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $directory = "images/payment";
                        $images = glob($directory . "/*.*");
                        foreach ($images as $image) {
                            ?>
                            <tr>
                                <td><?php echo '<img src="'.$image.'" style=" width: 20%;"><br/> ';?></td>
                                <td><form action="" method="post" enctype="multipart/form-data"><input type="button" class="btn btn-danger py-3 px-5" value="Confirm Payment"></form></td>
                            </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>   
                </div>
            </div>
        </div>
    </div>
</section>
@endsection