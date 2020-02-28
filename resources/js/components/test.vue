
<!-- ********

     ************
     
     *************
         
         Notice : Delete Usless Coments

         - this file is Dashboard main Here win can find Components Imported 

         vuetifyjs : v2.2.15   
   
      ********

     ************
     
     *************
-->
  
<template>
 <v-app
    id="inspire"
    light
  > 


<!-- ********************************* Bar Top    ************************************* -->

    <!-- if ( drawer is Activated or/and mini_Variant is not activated ) then applied left: 235px + height: 55px for app-bar   -->

  
    <v-app-bar app   :class="{ navigationActivated: drawer == true  , mini_Variant_is_Activated : mini == false }" >

      <v-app-bar-nav-icon @click.stop="drawer = !drawer" ></v-app-bar-nav-icon>

      <v-toolbar-title>{{informations[0].username}} , {{informations[0].role_name}} </v-toolbar-title>

       <!-- Dark Mode -->

       <v-flex></v-flex>

       <v-switch   v-model="$vuetify.theme.dark"  primary label="Dark" />


      <v-spacer></v-spacer>

       <v-btn @click="logout"> <v-icon color="grey darken-1" style="margin-right:5%"> logout </v-icon>  Déconenxion </v-btn> 

    </v-app-bar>



<!-- ********************************* Drawer    ************************************* -->

    <v-navigation-drawer v-model="drawer" fixed  app  :mini-variant="mini"  :class="{mini_Variant_Not_Activated : mini == false  }"> 


                    <!-- v-subheader class="mt-3 grey--text text--darken-1">
                    
                       <v-icon color="grey darken-1" style="margin-right:5%"> home </v-icon>  <a href="/"><h4>Aller à La Page d'Accueil</h4> </a>   
                    
                    </v-subheader -->



                 <!-- Dynamic Change navigation Drawer width   -->

                <v-app-bar-nav-icon @click="mini = !mini" class="btn_mini_changer" ></v-app-bar-nav-icon>


                    
                <v-flex >

                     <v-subheader class="mt-3 grey--text text--darken-1 light ">

                       
                           <!-- Logo Image of the Application here we have sonatrach Example -->

                           <img src="/images/admin/sonatrach-logo-page.png" alt="" width="40" height="40">
                        
                           <Strong style="color:white"> My Dashboard  </Strong>  

         
                     </v-subheader>

                </v-flex>

       <v-divider></v-divider>
     
       <v-list >
         

          <v-list-item-group >  

                   <v-list-item   v-for="(item , index ) in items" :key="item.text"  :class="{ ActiveLink: index == isActive}"   dense >        
                  

                       <v-list-item-icon>
    
                           <v-icon >{{ item.icon }}</v-icon>
    
                       </v-list-item-icon>
    
   
                        <v-list-item-content>
                    
    
                             <v-list-item-title>
                         
                               {{ item.text }}  
                                                   
                             </v-list-item-title>
                          
                        </v-list-item-content>

                 

                        <v-btn icon circle small color="red"  style="color:white" v-if="item.count == true ">

                           <span text-color="white"> {{ countnotifications }} </span>  
                             
                         </v-btn>
    
    
                    </v-list-item>

                   
                    <!--v-divider></v-divider -->

          </v-list-item-group>
    

     </v-list>

     


    </v-navigation-drawer>

     <!-- *********************************  Toolbar   ************************************* -->




  </v-app>
</template>

<script>
  export default {
         

          props: {
         
              

              countnotifications:{
                default: '0',
              } ,

          
          },


    data: () => ({

      drawer: null,

      informations : [ 
        
        { username : 'Djebiri Hamza ' , role_name : 'Super Administrateur'} 
        
        ] , 

      
        classe: { mesquestion :false , mesquestion :false , mesquestion :false , } ,

        isActive : null,

        isActive2 : null ,

      
      /** NavDrawer Options : */

         mini  : false  ,

      primaryDrawer: { 

         mini  : null ,
      } ,
            
      items: [
        { icon: 'fas fa-question', text: 'Tableau de Bord' ,link:'profil/mesquestions' , count :''},
        { icon: 'fas fa-file-download', text: 'Mes Fichiers',link:'profil/usermodule', count :'' },
        { icon: 'fas fa-gavel', text: 'Mes Opinions',link:'profil/mesopinions' , count :''},       
        { icon: 'notifications', text: 'Mes Notifications',link:'profil/mesnotifications' , count :true } ,
        
      
        //{ icon: 'message', text: 'Messages' }, comming soon

      ],

      items2: [
        { icon: 'fas fa-user', text: 'Nom d\'Utilisateur',link:'profil/username' },
        { icon: 'fas fa-at', text: 'Email' ,link:'profil/email'},
        { icon: 'fas fa-unlock-alt', text: 'Mot de Passe' ,link:'profil/password' },
     
      ]
    }),

     
        mounted(){

                // this.PushLink('/Statistique') ;

               // this.$router.replace('/profil/mesquestions'); this.isActive = "0" ;
                  
        } ,

        methods:{

             PushLinkMenu(Link,index){

                   this.$router.push(Link) ; 

                   if( this.isActive2 != null ) this.isActive2 = null ; 

                   this.isActive = index ; 
         
                  
             } ,

             PushLinkParametre(Link,index){

                    this.$router.push(Link) ; 

                   if( this.isActive != null ) this.isActive = null ; 

                   this.isActive2 = index ; 


             },

            logout(){

                axios.post(`/logout`,{
                                                                  
                  }).then(response => {

                          if(response.status == 200) window.location = "/" ;
  
                  }).catch((err) => {}) 
           
             },


        },
    
  }
</script>

<style>
   
   .ActiveLink ,.Activeparametre{

    background: #0288D1 !important;

    color: white ;
  }

</style>