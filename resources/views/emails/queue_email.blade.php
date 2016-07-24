<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email</title>

    <style>
        #camoranns{display: flex; flex-direction: row; justify-content:center;}
        .header-title{font-family: "Palatino", Helvetica, sans-serif; font-size:20px;justify-content:center;display: flex; background:#3498db; color:#ffffff;}
        .container{width:60%;display: flex; flex-direction:column; justify-content:center; padding:0px; margin:0px; border:1px solid #999999; background:#fcfcfc;}
        .footer_box{display: flex; flex-direction: row; justify-content:center; width:100%;}
        a{
            display: block;width: 200px;height: 50px;margin: 50px 0;background: #3498db;font-family: "Palatino", sans-serif;
            border: none;color: #fff;font-size: 14px;font-weight: bold; text-decoration:none;-webkit-border-radius: 5px;
            -moz-border-radius: 5px;border-radius: 5px; display: flex;justify-content:center;align-items:center;

        }
            a.btn_box{
                background: #3498db;
                border: 2px solid #3498db;
                -webkit-transition: all .5s ease;
                -moz-transition: all .5s ease;
                -ms-transition: all .5s ease;
                transition: all .5s ease;
            }
            a.btn_box:hover{
                background: none;
                color: #3498db;
            }
        </style>


    </head>
    <body>

        <div id="camoranns">
            <div class="container">
                <div class="header-title">
                    <h1>Recordatorio de Pago</h1>
                </div>
                <div class="footer_box">
                    <a href="#" class="btn_box">Ver Cliente</a>
                </div>
            </div>
        </div>

    </body>
    </html>