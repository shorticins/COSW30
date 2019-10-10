<!Doctype html>
<html lang='en'>
    <head>
        <meta charset="utf-8">
        <title>Arrays as Tables</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Raleway|Turret+Road&display=swap" rel="stylesheet">
        <style>
             body{
                padding: 0;
                margin: 0;
                font-family: 'Raleway', sans-serif;
            }
            header{
                background-color: skyblue;
                padding: 60px 0;
                text-align: center;
                margin:0 0 20px 0;
            }
            h1{
                font-family: 'Turret Road', cursive;
                font-size: 50px;
            }
            table{
            
                display: block;
                float: left;
                width: 35%;
                margin: 10px;
                
            }
            
            th, tr, td{
                border: 1px groove blue;
                margin: .5px;
            }
            th{
                width:600px;
            }
            td{
                width: 150px;
            }
            
        </style>
    </head>
    <body>
        <header>
            <h1>Arrays As Tables</h1>
        </header>
        <table style="border: 3px; color: blue; text-align: left;">
            <th>
               <tr>
                   <td>The 15 Most Populous Cities as of July 1, 2017</td>
               </tr> 
            </th>
            
            <tr>
                <td>Rank</td>
                <td>City, State</td>
                <td>Population</td>
            </tr>
             
        
        <?php
        
        $city_state_info = array('New York, New York' => 8622698,
				'Los Angeles, California' => 3999759,
				'Chicago, Illinois' => 2716450,
				'Houston, Texas' => 2312717,
				'Phoenix, Arizona' => 1626078,
				'Philadelphia, Pennsylvania' => 1580863,
				'San Antonio, Texas' => 1511946,
				'San Diego, California' => 1419516,
				'Dallas, Texas' => 1341075,
				'San Jose, California' => 1035317,
				'Austin, Texas' => 950715,
				'Jacksonville, Florida' => 892062,
				'San Francisco, California' => 884363,
				'Columbus, Ohio' => 879170,
				'Fort Worth, Texas' => 874168,);
            
            $i = 1;
            
            while($i <= sizeof($city_state_info)){
            
          
            foreach($city_state_info as $key => $value){
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$key</td>";
            echo "<td>" . number_format($value) . "</td>";
            echo "</tr>";
            
            $i++;
             }
            }
        ?>
        
       </table>
        
        <table style="border: 3px; color: blue; text-align: left;">
            <th>
               <tr>
                   <td>The 15 Most Populous Cities as of July 1, 2017</td>
               </tr> 
            </th>
            
            <tr>
                <td>Rank</td>
                <td>City, State</td>
                <td>Population</td>
            </tr>
             
        
        <?php
        
        $city_state_info = array('New York, New York' => 8622698,
				'Los Angeles, California' => 3999759,
				'Chicago, Illinois' => 2716450,
				'Houston, Texas' => 2312717,
				'Phoenix, Arizona' => 1626078,
				'Philadelphia, Pennsylvania' => 1580863,
				'San Antonio, Texas' => 1511946,
				'San Diego, California' => 1419516,
				'Dallas, Texas' => 1341075,
				'San Jose, California' => 1035317,
				'Austin, Texas' => 950715,
				'Jacksonville, Florida' => 892062,
				'San Francisco, California' => 884363,
				'Columbus, Ohio' => 879170,
				'Fort Worth, Texas' => 874168,);
            ksort($city_state_info);
            $i = 1;
            
            while($i <= sizeof($city_state_info)){
            
          
            foreach($city_state_info as $key => $value){
            
            echo "<tr>";
            echo "<td>$i</td>";
            echo "<td>$key</td>";
            echo "<td>" . number_format($value) . "</td>";
            echo "</tr>";
            
            $i++;
             }
            }
        ?>
        
       </table>
        
        <br>
        <button><a href="quote.html">Back to Form</a></button>
    </body>
    
    
    
    
    
    
    
</html>