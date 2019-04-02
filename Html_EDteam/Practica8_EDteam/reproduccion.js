        const video= document.getElementById('video');
        const play= document.getElementById('play');
        const pause= document.getElementById('pause');
        
        play.addEventListener('click',() =>{
            video.play()
        })
        pause.addEventListener('click',() =>{
            video.pause()
        })