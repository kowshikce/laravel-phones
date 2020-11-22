<template>
  <div class="customsheet">
     <v-sheet height="150" light>
       <v-card>
         <v-img height="100px" :src="phone.img_url" contain></v-img>
         <v-card-subtitle >{{phone.model}}</v-card-subtitle>
         
       </v-card>
     </v-sheet>
  </div>
</template>

<script>
export default {
  props: ["phone"],
  created() {
    console.log(this.phone);
  }

}

</script>

<style scoped>
.customsheet{
  height: 150px;
}
</style>
