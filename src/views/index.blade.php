<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Mirza Group Challange Page ..."/>
    <meta name="author" content="Amir Etemad"/>
    <title>Mirza Group Challenge Page </title>
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
    <h1 style="text-align: center;">Welcome To Mirza Group Challenge Page :)</h1>

    <!-- Display Countries -->
    <div class="col-sm-6" style="background: #efefef;height: 140px;overflow: scroll">
        @if(is_array($countriesData) && count($countriesData) > 0)
            <h3 style="text-align: center">List Of Countries</h3>
            <ul style="list-style: none;">
                @foreach($countriesData as $key => $country)
                    <li>{{++$key ." - " .$country['country_name'] . " ( ". count($country['hotels']) . " Hotels )"}}</li>
                @endforeach
            </ul>
        @else
            <p> Oops ! Please Add Some Country</p>
        @endif
    </div>

    <!-- Display Hotels  -->
    <div class="col-sm-6" style="background: #efcc47;height: 140px;overflow: scroll">
        @if(is_array($hotelsData) && count($hotelsData) > 0)
            <h3 style="text-align: center">List Of Hotels </h3>
            <ul style="list-style: none;">
                @foreach($hotelsData as $key => $hotel)
                    <li>{{++$key ." - " .$hotel['hotel_name'] . "( " . $hotel['countries']['country_name']." )"}}</li>
                @endforeach
            </ul>
        @else
            <p> Oops ! Please Add Some Hotels</p>
        @endif
    </div>

    <!-- Display Country reviews -->
    <div class="col-sm-6" style="background: #e2f3c0;min-height: 300px;">
        @if(is_array($countryReviews) && count($countryReviews) > 0)
            <h3 style="text-align: center">Country Reviews</h3>
            <ul style="list-style: none;">
                @foreach($countryReviews as $countryReview)
                    <li>{!! $countryReview['text'] . ' <small>( '.$countryReview['reviewable_type'].' ) </small>' !!}</li>
                @endforeach
            </ul>
        @else
            <p> Oops ! Please Add Some Country review</p>
        @endif
    </div>

    <!-- Display Hotel reviews -->
    <div class="col-sm-6" style="background: #d7d9ff;min-height: 300px;">
        @if(is_array($hotelReviews) && count($hotelReviews) > 0)
            <h3 style="text-align: center">Hotel Reviews</h3>
            <ul style="list-style: none;">
                @foreach($hotelReviews as $hotelReview)
                    <li>{!! $hotelReview['text'] . ' <small>( '.$hotelReview['reviewable_type'].' )</small>' !!}</li>
                @endforeach
            </ul>
        @else
            <p> Oops ! Please Add Some hotel review</p>
        @endif
    </div>


</div>
</body>
</html>