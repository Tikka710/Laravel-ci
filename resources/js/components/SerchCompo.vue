<template>
  <form class="form-inline my-2 my-lg-0">
    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" v-model="keyword">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" v-on:click.prevent="getSearch()">Search</button>
  </form>
</template>

<script>
export default {
  data(){
    return {
      keyword: '',
      articles: []
    }
  },
  methods: {
    getSearch(){
      axios.get('/search?title=' + this.keyword)
        .then(res => {
          this.articles = res.data;
          console.log(this.data)
        })
        .catch(error => {
          console.log('データの取得に失敗しました')
        });
    }
  },
  watch: {
    keyword(){
      this.getSearch();
    }
  }
}
</script>
