<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">

                    @if (session()->get('success'))
                        <div class="alert alert-success py-2"> <strong>Success: </strong> {{ session()->get('success') }} </div>
                    @elseif(session()->get('warning'))
                        <div class="alert alert-warning py-2"> <strong> Warning: </strong> {{ session()->get('warning') }}</div>
                    @elseif(session()->get('error'))
                        <div class="alert alert-danger py-2"> <strong> Error: </strong> {{ session()->get('error') }}</div>
                    @endif

                    <div class="card-head">
                        <h4 class="d-flex justify-content-between"> User Create
                            <a class="btn btn-info" href="{{ route('filter.index') }}">Fliter List</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('filter.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="agentName">Agent Name</label>
                                <input type="text" name="agentName" id="agentName" class="form-control" >
                                @error('agentName')
                                    <div class="bg-info mt-2 p-3 text-white">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="openCall">Call Status</label>
                                <select name="call_status" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                @error('call_status')
                                    <div class="bg-info mt-2 p-3 text-white">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="potential">Potential</label>
                                <select name="potential" id="" class="form-control">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                </select>
                                @error('potential')
                                    <div class="bg-info mt-2 p-3 text-white">{{ $message }}</div>
                                @enderror
                            </div>


                            <button type="submit" class="btn btn-success">Save</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>
