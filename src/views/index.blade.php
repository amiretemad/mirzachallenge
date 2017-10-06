<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Mirza Group Challange Page ..."/>
    <meta name="author" content="Amir Etemad"/>
    <title>Mirza Group Challange Page </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container-fluid">
    <!-- Heading -->
    <h1 style="text-align: center;">Welcome To Mirza Group Challange Page :)</h1>

    <!-- Display Countries -->
    @if(is_array($countriesData) && count($countriesData) > 0)
        <div class="col-sm-6" style="background: #efefef;height: 140px;overflow: scroll">
            <h3 style="text-align: center">List Of Countries</h3>
            <ul style="list-style: none;">
                @foreach($countriesData as $key => $country)
                    <li>{{++$key ." - " .$country['country_name'] . " ( Has ". count($country['hotels']) . " Hotels )"}}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p> Oops ! Please Add Some Country</p>
    @endif

    <!-- Display Hotels  -->
    @if(is_array($hotelsData) && count($hotelsData) > 0)
        <div class="col-sm-6" style="background: #efcc47;height: 140px;overflow: scroll">
            <h3 style="text-align: center">List Of Hotels </h3>
            <ul style="list-style: none;">
                @foreach($hotelsData as $key => $hotel)
                    <li>{{++$key ." - " .$hotel['hotel_name'] . "( " . $hotel['countries']['country_name']." )"}}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p> Oops ! Please Add Some Country</p>
    @endif

    <!-- Display Comments -->
    @if(is_array($hotelsData) && count($hotelsData) > 0)
        <div class="col-sm-6" style="background: #d4deef">
            <h3 style="text-align: center">Hotel Reviews </h3>
            <ul style="list-style: none;">
                @foreach($hotelsData as $hotel)
                    <li>{{$hotel['id'] ." - " .$hotel['hotel_name'] . "( " . $hotel['countries']['country_name']." )"}}</li>
                @endforeach
            </ul>
        </div>
    @else
        <p> Oops ! Please Add Some Country</p>
    @endif

</div>
</body>
</html>