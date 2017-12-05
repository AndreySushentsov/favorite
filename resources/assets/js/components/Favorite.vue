<template>
  <span>
    <a href="#" v-if="isFavorited" @click.prevent="unFavorite(post)">
      <span class="glyphicon glyphicon-heart"></span>
    </a>
    <a href="#" v-else @click.prevent="favorite(post)"></a>
  </span>
</template>
<script>
  export default {
      props: ['post', 'favorited'],

      data: function () {
          return {
              isFavorited:'',
          }
      },

      mounted: {
          favorite(post) {
              axios.post('/favorite/' + post)
                  .then(response => this.isFavorited = true)
                  .catch(response => console.log(response.data));
          },

          unFavorite(post) {
              axios.post('/favorite/' + post)
                  .then(response => this.isFavorited = false)
                  .catch(response => console.log(response.data));
          }
      }
  }
</script>