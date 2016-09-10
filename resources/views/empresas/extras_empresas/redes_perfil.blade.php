   <?php
   $gmail = json_decode($data->empresa->gmail);
   ?>  

   @if (!empty($gmail->cuenta_1->usuario[0]))
   <figure>
    <img src="{!! URL::to('/img/banner_red')!!}/gmail.jpg">
    <figcaption>  

     <h4><i class="icon-gmail"></i> Gmail</h4>                                        
     <h4>{!!$gmail->cuenta_1->usuario[0]!!}</h4>
     <p>Usuario</p>
     <h4>{!!$gmail->cuenta_1->contraseña[0]!!}</h4>
     <p>Contraseña</p>                
   </figcaption>
 </figure>
 @endif

 @if (!empty($gmail->cuenta_2->usuario[0]))
 <figure>
  <img src="{!! URL::to('/img/banner_red')!!}/gmail.jpg">
  <figcaption>   
   <h4><i class="icon-gmail"></i> Gmail</h4>                                        
   <h4>{!!$gmail->cuenta_2->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$gmail->cuenta_2->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($gmail->cuenta_3->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/gmail.jpg">
  <figcaption>    
   <h4><i class="icon-gmail"></i> Gmail</h4>                                        
   <h4>{!!$gmail->cuenta_3->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$gmail->cuenta_3->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($gmail->cuenta_4->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/gmail.jpg">
  <figcaption>  
   <h4><i class="icon-gmail"></i> Gmail</h4>                                        
   <h4>{!!$gmail->cuenta_4->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$gmail->cuenta_4->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($gmail->cuenta_5->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/gmail.jpg">
  <figcaption>   
   <h4><i class="icon-gmail"></i> Gmail</h4>                                        
   <h4>{!!$gmail->cuenta_5->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$gmail->cuenta_5->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif



<?php
$zohomail = json_decode($data->empresa->zohomail);
?>  

@if (!empty($zohomail->cuenta_1->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>   
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_1->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_1->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_2->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>   
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_2->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_2->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_3->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>  
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_3->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_3->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_4->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>   
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_4->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_4->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_5->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption> 
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_5->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_5->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_6->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>  
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_6->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_6->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($zohomail->cuenta_7->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>  
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_7->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_7->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif
@if (!empty($zohomail->cuenta_8->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_8->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_8->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif
@if (!empty($zohomail->cuenta_9->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>                                       
   <h4>{!!$zohomail->cuenta_9->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_9->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif
@if (!empty($zohomail->cuenta_10->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/zoho.jpg">
  <figcaption>  
   <h4><i class="icon-gmail"></i> Zohomail</h4>                                        
   <h4>{!!$zohomail->cuenta_10->usuario[0]!!}</h4>
   <p>Usuario</p>
   <h4>{!!$zohomail->cuenta_10->contraseña[0]!!}</h4>
   <p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php 
$facebook = json_decode($data->empresa->facebook);
?>
@if (!empty($facebook->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/facebook.jpg">
  <figcaption>
    <h4><i class="icon-facebook"></i> Facebook</h4>                                      
    <h4>{!!$facebook->usuario[0]!!}</h4><p>Usuario</p>
    <h4>{!!$facebook->contraseña[0]!!}</h4><p>Contraseña</p>
  </figcaption>
</figure>
@endif

<?php /* TWITTER */
$twitter = json_decode($data->empresa->twitter); ?>
@if (!empty($twitter->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/twitter.jpg">
  <figcaption>
   <h4><i class="icon-twitter"></i> Twitter</h4>                                      
   <h4>{!!$twitter->usuario[0]!!}</h4><p>Usuario</p>
   <h4>{!!$twitter->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* YOUTUBE */
$youtube = json_decode($data->empresa->youtube); 
?>
@if (!empty($youtube->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/youtube.jpg">
  <figcaption>  
   <h4><i class="icon-youtube"></i> Youtube</h4>                                      
   <h4>{!!$youtube->usuario[0]!!}</h4><p>Usuario</p>
   <h4>{!!$youtube->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Instagram */
$instagram = json_decode($data->empresa->instagram); 
?>
@if (!empty($instagram->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/instagram.jpg">
  <figcaption> 
   <h4><i class="icon-instagram"></i> Instagram</h4>                            
   <h4>{!!$instagram->usuario[0]!!}</h4><p>Usuario</p>
   <h4>{!!$instagram->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Linkedin */
$linkedin = json_decode($data->empresa->linkedin); 
?>
@if (!empty($linkedin->usuario[0]))
<figure>
  <img src="{!! URL::to('/img/banner_red')!!}/linkedin.jpg">
  <figcaption> 
   <h4><i class="icon-linkedin"></i> Linkedin</h4>                            
   <h4>{!!$linkedin->usuario[0]!!}</h4><p>Usuario</p>
   <h4>{!!$linkedin->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Pinterest */
$pinterest = json_decode($data->empresa->pinterest); 
?>
@if (!empty($pinterest->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/pinterest.jpg">
  <figcaption>   
   <h4><i class="icon-pinterest"></i> Pinterest</h4>                            
   <h4>{!!$pinterest->usuario[0]!!}</h4><p>Usuario</p>
   <h4>{!!$pinterest->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Pinterest */
$hootsuite = json_decode($data->empresa->hootsuite); 
?>
@if (!empty($hootsuite->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/hotsuite.jpg">
  <figcaption>   
 <h4><i class="icon-share-2"></i> Hootsuite</h4>                            
 <h4>{!!$hootsuite->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$hootsuite->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* AMARILLAS INTERNET */
$amarillas_internet = json_decode($data->empresa->amarillas_internet); 
?>          
@if (!empty($amarillas_internet->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/amarillas_internet.jpg">
  <figcaption>  
 <h4><i class="icon-pinterest"></i> Amarillas Internet</h4>                           
 <h4>{!!$amarillas_internet->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$amarillas_internet->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* PHOTOSNACK */
$photosnack = json_decode($data->empresa->photosnack); 
?> 
@if (!empty($photosnack->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/photosnack.jpg">
  <figcaption>   
 <h4><i class="icon-camera-alt"></i> Photosnack</h4>                          
 <h4>{!!$photosnack->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$photosnack->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* FTP */
$ftp = json_decode($data->empresa->ftp); 
?> 

@if (!empty($ftp->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/ftp.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> FTP</h4> 
 <h4>{!!$ftp->server[0]!!}</h4><p>Server</p>                         
 <h4>{!!$ftp->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$ftp->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif



<?php /* Prestashop */
$prestashop = json_decode($data->empresa->prestashop); 
?> 
@if (!empty($prestashop->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/prestashop.jpg">
  <figcaption>   
 <h4><i class="icon-shop-1"></i> Prestashop</h4> 
 <h4>{!!$prestashop->url[0]!!}</h4><p>url</p>                         
 <h4>{!!$prestashop->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$prestashop->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Prestashop */
$wordpress = json_decode($data->empresa->wordpress); 
?> 
@if (!empty($wordpress->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/wordpress.jpg">
  <figcaption>   
 <h4><i class="icon-wordpress-2"></i> Wordpress</h4> 
 <h4>{!!$wordpress->url[0]!!}</h4><p>url</p>                         
 <h4>{!!$wordpress->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$wordpress->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

<?php /* Redes Adicionales */
$r_a = json_decode($data->empresa->redes_adicionales); 
?> 

@if (!empty($r_a->cuenta_1->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_1->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_1->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_1->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_2->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_2->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_2->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_2->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_3->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption> 
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_3->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_3->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_3->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>@endif

@if (!empty($r_a->cuenta_4->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>  
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_4->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_4->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_4->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_5->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_5->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_5->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_5->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_6->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_6->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_6->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_6->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_7->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption> 
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_7->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_7->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_7->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_8->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption> 
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_8->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_8->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_8->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_9->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>  
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_9->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_9->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_9->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_10->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_10->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_10->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_10->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_11->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>  
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_11->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_11->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_11->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_12->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>  
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_12->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_12->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_12->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

@if (!empty($r_a->cuenta_13->usuario[0]))
<figure>
<img src="{!! URL::to('/img/banner_red')!!}/otra.jpg">
  <figcaption>   
 <h4><i class="icon-server"></i> Red</h4> 
 <h4>{!!$r_a->cuenta_13->url[0]!!}</h4><p>URL</p>                         
 <h4>{!!$r_a->cuenta_13->usuario[0]!!}</h4><p>Usuario</p>
 <h4>{!!$r_a->cuenta_13->contraseña[0]!!}</h4><p>Contraseña</p>                
 </figcaption>
</figure>
@endif

