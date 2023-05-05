<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Data Filter</title>
  </head>
  <body>

    <div class="container">
        <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="d-flex justify-content-between">Filter Section
                            <a href="{{ route('filter.create') }}" class="btn btn-success">Add Agent</a>
                        </h4>
                    </div>

                    <div class="card-body">

                        <div class="d-flex">
                            {{-- <form action="{{ route('filter.get-data') }}" method="post">@csrf
                                <select class="form-select" id="mySelect" name="name"  aria-label="Default select example">
                                    <option selected> -- select Agent -- </option>
                                    @foreach ($filter as $item)
                                        <option value="{{ $item->agentName ?? '' }}"> {{ $item->agentName ?? '' }}</option>

                                    @endforeach

                                </select>
                                <button type="submit" class="btn btn-primary">search</button>

                            </form> --}}


                            {{-- <select class="form-select">
                                <option selected> -- select City --</option>
                                <option data-id="Dhaka">Dhaka</option>
                                <option data-id="Rajshahi">Rajshahi</option>
                                <option data-id="Bogura">Bogura</option>
                                <option data-id="Barishal">Barishal</option>
                            </select> --}}

                            {{-- <select class="form-select" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select> --}}
                            {{-- <input type="date" class="form-control"> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <div class="container py-3">
        <div class="row">
            <div class="card-header">
                <h4>Filtering List</h4>
            </div>

            <div class="col-md-3 p-2">
                <div class="card bg-danger text-white">
                    <div class="card-body">
                        {{-- <h3 class="count-card-title"> {{ $sum }} </h3> --}}
                        @foreach ($sum as $item)
                            <h3 class="count-card-title"> {{ $item }} </h3>
                        @endforeach
                        <h3 class="count-card-text"> Total Call</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-3 p-2">
                <div class="card bg-info text-white">
                    <div class="card-body">

                        @foreach ($filterData as $item)
                            <h3 class="count-card-title"> {{ $item->openCall }} </h3>
                        @endforeach

                        {{-- <h3 class="count-card-title"> {{ $data->agentName }}</h3> --}}
                        <h3 class="count-card-text"> Open Call</h3>
                    </div>
                </div>
            </div>




            <div class="col-md-3 p-2">
                <div class="card bg-success text-white">
                    <div class="card-body">
                        @foreach ($filterData as $item)
                            <h3 class="count-card-title"> {{ $item->closeCall }} </h3>
                        @endforeach
                        <h3 class="count-card-text"> Close Call</h3>
                    </div>
                </div>
            </div>


            <div class="col-md-3 p-2">
                <div class="card bg-warning text-white">
                    <div class="card-body">
                        @foreach ($filterData as $item)
                            <h3 class="count-card-title"> {{ $item->potential }} </h3>
                        @endforeach
                        <h3 class="count-card-text"> Potential </h3>
                    </div>
                </div>
            </div>


        </div>

    </div>







    <!-- Option 1: Bootstrap Bundle with Popper -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
