<style media="screen">
body{

  overflow-x: hidden;
}
.wrapper {
    display: flex;
    width: 100%;
    align-items: stretch;

}
.container-fluid{
   margin:0px;
   padding: 0px;
}
td {
  
   max-width: 50px;
   white-space: nowrap;
   overflow: hidden;
   text-overflow: ellipsis;
}
th{
   width: 120px;
}

.wrapper {
   display: flex;
   align-items: stretch;
}

#sidebar {
   min-width: 200px;
   max-width: 200px;
min-height: 100vh;

}
.sidebar-wrapper{
 background: #005b96;
}

#sidebar.active {
   margin-left: -200px;
}

#sidebar {
   min-width: 200px;
   max-width: 200px;


}

/* a[data-toggle="collapse"] {
   position: relative;
} */

/* .dropdown-toggle::after {
   display: block;
   position: absolute;
   top: 50%;
   right: 20px;
   transform: translateY(-50%);
} */

@media (max-width: 768px) {
   #sidebar {
       margin-left: -200px;
   }
   #sidebar.active {
       margin-left: 0;
   }
}

@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


body {
  margin-top: 0;
   background: #fafafa;
}

p {
   font-size: 1.1em;
   font-weight: 300;
   line-height: 1.7em;
   color: #999;
}

a, a:hover, a:focus {
   color: inherit;
   text-decoration: none;
   transition: all 0.3s;
}

#sidebar {
   /* don't forget to add all the previously mentioned styles here too */
   background: #005b96;
   color: #fff;
   transition: all 0.3s;
}

#sidebar .sidebar-header {
   padding: 20px;
   background: #03396c;
}

#sidebar ul.components {
   padding: 20px 0;
   border-bottom: 1px solid #47748b;
}

#sidebar ul p {
   color: #fff;
   padding: 10px;
}

#sidebar ul li a {
   padding: 10px;
   font-size: 1.1em;
   display: block;
}
#sidebar ul li a:hover {
   color: #03396c;
   background: #fff;
}

#sidebar ul li.active > a, a[aria-expanded="true"] {
   color: #fff;
   background: #03396c;
}
ul ul a {
   font-size: 0.9em !important;
   padding-left: 30px !important;
   background: #03396c;
}
</style>
