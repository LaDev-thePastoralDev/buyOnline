@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading text-center">Available Products</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form class="form-horizontal" onload="load_page()">
                        <label for="category" class="">Product Categories</label>
                        <select name="category" id="category" class="form-control">
                            <option> Phones and Tablets</option>
                            <option>Laptops & Computers</option>
                            <option>Computer Accessories</option>
                            <option>Phones Accessories</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        function load_page() {
            var selected_page = document.getElementById("category").value;
            if (selected_page != "") {
                window.location.href = selected_page
                //Please note that the value received,
                //in this case selected_page,
                //should be a valid url!
                //Therefore the value of the
                //<option> tag should be itself
                //a url !
                //ex.: <option value="page.php"> is valid
                //<option value="page_1"> is not valid
            }
        }
    </script>
@endsection