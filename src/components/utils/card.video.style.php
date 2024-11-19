<?php

namespace Src\Components\Utils;

function cardVideoStyle(){
    
    echo "
        <style>
            .video-card {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 1.5rem;
                width: 17.67rem;
                height: 19.56rem;
                background-color: #202024;
                border-radius: 1.25rem;
                position: relative;
            }
            
            .imgs{
                width: 100%;
                height: 9.8rem;
                
            }
            
            .temp {
                position: absolute;
                top: 1rem;
                right: 1rem;
                color: white;
                background-color: rgba(36, 39, 48, 0.7);
                border-radius: 0.43rem;
                width: 3.14rem;
                height: 1.25rem;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 0.62rem;
            }
            
            img{
                width: 100%;
                height: 9.8rem;
                border-top-left-radius: 1.25rem;
                border-top-right-radius: 1.25rem;
            
            
            }
            
            .info-video {
                width: 15.09rem;
                display: flex;
                flex-direction: column;
                
            }
            
            .content {
                font-size: 1rem;
            }
            
            
            .info-author {
                padding-bottom: 0.75rem;
                font-size: 0.81rem;
                color: #B7B9D2 ;
            }
            
            .info-title {
                font-size: 1rem;
                color: #ffffff;
                height: 4.08rem;
            }
            
            .info-content {
                display: flex;
                color: #808191;
                font-size: 0.75rem;
                bottom: 1.5rem;
                
            }
        </style>
    ";
}