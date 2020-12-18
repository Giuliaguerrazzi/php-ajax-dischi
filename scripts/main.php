<section class='disc'>
    <div class='container'>
        
        <div v-for='cd in disc' class='box-disc'>
          
            <img :src="cd.poster" alt="">

            <h4>{{cd.title}}</h4>

             <p>{{cd.author}}</p>

            <h4>{{cd.year}}</h4>
            
            <p>{{cd.genre}}</p>

        </div>
    </div>

</section>
