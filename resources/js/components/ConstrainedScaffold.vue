<template>

  <v-app id="inspire">
   <v-app-bar
     app
     color="white"
     flat
   >
     <v-container class="py-0 fill-height">
       <v-avatar
         class="mr-10"
         color="grey darken-1"
         size="32"
       ></v-avatar>

       <v-btn
         v-for="link in links"
         :key="link"
         text
       >
         {{ link }}
       </v-btn>

       <v-spacer></v-spacer>

       <v-responsive max-width="260">
         <v-text-field
           dense
           flat
           hide-details
           rounded
           solo-inverted
           placeholder="ex. Search 'Samsung A1'"
         ></v-text-field>
       </v-responsive>
     </v-container>
   </v-app-bar>

   <v-main class="grey lighten-3">
     <v-container>
       <v-row>
         <v-col cols="2">
           <v-sheet rounded="lg">
             <v-expansion-panels>
               <v-expansion-panel v-for="(item, index) in brands" :key="index">
                 <v-expansion-panel-header>
                   {{item}}
                 </v-expansion-panel-header>
                 <v-expansion-panel-content>
                   <div class="small">
                     Lorem ipsum dolor sit amet, consectetur adipiscing elit
                   </div>
                   <v-spacer></v-spacer>
                   <div class="gap">

                   </div>
                   <v-btn class="mx-1" color="primary">{{item}}</v-btn>
                 </v-expansion-panel-content>
               </v-expansion-panel>
             </v-expansion-panels>

           </v-sheet>
         </v-col>

         <v-col>
           <v-sheet
             min-height="380vh"
             rounded="lg"
           >

           <v-carousel v-model="model" cycle :show-arrow-on-hover="true" :show-arrows="true">
             <v-carousel-item v-for="(color, i) in colors" :key="i" >
               <v-sheet :color="color" height="100%" title >
                 <v-row class="fill-height" align="center" justify="center">
                   <div class="display-3"> Slide {{ i + 1 }}</div>
                 </v-row>
               </v-sheet>
             </v-carousel-item>
           </v-carousel>

           <div class="gap">
           </div>

           <v-divider></v-divider>

           <v-container>
             <v-row>

               <template v-for="(cate, n) in category">
                 <v-col :key="n" classs="mt-2" cols="12">
                   <div class="gap"/>
                   <strong> {{  cate }}</strong>
                 </v-col>


                 <v-col v-for="j in 6" :key="`${n}${j}`" col="6" md="2">
                   <CustomSheet :phone="phoneData[`${cate.toLowerCase()}`][n]"/>
                 </v-col>

               </template>
             </v-row>
           </v-container>

           </v-sheet>
         </v-col>
       </v-row>
     </v-container>
   </v-main>
   <footerComponent> </footerComponent>
 </v-app>

</template>

<script>

import CustomSheet from "./CustomSheet.vue";
import footerComponent from "./footerComponent.vue";

export default {
  components: {CustomSheet, footerComponent},
  data: () => ({
      links: [
        'Dashboard',
        'Newsfeed',
        'Phones',
        "Brands",
        'Updates',
      ],
      brands: [
        "Asus",
        "Samsung",
        "Xiaomi",
        "Realme",
        "Poco",
        "Apple",
        "Nokia",
        "Oppo",
        "Vivo",
        "Microsoft",
        "LG",
        "Motorolla",
        "BlackBerry",
        "Huawei"
      ],
      colors: [
        "primary",
        "secondary",
        "yellow darken-2",
        "red",
        "orange"
      ],
      model: 0,
      category: [
        "Asus",
        "Samsung",
        "Xiaomi",
        "Oppo",
        "LG",
        "Apple",

      ],
      mobileData: [
        "Asus",
        "Samsung",
        "Xiaomi",
        "Oppo",
        "LG",
        "Apple",
        "Nokia",
      ],
      phoneData: null
    }),
    created() {
      axios.get("/api/phones/dashboard").then(response => {
        this.phoneData = response.data;
        console.log(response.data);
      }).catch(error => {
        console.log(error);
      })
    }
}
</script>

<style scoped>
.small{
  font-size: 10px;
}
.gap{
  height: 30px;
}
</style>
