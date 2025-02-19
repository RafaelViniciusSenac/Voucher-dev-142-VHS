<?php
    namespace Src\Views\Components;

    function FastComponent($thumbUrl, $likes, $nameProfile, $description){
        if ($likes >= 1000000) {
           $likes = number_format($likes / 1000000, 2, ',', ''). 'M';
       } elseif ($likes >= 1000) {
            $likes = number_format($likes / 1000, 2, ',', '') . 'K';
        }
        return "
            <div class='bg-[url($thumbUrl)] w-[24.96rem] h-[43.87rem] rounded-[0.80rem]'>
                <img src='../../../public/icons/SetadBack.svg' alt='' class='relative top-[1.32rem] relative left-[1.17rem]'>
                <div class='flex flex-col w-[2.5rem] items-center relative top-[33.43rem] relative left-[21.12rem]'>
                    <img src='../../../public/icons/coracao.svg' alt=' class='>
                    <p class='text-white'>$likes</p>
                    <img src='../../../public/icons/compartilharFast.svg' alt=' class='relative top-[1.34rem]'>
                </div>
                <img src='../../../public/icons/play.svg' alt='' class='relative left-[11.29rem] relative top-[12.43rem]'>
                <div class='relative left-[0.78rem] relative top-[28rem]'>
                    <div class='flex items-center gap-x-[0.36rem]'>
                        <div class='bg-black w-[1.54rem] h-[1.59rem] rounded-[0.42rem]'></div>
                        <div class='text-[1.5rem] font-medium text-white ml-[0.36rem]'>$nameProfile</div>
                    </div>
                        <div class='text-[1rem] font-regular text-white'>$description</div>
                </div>
            </div>
            
        
        ";
    }
?>





