<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<?php

function yt_shortcode_function( $atts = array() ) 
{
  
    // set up default parameters
    extract(shortcode_atts(array(
        'id'    => 'test'
    ), $atts));
    
    return '<div class="youtube-video-container"><iframe
                    width="560"
                    height="315"

                    src="https://youtu.be/'. $id .'?autoplay=1"
                    srcdoc="<style>
                            * {
                                padding:0; 
                                margin:0; 
                                overflow:hidden;
                            }
                            
                            html,body {
                                height:100%;
                            }
                            
                            img,span {
                                position:absolute;
                                width:100%;
                                top:0;
                                bottom:0;
                                margin:auto;
                            }

                            a{
                                display: flex;
                                align-items: center;
                                justify-content: space-around;
                            }
                            
                            span {
                                height: 40px;
                                text-align:center;
                                font:32px sans-serif;
                                color:white;
                                background-color: rgba(0, 0, 0, 0.6);
                                width: 50px;
                                line-height: 1;
                                padding: 0px 5px;
                                border-radius: 5px;
                                display: flex;
                                align-items: center;
                                justify-content: space-around;
                                transition: all 0.3s ease;
                            }    
                            span:hover{
                                background-color: rgba(0, 0, 0, 0.9);
                                transform: scale(1.2);
                            }                  
                    </style>

                <a href=https://www.youtube.com/embed/'. $id .'?autoplay=1>
                <img src=https://img.youtube.com/vi/'. $id .'/hqdefault.jpg >
                    <span>▶</span>
                </a>"
                
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
            ></iframe></div>';
}

add_shortcode('yt', 'yt_shortcode_function');
?>
