@extends('layouts.app')
@section('title', 'Important Cultural Properties')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<div id="landmark" class="mx-auto col-md-10 offset-md-1 pt-4" style="width:100%;">
    <h3 class=" text-white p-2 mt-2" style="background-color:#00205b;" >
      Important Culutral Properties
    </h3>
  <div class="row px-2">
      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/1 San Pablo Cathedral.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">SAN PABLO CITY CATHEDRAL</h5>
            <p id='landmarksText'>
              Construction of the bricks and stones church started in 1680 and finished in 1721.
              The detailed affluent, ecclesiastical ornamentation were made by artist Juan de los
              Santos under Father Hernando Cabrera’s direction (1618-1629) who mandated that all
              payments and tributes to the church be made in the form of gold, silver and other metals.
              It was used as prison /garrison during the second world war by the invading Japanese forces
              between 1941-1945.
            </p>
        </div>
      </div>
    <br>
      <div class="media float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">FARCON RESIDENCE</h5>
            <p id='landmarksText'>
              Constructed in the early 1950s.  Design  is a fusion of Hispanic and American-Colonial building styles.
              Home of Municipal President (1945) Don Alfonso Farcon.
            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/farcon.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>

      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/plaza1.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">THE CITY PLAZA</h5>
            <p id='landmarksText'>
              *Rizal Monument was installed in 1911<br>
              *Plaza fountain was constructed between 1916-1918 during the term of Don Feliano Exconde<br>
              *Lamp posts in the plaza circle and islands along Rizal Ave. were erected  by Mun. President Crispin Calabia (1928-1931)<br>
              *The Mango Tree was believed to have been there since 1899.<br>
            </p>
        </div>
      </div>

      <div class="media float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">SAN PABLO CITY HALL</h5>
            <p id='landmarksText' >
            It represents the prevailing architectural characteristics and design during the American Colonial period when the structure was built.
            <br>
            The building was designed  by Architect Antonio Toledo, one of the government Architects during 
            the American Colonial period, show cases the popular design of the same period.  Other buildings
             designed by Architect Toledo include:  City Hall of Manila (1941), Dept. of Agriculture and Commerce 
             (now Tourism Building), Department of Finance (now National Museum), Leyte Capitol (1920s), Cebu Provincial Capitol 
             (1937), Manila Customs House, UP College of Medicine Annex (Padre Faura Campus), UP University Library 
             (Padre Faura Campus), Women’s Dormitory of the Philippine Normal School.

            

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/c_hall.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>

      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/hagdangbato.png')}}" alt="SPC" width="250px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">HAGDANG BATO</h5>
            <p id='landmarksText'>
              Constructed in 1915 under MP Marcial Alimario. It has five
               sections with a total of 89 steps. It serves as an access
                to Sampalok Lake from the view deck/Bonifacio Shrine.
                The lot was part of Dona Leonila Park which was donated by Cabesang Sixto Bautista.
            </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">CASA REAL/OLD CFI BUILDING</h5>
            <p id='landmarksText' >
            Casa Real was the first public building build by the Spanish friars in 1810 – 1814 under Father Cabrera; Rebuilt in 1905-1907 during the American regime under the supervision of the Philippine Commission.  It served as the local government administrative building/old munisipyo until March 30, 1940; house the Court of First Instance from 1940 till late 1980s.
            After its rehabilitation in 2008-2009, it is used as the Department of Education Library Hub to present. 
            The right wing of the second floor House the Family Court since 2017.

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/casa real.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
      </div>

      <div class="media float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/central.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
        <div class="media-body">

          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">SAN PABLO CENTRAL SCHOOL</h5>
            <p id='landmarksText'>
            As the first public school, the San Pablo Central School paved the way for the education of most San Pableños. 
            Early professionals and local leaders were educated in the institution, under the American teachers.  
            <br>
            The site was acquired between 1908 and 1910. 
            By virtue of the Gabaldon Act, the first public school building was constructed in 1916 and was named 
            Thomas Jefferson Building, now Mabini building.  Intermediate classes were held there (grades 4-7) while primary grades 
            were held at Escuela Pia.  In 1913, 18 students, the first graduates of grade 7 received their diplomas; 1918 Lincoln 
            Building now Bonifacio was constructed; 1925 Rizal Building was constructed; 1929 when the Minerva Shrine was installed, 
            a donation of the graduates of that year; 1931 when the school’s iron gates and fence were completed; 1940 Quezon building
             was constructed; 1941  when the public high school opened. The Boys High was housed at the Rizal Building while the Girl’s 
             High was at the Bonifacio Building. In 1944, the buildings were damaged by the bombs of the Japanese invading forces. 
             By virtue of the Rehabilitation Act of 1946, the buildings were restored.

            </p>
        </div>
      </div>
      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:3490DC;background-color:#a9f2ff;">PRUDENCIA FULE ACESSTRAL HOUSE</h5>
            <p id='landmarksText' >
            Built in the 1890s.
            <br>
            This ancestral house was used as hide-out of General
             Miguel Malvar when he was in Laguna to confer with the Katipuneros in the late 1890s. 
             The property was donated by the heirs of Ms. Prudencia Fule to the city government  to be used for educational 
             purposes only.

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/prudencia.jpg')}}" alt="SPC" width="350px" class="float-right mr-2">
      </div>

    </div>
      <!-- <h3 class=" text-white p-2 mt-4" style=" background-color: #ff4554;">
        Cultural Properties
      </h3> -->

    <div class="row px-2">
    <div class="media col-12 float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/jose rizal.jpg')}}" alt="SPC"  width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">DR. JOSE RIZAL MONUMENT</h5>
          <p id='landmarksText' >
          The Jose Rizal monument is a reminder of the martyrdom of our national hero,  who sacrificed his life for Philippine Independence.  The books he wrote exposed the malpractices and hidden motives of the Spaniards to keep the Filipino people subdued, indolent and blind followers.
