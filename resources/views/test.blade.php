@extends("layouts/app")
@section('content')
    <div class="container">
        <h2>Register Form</h2>

        <div class="row col-lg-5">
            <h2>Get Request</h2>
            <button class="btn btn-warning" id="getRequest">get Request</button>
            <button class="btn btn-success" id="clearContent">Clear Content</button>
        </div>
    </div>
    <div id="getRequestData">

    </div>
    <script>
        $(document).ready(function(){
            $('#getRequest').click(function(){
                $.ajax({
                    type: "GET",
                    url: "/address/1",
                    dataType: 'json',
                    success: function(data){
                        // console.log(data);
                        // $('#getRequestData').append("<h2>" + data["address"]+ "</h2>");
                        data.forEach(element => {
                            $('#getRequestData').append("<h2>" + element["address"]+ "</h2>");
                            console.log(element)
                        });
                    }
                })
            })
            $('#clearContent').click(function(){
                $('#getRequestData').empty()
            })
        })
    </script>
    
@endsection