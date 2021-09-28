<?php

require_once 'vendor/autoload.php';

use App\Contents;

if (!isset($_GET['location'])){
    $_GET['location'] = 'Riga';
}

$urlData = "http://api.weatherapi.com/v1/forecast.json?key=30b21dc0e37644cabfc83654212809&q=" . $_GET['location'] . "&days=7&aqi=no&alerts=no";
$data = new Contents($urlData);

echo "<pre>";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather forecast</title>
    <form method="get">
        <label for="location">Forecast city:</label><br>
        <input type="text" id="location" name="location" placeholder="enter city"><br>
    </form>
</head>
<body>
    <h1 style="text-align:left;"><?php echo $data->getData()['location']['name']; ?></h1>
    <p style="text-align:left;"><?php echo "Current date and time: {$data->getData()['location']['localtime']}" . PHP_EOL;
    echo "Current temperature: {$data->getData()['current']['temp_c']}°C" . PHP_EOL;
    echo "Current conditions: {$data->getData()['current']['condition']['text']}"; ?></p>
    <table style="width:100%">
        <tr>
            <th>Time</th>
            <th>Temperature</th>
            <th>Condition</th>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][7]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][7]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][7]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][8]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][8]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][8]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][9]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][9]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][9]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][10]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][10]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][10]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][11]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][11]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][11]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][12]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][12]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][12]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][13]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][13]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][13]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][14]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][14]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][14]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][15]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][15]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][15]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][16]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][16]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][16]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][17]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][17]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][17]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][18]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][18]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][18]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][19]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][19]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][19]["condition"]['text'] ?>y</td>
        </tr>
        <tr>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][20]["time"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][20]["temp_c"] ?></td>
            <td style="text-align:center;"><?php echo $data->getData()['forecast']["forecastday"][0]['hour'][20]["condition"]['text'] ?>y</td>
        </tr>

    </table>
    <p><?php echo "Weather forecast for: {$data->getData()["forecast"]["forecastday"][1]['date']}" . PHP_EOL;
    echo "Average temperature: {$data->getData()["forecast"]["forecastday"][1]['day']['avgtemp_c']}°C" . PHP_EOL;?></p>
    <p><?php echo "Weather forecast for: {$data->getData()["forecast"]["forecastday"][2]['date']}" . PHP_EOL;
        echo "Average temperature: {$data->getData()["forecast"]["forecastday"][2]['day']['avgtemp_c']}°C" . PHP_EOL;?></p>
</body>
</html>