<br>
The original monument is believed to be the first Rizal monument with the statue of the hero in the Philippines which was installed in June 11, 1911.  It was replaced in 1969 by the martyr’s statue. 

          </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0  font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">PINAGLABANAN SHRINE</h5>
            <p id='landmarksText' >
            The Battle of Sta. Isabel was the first Fil-Am uprising in the city of San Pablo against the invading Japanese Imperial Army.  Nine (9) Filipino Guerillas died on the spot while three (3) were missing in action.
            <br>
The battle of Sta. Isabel Shrine was erected in November 22, 1979 to commemorate the event on the historic spot on November 22, 1944. Filipino-American Guerilla unit under Col. Gertrudo San Pedro valiantly fought the invading Japanese imperial Forces during WWII.


            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/pinaglabanan.JPG')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>

      <div class="media col-12 float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/7 Apolinario Mabini.JPG')}}" alt="SPC"  width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">APOLINARIO MABINI SHRINE</h5>
          <p id='landmarksText' >
          The Apolinario Mabini Shrine, the only one in the city of San Pablo and strategically located at the center 
          island of the city main street is a reminder to everyone of the very important role that 
          Apolinario Mabini played in the achievement of freedom and independence of the country from foreign invaders.
          </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">ANDRES BONIFACIO MONUMENT</h5>
            <p id='landmarksText' >
            The Bonifacio monument is a reminder of the heroic deeds of Andres Bonifacio in the quest for Philippine Independence.  It is strategically located at the upper west bank of Sampalok Lake, against a panoramic view of the lake from that view deck. It was inaugurated in November 30, 1997 in time for the hero’s 134th birth anniversary.
            <br>
            Sculptured in concrete cement by Conrado Balubagan of Sta. Cruz, Laguna. It is located at the elevated western bank of Sampalok Lake. The monument was inaugurated in November 30, 1997 in time for the 134th birth anniversary of Andres Bonifacio, Founder of Katipunan.

            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/boni.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>

      
      <div class="media col-12 float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/RAILROAD.jpg')}}" alt="SPC"  width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">SAN PABLO RAILROAD STATION</h5>
          <p id='landmarksText' >
          The coming of the railroad system to San Pablo City in 1908 revolutionized the transport of coconut- 
          the city’s primary product, to Manila and ports where they are loaded and exported to various countries in 
          the west and Europe, capitalizing on the high demand for coconut products abroad.  This tremendously boosted the economy of San Pablo.  In 1912, the Bureau of Public Works Publication mentioned that the most prosperous community in the Philippines was San Pablo (Juan B. Hernandez, San Pablo delos Montes).
          </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">TRECE MARTIRES SHRINE</h5>
            <p id='landmarksText' >
            The Trece Martires monument is a reminder of the martyrdom of the 13 Filipinos who were part of  the quest for 
            Philippine Independence.  
            It is located at the intersection of a street which was named in their behalf.
            <br>
            Located just a few meters from the shrine of Andres Bonifacio. Constructed in honor of the thirteen martyrs of Cavite who were executed by musketry in September 12, 1896, for cooperating with the Katipunan during the Philippine Revolution against Spain. The shrine was erected through the initiative of Attorney Teofila Sahagun, First woman President of the Association  de Diaconiza dela Iglesia Filipina Independiente on June 30, 1916.
            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/17 Trece Martirez Shrine.JPG')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>
      <div class="media col-12 float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/19 Guerilla Shrine in San Mateo.JPG')}}" alt="SPC"  width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">GUERILLA SHRINE</h5>
          <p id='landmarksText' >
          The Battle of Mt. Kalisungan was the last Fil-Am uprising in the city of San Pablo against the Japanese Imperial Army in March 29, 1945.  San Pablo City was finally liberated from the Japanese invaders on April 3, 1945
          <br>
          The battle of Mt. Kalisungan/WW II Memorial Shrine was inaugurated in August 27, 2000 to commemorate the event on the historic spot on March 29, 1945. Guerillas and American forces fought hard to drive away Japanese forces from the city during WWII.

          </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0  font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">LINA BUILDUING</h5>
            <p id='landmarksText' >
            The Spanish Administration Building for Controlled Merchandise was constructed in 1814, of wood & light materials. It was burned in 1824 & was reconstructed the following year with stonewalls and tiled roofing under the supervision of Capitan Buenaventura de los Reyes with the assistance of church prior Apolinario Hernandez.
