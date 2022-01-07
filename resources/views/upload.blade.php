<style>
input#file {
  display: inline-block;
  width: 20%;
  padding: 120px 0 0 0;
  height: 100px;
  overflow: hidden;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  border-radius: 20px;
  background-size: 60px 60px;
}
</style>

@extends("layouts/app")

@section("content")


<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
        <h2 class="mb-5" style="padding-bottom: ">Upload Evidence of Transfer</h2>
    </div>
</div>

{{-- Upload --}}
<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <form action="" method="post" enctype="multipart/form-data">             
                <button  class="btn btn-danger py-3 px-5 " onclick="document.getElementById('getFile').click()">Upload</button>
                <input type='file' id="getFile" style="display:none">
            </form>
        </div>
    </div>
</div>

{{-- Confirm --}}
<div class="container">
    <div class="row justify-content-center mb-3 pb-3">
        <div class="col-md-12 heading-section text-center ftco-animate">
            <form action="" method="post" enctype="multipart/form-data">             
                <input type="submit" class="btn btn-danger py-3 px-5" value="Submit">
            </form>
        </div>
    </div>
</div>

</section>


@endsection