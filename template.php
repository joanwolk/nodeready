# crap, someone's looking at the code! quick, hide in a comment! <!--
<?php include 'nodeready.sh'; ?>
exit
-->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>nodeready</title>
    <link href='http://fonts.googleapis.com/css?family=Orbitron|Droid+Sans|Anonymous+Pro|Syncopate' rel='stylesheet' type='text/css'>
    <style type="text/css">
html{width:100%; overflow-x:hidden;}
    body {
        margin-top: 1.0em;
        color: white;
        font-family: "Helvetica Neue", "Helvetica", "Arial", sans-serif;
    }
    #container {
      margin: 0 auto;
      width: 700px;
      color: black;
    }
    h2,h3 { font-family: Futura, "Helvetica Neue", "Helvetica", "Arial", sans-serif; }
    h1,h2,h3,a { color: #F00036; }
    h2 { border-top: 5px solid #eee; padding-top: 1em; }
    h1 { font-family: Syncopate, Orbitron; background: #F00036; color: white; }
    h1 { font-size: 3.8em; margin: 5px -500px; padding: 15px 500px 10px; }
    h1 .small { font-size: 0.4em; }
    h1 a { text-decoration: none }
    h2 { font-size: 1.5em; }
    h3 { text-align: center; }
    .description { font-size: 1.2em; margin-bottom: 30px; margin-top: 30px; font-style: italic;}
    .download { float: right; }
    code{font-family: "Anonymous Pro"; font-size: 14px; }
    pre { background: #333; color: #eee; padding: 15px; margin: 0px -15px; -webkit-border-radius: 5px; overflow: auto; }
    hr { border: 0; width: 80%; border-bottom: 1px solid #aaa}
    .footer { text-align:center; padding-top:30px; font-style: italic; }
    blockquote { font-size: 80%; color: #555; }
    </style>
    
</head>

<body>
  <a href="http://github.com/agnoster/nodeready"><img style="position: absolute; top: 0; right: 0; border: 0;" src="http://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub" /></a>

  <div id="container">

      <?php echo `maruku README.md --html-frag -o -`; ?>

  </div>

  
</body>
</html>