The structure was damaged during the war, along with other buildings in the city proper/ Rizal Avenue.


            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/Lina Building.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>

      <div class="media col-12 float-right mt-2 p-2">
        <img style="display:none" src="{{URL::asset('image/leonila park.jpg')}}" alt="SPC"  width="250px" class="float-right mr-2">
        <div class="media-body">
          <h5 class="mt-0 font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">DOÑA LEONILA PARK</h5>
          <p id='landmarksText' >
          Doña Leonila Park is the only park in the city today.  Between 1968 to 1972, Mayor Cesar Dizon spearheaded the beautification of the park by installing the promenades, lake view deck and  colonial lamp posts.
           It has not undergone any major rehabilitation and improvement for several decades till now.
          </p>
        </div>
      </div>

      <div class="media col-12 float-right mt-2 p-2 py-2">
        <div class="media-body text-right pr-2">
          <h5 class="mt-0  font-weight-bold" style="color:#ff4554;background-color:#ffe0e4">FRANKLIN BAKER COMPANY</h5>
            <p id='landmarksText' >
            Franklin Baker came to San Pablo (1922) under the name of Philippine Food Company, merged with Diehl
             Anderson Coconut Company.  By 1923, Franklin Baker’s desiccated manufacturing and the Calamba Sugar 
             Estate were competing for the premier industrial position in Laguna.  The FB Company was one of the institutions
              which helped in development of the City’s coconut industry, employed thousands of coconut famers and contributed 
              in the city coffers in terms of taxes, and socio-civic activities.  To date, Franklin Baker Company is the largest coconut
               manufacturing plant in Asia, 
            and distributes processed coconut products around the world.


            </p>
        </div>
        <img style="display:none" src="{{URL::asset('image/franklin.jpg')}}" alt="SPC" width="250px" class="float-right mr-2">
      </div>
    </div>
    <script>
      $(document).ready(function(){
        $(window).bind("load", function() {
          $("h5").addClass("p-2");
          $('#landmarkPic').css('display', 'none')
          $('h3').fadeIn();
          $("h5").fadeIn('slow');
          $('div').find('img').fadeIn('slow');
          $('div').delay('slow').find('p').slideDown(3000);
        });
      });
      // $(document).ready(function(){
      //     $("h5").addClass("p-2");
      //   });
      // });
    </script>
      <style media="screen">
        h5, h3, #landmarksText{
          display: none;
        }
        
      </style>
  </div>
</div>
