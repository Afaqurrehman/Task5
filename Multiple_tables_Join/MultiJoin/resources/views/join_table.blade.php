<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets\assets/css/bootstrap.min.css') }}">
    <title>JOIN TABLE</title>
</head>
<body>
    <div class="container">
        <br />
        <h1 class="text-centre text-primary">Join Multiple Table</h1>
        <br/>
    <div>

    <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <th>Country</th>
                    <th>No of State</th>
                    <th>No of City</th>
                </thead>
                <tbody>
                @foreach ($countryData as $country => $details)
                    <tr>
                        <td>{{$country}}</td>
                        <td>{{$details['num_states']}}</td>
                        <td>{{ $details['num_cities']}}</td>
                        
                       
                    </tr>
                    @endforeach
                </tbody>






    </div>




</body>
</html>