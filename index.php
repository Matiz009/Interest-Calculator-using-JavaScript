
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body style="background-color: white;">

    <h1 style="text-align: center;color: darkcyan;">SIMPLE Interest Calculator</h1>
    <hr>

    <div class="container">
        <div class="row">
            <div class="col=md-6">
                <label>Principal Amount:</label>
                <input type="text" placeholder="Eg: $1000" name="" id="principalAmount"><br>
                <label>Number of years :</label>
                <input type="text" placeholder="Eg: 1(in years)" id="timePeriod"><br>
                <label>Rate of interest %</label>
                <input type="text" placeholder="Eg: 7.5%" name="" id="interestRate">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-6">
                <button class="btn btn-primary">Calculate</button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-md-12">

                <label class="interest">Interest to be paid:</label>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="app.js"></script>
</body>

</html>