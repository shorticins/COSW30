
<!Doctype html>
<html>
    <head>
        
        <title>Labwork 1: Hello World</title>
        <style>
        @import url('https://fonts.googleapis.com/css?family=Lexend+Giga|Source+Code+Pro&display=swap');
        body{
            margin: 0;
            padding: 0;
            font-family: 'Source Code Pro', monospace; 
            color: darkgray;
            background-color: lightblue;
            text-align: center;
        }
        
        header {
            background-color: lightgrey;
            color: navy;
            font-size: 25px;
            border-bottom: 3px groove silver;
            font-family: 'Lexend Giga', sans-serif;
            text-align: center;
            padding-top: 30px;
            padding-bottom: 30px;
        }
        
        p {
            display: block;
            width: 50%;
            margin: auto;
            
        }
        ul {
            display: block;
            text-decoration: none;
            width: 50%;
            margin: auto;
        }
        </style>
        
    </head>
    
    <body>
        
        <?php
        /*
        echo 'lab1.php';
        echo '<br/> Shanen Dibbern';
        echo '<br/> August 29, 2019';
        */
        ?>
        <header>
        <h1>Shanen Dibbern</h1>
        </header>
        
        <h2>About Me</h2>
        <p>My name is Shanen Dibbern and I am a student at Long Beach City College. I also write on a contract basis and I have started helping people to create and maintain websites. I am looking forward to working for a company in addition to continuing contract work. When I'm not working on projects I enjoy spending time with friends. Some other things I like to do are listed below.</p>
        <ul>
            <li>Play billiards</li>
            <li>Watch movies(mostly documentaries)</li>
            <li>Explore the wonderful world of social media</li>
            <li>Paint, sketch, and use pastels to be creative</li>
            <li>Write</li>
        </ul>
        
        <?php
        echo 'Two of my favorite websites are <a href="https://www.facebook.com">Facebook</a> and <a href="https://www.amazon.com">Amazon</a>';
        echo 'This assignment was pretty challenging for me because I am not familiar with php syntax yet, but I am hopeful that I will pick up on it better as the course progresses.';
        ?>
    </body>
    
    
</html>